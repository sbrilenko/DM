<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $email;
    private $_id;

    public function __construct($email,$password)
    {
        $this->email=$email;
    }
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$model=Users::model()->findAllByAttributes(array("email"=>$this->email));
        if($model===null)
            $this->errorCode=self::ERROR_EMAIL_INVALID;
        elseif(!crypt($this->password,$model->password))
            $this->errorCode=self::ERROR_EMAIL_INVALID;
        else
            $this->_id=$model->id;
        $this->username=$model->username;
        $this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}