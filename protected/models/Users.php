<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $password
 * @property string $email
 * @property string $username
 * @property integer $role
 *
 * @property string $confirm_url
 * @property integer $confirm_time
 * @property integer $confirm
 * @property integer $time_create
 * @property integer $time_update
 */
class Users extends CActiveRecord
{
    public $_identity;
    public $error;
    public $id;
    public $confirm_password;
    public $agreement;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}
    public function beforeSave()
    {
        if($this->isNewRecord)
        {
            $this->time_create=strtotime(date("Y-m-d H:i:s"));
            $this->password=$this->encryptPass();
        }
        else
        {
            $this->time_update=strtotime(date("Y-m-d H:i:s"));
        }
        return parent::beforeSave();
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role, time_create', 'required'),
			array('role, confirm_time, confirm, time_create, time_update', 'numerical', 'integerOnly'=>true),
			array('password, username, confirm_url', 'length', 'max'=>512),
            array('confirm_password','checkPass'),
            array('username', 'empty_username'),
            array('username', 'check_duplicates'),
            array('email', 'email','checkMX'=>true),
			array('email', 'length', 'max'=>256),
            array('email','empty_email'),
            array('password','empty_password'),
            array('agrement','empty_agreement'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, password, email, username, role, confirm_url, confirm_time, confirm, time_create, time_update', 'safe', 'on'=>'search'),
		);
	}

    public function empty_agreement()
    {
        if($this->isNewRecord)
        {
            if($this->agreement=="0")
            {
                $this->addError("agreement","You must check agreement");
            }
        }
    }

    public function empty_username()
    {
        if($this->isNewRecord)
        {
            if(empty($this->username))
            {
                $this->addError("username","Username cannot be empty");
            }
        }
    }
    public function empty_email()
    {
        if($this->isNewRecord)
        {
            if(empty($this->email))
            {
                $this->addError("email","Email cannot be empty");
            }
        }
    }

    public function empty_password()
    {
        if($this->isNewRecord)
        {
            if(empty($this->password))
            {
                $this->addError("password","Password cannot be empty");
            }
        }
    }

    /*password generate*/
    public function encryptPass()
    {
        return crypt( $this->password, $this->time_create );
    }

    public function checkPass()
    {
        if($this->isNewRecord)
        {
            if($this->password!==$this->confirm_password)
            {
                $this->addError("confirm_password","Password must be mutch");
            }
        }
    }
    public function check_duplicates($attributes,$parameters)
    {
        if($this->isNewRecord)
        {
            $email_dupl=Users::model()->findByAttributes(array("username"=>strtolower($this->username)));
            if($email_dupl)
            {
                $this->addError("username","User already exists");
            }
        }

    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'password' => 'Password',
			'email' => 'Email',
			'username' => 'Username',
			'role' => 'Role',
			'confirm_url' => 'Confirm Url',
			'confirm_time' => 'Confirm Time',
			'confirm' => 'Confirm',
			'time_create' => 'Time Create',
			'time_update' => 'Time Update',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('confirm_url',$this->confirm_url,true);
		$criteria->compare('confirm_time',$this->confirm_time);
		$criteria->compare('confirm',$this->confirm);
		$criteria->compare('time_create',$this->time_create);
		$criteria->compare('time_update',$this->time_update);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    /*login*/
    public function login()
    {
        if(is_null($this->_identity))
        {
            $this->_identity=new UserIdentity($this->username,$this->password);
            $this->_identity->authenticate();
        }
        if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
        {
            Yii::app()->user->login($this->_identity);
            return true;
        }
        else return false;
    }

}
