<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Security;

class SignupForm extends Model
{
    public $name;
    public $phone;
    public $email;
   public $email2;
   public $name2;
    public $body;
    /**
     * Здесь мы указываем правила валидации - они могут быть как стандартными, так и кастомными
     */

    public function rules()
    {
        return [
            ['name2', 'required'],
//[['phone','email'], 'safe'],
            [['email2'], 'email'],
            [['phone', 'email2'], 'validatePhoneEmailEmpty', 'skipOnEmpty'=> false],
            ['body', 'string', 'max' => 1000],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name2' => 'Ваше имя',
            'email2' => 'Email',
            'phone' => 'Телефон',
            'body'  => 'Сообщение',
        ];
    }

    /* Кастомная функция для проверки, что хотя бы одно из полей email или phone посетитель заполнил */
    public function validatePhoneEmailEmpty()
    {
        if(empty($this->name) && empty($this->email))
        {
            if (empty($this->phone) && empty($this->email2)) {
                $errorMsg = 'Укажите ваш email или телефон';
                $this->addError('phone', $errorMsg);
                $this->addError('email', $errorMsg);
            }
            if (!empty($this->phone2) && (strlen($this->phone) < 6)) {
                $errorMsg = 'Слишком мало цифр в номере телефона';
                $this->addError('phone', $errorMsg);
            }
        }
        else {
            $errorMsg = 'Спам';
            $this->addError('email', $errorMsg);
        }
    }

    /**
     * Аналог ContactForm
     */
    public function contact($email2)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email2)
                ->setFrom(['baryshok@speechpro.com' => $this->name2])
                //->setFrom([$this->name])
                ->setSubject('Заявка с сайта (с формы) '.$this->name2)
                ->setTextBody($this->email2."\n Телефон: ".$this->phone."\n Сообщение: ".$this->body)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}