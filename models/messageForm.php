<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\message;



class MessageForm extends Model {

		public $name;
    public $message;
    public $verifyCode;



	public function rules(){
      return [
      ['name', 'required', 'message'=>'Это поле обязательно к заполнению'],
      ['message', 'required', 'message'=>'Это поле обязательно к заполнению'],
     	['name', 'string', 'max'=>255,'tooLong' => 'Имя должно быть не более 255 символов'],
      ['verifyCode', 'captcha'],
      ];
    }


    public function messageSave(){

    	$message= new message;
    	$message->name=$this->name;
    	$message->message=$this->message;

    	return $message->save() ? true : false;
    }

    public function messageSend(){
      $mail=Yii::$app->mailer->compose()
      ->setFrom('onishko-93@mail.ru')
      ->setTo('onishko-93@mail.ru')
      ->setSubject('Question')
      ->setHtmlBody('<p>Name:'.$this->name.'</p><b>Question:'.$this->message.'</b>')
      ->send();

      return $mail ? true : false;

    }

}