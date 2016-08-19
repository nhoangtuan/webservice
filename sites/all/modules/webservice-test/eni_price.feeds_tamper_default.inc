<?php
/**
 * @file
 * eni_price.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function eni_price_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'eni_city_electricity_import-has_electricity-default_value';
  $feeds_tamper->importer = 'eni_city_electricity_import';
  $feeds_tamper->source = 'has_electricity';
  $feeds_tamper->plugin_id = 'default_value';
  $feeds_tamper->settings = array(
    'default_value' => '1',
    'only_if_empty' => 0,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Set value or default value';
  $export['eni_city_electricity_import-has_electricity-default_value'] = $feeds_tamper;

  return $export;
}
