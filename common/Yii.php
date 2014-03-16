<?php

namespace common;

use common\components\web\Application as WebApplication;
use common\components\console\Application as ConsoleApplication;

class Yii extends \Yii
{
    /**
     * @return WebApplication|ConsoleApplication
     */
    public static function app()
    {
        return parent::app();
    }
}