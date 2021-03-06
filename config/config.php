<?php

return [
    'node_path' => 'node',
    'importer_path' => './node_modules/.bin/xlsx-laravel-spreadsheet-importer',
    'id_column' => 'data_id',
    'file_id_column' => 'data_file_id',
    'batch_size' => 1000,
    'progress_event' => Alfonsobries\LaravelSpreadsheetImporter\Events\ImporterProgressEvent::class,
    'finished_event' => Alfonsobries\LaravelSpreadsheetImporter\Events\ImporterProgressFinishedEvent::class,
    'error_event' => Alfonsobries\LaravelSpreadsheetImporter\Events\ImporterProgressErrorEvent::class,
    'temporal_table_name_prefix' => 'temp_',
    'secs_for_check_if_node_process_still_running' => 30,
];
