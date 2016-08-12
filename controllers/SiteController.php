<?php

namespace app\controllers;

use Yii;
use app\models\Pessoa;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends InitController
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'main_index';
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        Yii::$app->view->title = 'UFRGSMUN 2016 - About';
        Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => 'Description set inside controller',
        ]);
        $dataProvider = new ActiveDataProvider([
            'query' => Pessoa::find(),
        ]);
        return $this->render('about', ['dataProvider'=>$dataProvider]);
    }

    public function actionMun()
    {
        Yii::$app->view->title = 'UFRGSMUN 2016 - MUN';
        return $this->render('mun');
    }

    public function actionUs()
    {
        $_POST['_lang'] = 'en-US';
        $this->init();
        return $this->goHome();
    }

    public function actionPt()
    {
        $_POST['_lang'] = 'pt-BR';
        $this->init();
        return $this->goHome();
    }
}
