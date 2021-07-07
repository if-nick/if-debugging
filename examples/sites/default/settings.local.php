<?php

/**
 * @file
 * Drupal settings for local development.
 */

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/services.local.yml';

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['omit_vary_cookie'] = TRUE;

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$_SERVER['development_vars'] = [$config, $settings];
