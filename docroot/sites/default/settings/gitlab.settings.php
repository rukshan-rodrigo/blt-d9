<?php

/**
 * @file
 * GitLab environment specific settings.
 */

/**
 * Overwrite CI default database host name.
 *
 * @see ci.settings.php
 */
$databases['default']['default'] = [
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'host' => '127.0.0.1',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
];
