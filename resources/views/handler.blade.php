<?php
# Stimulsoft.Reports.JS
# Version: 2023.2.8
# Build date: 2023.06.27
# License: https://www.stimulsoft.com/en/licensing/reports
?>
<?php

use Stimulsoft\StiDataHandler;

// Event handler classes and functions
require_once 'PHPDataAdapters\enums\StiDatabaseType.php';
require_once 'PHPDataAdapters\enums\StiDataCommand.php';
require_once 'PHPDataAdapters\classes\StiConnectionInfo.php';
require_once 'PHPDataAdapters\classes\StiDataRequest.php';
require_once 'PHPDataAdapters\classes\StiResult.php';
require_once 'PHPDataAdapters\classes\StiDataResult.php';
require_once 'PHPDataAdapters\classes\StiResponse.php';
require_once 'PHPDataAdapters\classes\StiDataHandler.php';

// Data adapters for supported database types
require_once 'PHPDataAdapters\StiDataAdapter.php';
require_once 'PHPDataAdapters\StiFirebirdAdapter.php';
require_once 'PHPDataAdapters\StiMsSqlAdapter.php';
require_once 'PHPDataAdapters\StiMySqlAdapter.php';
require_once 'PHPDataAdapters\StiOdbcAdapter.php';
require_once 'PHPDataAdapters\StiOracleAdapter.php';
require_once 'PHPDataAdapters\StiPostgreSqlAdapter.php';

// You can configure the security level as you required.
// By default is to allow any requests from any domains.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Engaged-Auth-Token');
header('Cache-Control: no-cache');

$handler = new StiDataHandler();
$handler->process();