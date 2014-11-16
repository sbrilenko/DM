<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $id;
    public function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }
    public function authenticate()
    {
        $record=Users::model()->findByAttributes(array('username'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        elseif($record->password!==crypt($this->password,$record->time_create))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$record->id;
            $this->setState('id', $record->id);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->id;
    }
}