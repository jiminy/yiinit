<?php

namespace frontend\controllers;

use frontend\components\web\Controller;
use frontend\Yii;

class SiteController extends Controller
{
	public function actionIndex()
	{
        $this->getAssetsBase();
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}