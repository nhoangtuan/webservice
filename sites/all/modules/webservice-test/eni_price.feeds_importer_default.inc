<?php
/**
 * @file
 * eni_price.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function eni_price_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'eni_city_electricity_import';
  $feeds_importer->config = array(
    'name' => 'ENI City Electricity Import',
    'description' => 'Import field "has_electricity" in eni_city from file electricity_served.csv',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => 0,
        'directory' => 'public://import/electricity_served_in.csv',
        'allowed_schemes' => array(
          'public' => 'public',
          'private' => 'private',
        ),
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'encoding' => 'UTF-8',
        'no_headers' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsCityProcessor',
      'config' => array(
        'mappings' => array(
          0 => array(
            'source' => 'code_postal',
            'target' => 'postal_code',
            'unique' => 1,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'code_insee',
            'target' => 'insee_code',
            'unique' => 1,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'commune',
            'target' => 'city_name',
            'unique' => 0,
          ),
          3 => array(
            'source' => 'has_electricity',
            'target' => 'has_electricity',
            'unique' => FALSE,
            'language' => 'und',
          ),
        ),
        'insert_new' => '1',
        'update_existing' => '2',
        'update_non_existent' => 'skip',
        'input_format' => 'plain_text',
        'skip_hash_check' => TRUE,
        'bundle' => 'row',
        'language' => 'und',
        'table' => 'eni_city',
        'key' => 'insee_code',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['eni_city_electricity_import'] = $feeds_importer;

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'eni_city_gaz_import';
  $feeds_importer->config = array(
    'name' => 'ENI City Gaz Import',
    'description' => 'Import fields "gaz_level", "code_zone" in eni_city from file gaz_served.csv',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => 0,
        'directory' => 'public://import/gaz_served_in.csv',
        'allowed_schemes' => array(
          'public' => 'public',
          'private' => 'private',
        ),
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'encoding' => 'UTF-8',
        'no_headers' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsCityProcessor',
      'config' => array(
        'mappings' => array(
          0 => array(
            'source' => 'code_postal',
            'target' => 'postal_code',
            'unique' => 1,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'code_insee',
            'target' => 'insee_code',
            'unique' => 1,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'commune',
            'target' => 'city_name',
            'unique' => 0,
          ),
          3 => array(
            'source' => 'code_zone',
            'target' => 'code_zone',
            'unique' => FALSE,
            'language' => 'und',
          ),
          4 => array(
            'source' => 'code_niveau',
            'target' => 'gaz_level',
            'unique' => FALSE,
            'language' => 'und',
          ),
        ),
        'insert_new' => '1',
        'update_existing' => '2',
        'update_non_existent' => 'skip',
        'input_format' => 'plain_text',
        'skip_hash_check' => TRUE,
        'bundle' => 'row',
        'language' => 'und',
        'table' => 'eni_city',
        'key' => 'insee_code',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['eni_city_gaz_import'] = $feeds_importer;

  return $export;
}
