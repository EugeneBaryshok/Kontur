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
    public $email2;
    public $name2;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
                [['name2'], 'required'],
            //[['name', 'email'], 'default'],
            //['name', 'default', 'value' => 1],
            //['email', 'default', 'value' => 1],
            // email has to be a valid email address
            // ['email2', 'string', 'max' => 250],
                ['email', 'default', 'value' => 1],     
                ['name', 'default', 'value' => 1],    
                [['email2'], 'validateEmailEmpty', 'skipOnEmpty'=> false],
                ['body', 'string', 'max' => 1000],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }
 public function attributeLabels()
    {
        return [
            'name2'  => 'Ваше имя',
            'email2' => 'Email или Телефон',
            'name'  => 'не заполнять',
            'email' => 'не заполнять',
//          'phone'  => 'Телефон',
            'body'   => 'Сообщение',
        ];
    }
     public function validateEmailEmpty()
    {
        if(empty($this->name) && empty($this->email))
        {
            if (empty($this->email2)) {
                $errorMsg = 'Укажите ваш email или телефон';
                $this->addError('email2', $errorMsg);
                return false;
            }
            return true;
        }
        else {
            $errorMsg = 'Спам';
            $this->addError('email2', $errorMsg);
            return false;
        }
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
    public function contact($email2)
    {
       // if(empty($this->name) && empty($this->email))
       // if((($this->name)== 1) && (($this->email)== 1))
      //  {
        if ($this->validateEmailEmpty()) {
            Yii::$app->mailer->compose()
                ->setTo($email2)
                // ->setFrom([$this->email2 => $this->name2])
                ->setFrom(['baryshok@speechpro.com' => $this->name2])
                ->setSubject('Заявка с сайта (с главной и контактов)')
                ->setTextBody("Телефон или email: ".$this->email2."\n Сообщение: ".$this->body)
                ->send();

            return true;
        }
        return false;
    }
  }

