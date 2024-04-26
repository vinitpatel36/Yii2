<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;
use yii\data\ActiveDataProvider;

class PostController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
