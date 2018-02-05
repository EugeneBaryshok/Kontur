<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
	public $phone;
    public $email;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email',], 'required'],
            // email has to be a valid email address
            ['email', 'string', 'max' => 250],
            ['body', 'string', 'max' => 1000],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }
 public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'email' => 'E-mail/Телефон',
            'phone' => 'Телефон',
            'body'  => 'Сообщение',
        ];
    }
    /**
     * @return array customized attribute labels
     */
//    public function attributeLabels()
//    {
//        return [
//            'verifyCode' => 'Verification Code',
//        ];
//    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
     public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['konturland@gmail.com' => $this->name])
                //->setFrom([$this->name])
                ->setSubject('Заявка с сайта '.$this->name)
                ->setTextBody($this->email."\n Телефон: ".$this->phone."\n Сообщение: ".$this->body)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
