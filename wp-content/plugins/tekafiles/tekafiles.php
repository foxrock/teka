<?php
/**
 * Plugin Name: Teka Files
 * Plugin URI: http://foxrock.co
 * Description: Teka file administrator.
 * Version: 0.1
 * Author: Andres Londono
 * Author URI: http://www.foxrock.co
 * License: GPL2
 */

global $tekafiles_db_version;
$tekafiles_db_version = "1.0";

function tekafiles_install () {
  global $wpdb;
  global $tekafiles_db_version;
  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

  $table_name = $wpdb->prefix . "tekafile";
  $sql = "CREATE TABLE $table_name (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT DEFAULT '',
    file VARCHAR(255) NOT NULL,
    enabled TINYINT NOT NULL DEFAULT '1',
    user BIGINT(20) NOT NULL DEFAULT '0',
    time DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    PRIMARY KEY  id (id),
    KEY user (user)
  );";
  dbDelta( $sql );

  $table_name = $wpdb->prefix . "tekadownload";
  $sql = "CREATE TABLE $table_name (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    tekafile BIGINT(20) UNSIGNED NOT NULL,
    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    user BIGINT(20) NOT NULL,
    PRIMARY KEY  id (id),
    KEY tekafile (tekafile),
    KEY user (user)
  );";
  dbDelta( $sql );

  add_option( "tekafiles_db_version", $tekafiles_db_version );
}

function tekafiles_update_db_check() {
  global $tekafiles_db_version;
  if (get_site_option( 'tekafiles_db_version' ) != $tekafiles_db_version) {
    tekafiles_install();
  }
}

function tekafiles_uninstall () {
  global $wpdb;
  $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}tekafile" );
  $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}tekadownload" );
}

register_activation_hook( __FILE__, 'tekafiles_install' );
register_deactivation_hook( __FILE__, 'tekafiles_uninstall' );
add_action( 'plugins_loaded', 'tekafiles_update_db_check' );