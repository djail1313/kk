<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $name;
    public $phone;
    public $identity_type;
    public $identity_no;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['identity_no', 'filter', 'filter' => 'trim'],
            ['identity_no', 'required'],
            ['identity_no', 'string', 'max' => 255],
            ['identity_no', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This identity no address has already been taken.'],

            ['name', 'required'],
            ['identity_type', 'filter', 'filter' => 'trim'],
            ['phone', 'filter', 'filter' => 'trim'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->name = $this->name;
            $user->identity_type = $this->identity_type;
            $user->identity_no = $this->identity_no;
            $user->phone = $this->phone;
            $user->group_id = 1;
            $user->generateActiveToken();
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
