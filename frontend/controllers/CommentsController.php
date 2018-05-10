<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Comments;

class CommentsController extends Controller
{

    public function actionIndex()
    {
        // Comments per page
        $cpp = 10;

        $comment = new Comments();
        $comment->scenario = Comments::SCENARIO_LEAVE_COMMENT;

        $formData = Yii::$app->request->post();

        foreach ($formData as &$item) {
            $item = htmlspecialchars($item);
        }

        if(Yii::$app->request->isPost) {
            $comment->attributes = $formData;

            if ($comment->validate() && $comment->saveComment()) {
                Yii::$app->session->setFlash('success', 'Your comment has been added.');
            }
        }
        $commentsList = Comments::getComments($cpp);

        return $this->render('index', [
            'comments' => $commentsList,
            'model' => $comment,
        ]);
    }

}