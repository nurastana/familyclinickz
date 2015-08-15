<?php

namespace app\modules\cms\models\form;

use yii\base\Model;
use \Yii;

class Feedback extends Model{

    public $name;
    public $phone;
    public $email;
    public $doctor;
    public $date;

    public function rules()
    {
        return [
          [['name','phone','doctor','date'],'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'name'=>'Ваше имя:',
          'phone'=>'Ваш телефон:',
          'doctor'=>'Врач (или отделение):',
          'date'=>'Дата записи:',
        ];
    }

    public function send()
    {
        $subject = 'Поступила новая заявка на прием - '.Yii::$app->name;
        $result = Yii::$app->mailer->compose('feedback',['model'=>$this,'subject'=>$subject])
            ->setFrom(Yii::$app->params['email']->from)
            ->setTo(Yii::$app->params['email']->to)
            ->setSubject($subject)
            ->send();
        return $result;
    }

}