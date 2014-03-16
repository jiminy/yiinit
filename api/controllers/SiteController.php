<?php

namespace api\controllers;

use api\components\web\Controller;
use api\Yii;

class SiteController extends Controller
{
    /**
     * Renders index
     */
    public function actionIndex()
    {
        echo json_encode(array('message' => 'Welcome to Yiinit Api Application'));
    }

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			json_encode($error);
		}
	}
}