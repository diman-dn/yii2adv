<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Новый автор успешно добавлен!');
            return $this->redirect(['/author/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Информация об авторе была успешно удалена!');

        return $this->redirect(['/author/index']);
    }

    public function actionIndex()
    {
        $authorsList = Author::find()->all();

        return $this->render('index', [
            'authorsList' => $authorsList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Информация об авторе была успешно обновлена!');
            return $this->redirect(['/author/index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
