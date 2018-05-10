<?php

namespace common\components;

use yii\base\Component;
use Yii;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    /**
     * @param \common\components\UserNotificationInterface $event
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }

    /**
     * @param \common\components\UserNotificationInterface $event
     * @return bool
     */
    public function notifyAdmins(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject($event->getSubject())
            ->send();
    }

}