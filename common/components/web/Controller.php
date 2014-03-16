<?php

namespace common\components\web;

use common\Yii;

class Controller extends \CController
{
    private $_assetsBase;

    public function getAssetsBase()
    {
        if ($this->_assetsBase === null) {
            $this->_assetsBase = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias(Yii::app()->params['assets.base'])
            );
        }

        return $this->_assetsBase;
    }
} 