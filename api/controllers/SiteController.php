<?php



class SiteController extends Controller
{
	public $defaultAction = 'error';

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			json_encode($error);
		}
	}
}