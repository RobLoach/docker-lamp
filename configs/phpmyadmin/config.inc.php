<?php

/**
 * Docker LAMP Developer's phpMyAdmin Configuration File
 *
 * @author Rob Loach
 * @copyright 2014 Rob Loach (http://robloach.net)
 * @link http://docs.phpmyadmin.net/en/latest/config.html
 */

// phpMyAdmin settings
$cfg['VersionCheck'] = false;

// Server configuration
//for ($i = 0; $i < 10; $i++) {
  $cfg['Servers'][$i]['AllowNoPassword'] = true;
  $cfg['Servers'][$i]['AllowRoot'] = true;
  $cfg['Servers'][$i]['nopassword'] = true;
  $cfg['Servers'][$i]['user'] = 'root';
  $cfg['Servers'][$i]['password'] = 'root';
  $cfg['Servers'][$i]['controluser'] = 'root';
  $cfg['Servers'][$i]['controlpass'] = '';
//}
