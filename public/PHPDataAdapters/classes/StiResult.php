<?php
# Stimulsoft.Reports.JS
# Version: 2023.2.8
# Build date: 2023.06.27
# License: https://www.stimulsoft.com/en/licensing/reports
?>
<?php

namespace Stimulsoft;

class StiResult
{
    public $handlerVersion;
    public $adapterVersion;
    public $checkVersion = true;

    public $success = false;
    public $notice;
    public $object;
    public $variables;
    public $report;

    public static function success($notice = null, $object = null)
    {
        $result = new StiResult();
        $result->success = true;
        $result->notice = $notice;
        $result->object = $object;

        return $result;
    }

    public static function error($notice = null)
    {
        $result = new StiResult();
        $result->success = false;
        $result->notice = $notice;

        return $result;
    }
}