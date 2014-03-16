<?php

namespace api;

use api\components\web\Application;

class Yii extends \Yii
{
    /**
     * @return Application
     */
    public static function app()
    {
        return parent::app();
    }
} 