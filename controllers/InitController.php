<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
/**
 *
 */
class InitController extends Controller
{
	public function init(){
		$app = Yii::$app;
		if (isset($_POST['_lang']))
		{
			$app->language = $_POST['_lang'];
			$app->session['_lang'] = $app->language;
		}
		else if (isset($app->session['_lang']))
		{
			$app->language = $app->session['_lang'];
		}
	}
}