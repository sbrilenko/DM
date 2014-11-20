<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $surename
 * @property string $birth
 * @property integer $country
 * @property string $city
 * @property integer $height
 * @property integer $weight
 * @property integer $hair
 * @property integer $eyes
 * @property integer $education
 * @property integer $material_status
 * @property integer $religion
 * @property string $personal_mail
 * @property string $phone
 * @property string $age_preferences
 * @property string $perfect_match
 * @property string $passport_image
 * @property integer $reg_other_site
 * @property string $languages_spoken
 * @property string $english_proficiency
 * @property integer $smoking
 * @property string $address
 * @property string $director_name
 * @property integer $number_of_active_female_clients
 * @property integer $number_of_cameras
 * @property integer $number_of_computers
 * @property integer $number_of_employees
 * @property integer $agency_logo
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, name,surename, smoking', 'required'),
			array('user_id, country, height, weight, hair, eyes, education, material_status, religion, reg_other_site, smoking, number_of_active_female_clients, number_of_cameras, number_of_computers, number_of_employees, agency_logo', 'numerical', 'integerOnly'=>true),
			array('name, city, personal_mail, phone, age_preferences, perfect_match, passport_image, english_proficiency, director_name', 'length', 'max'=>512),
			array('languages_spoken, address', 'length', 'max'=>1024),
			array('birth', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, name, birth, country, city, height, weight, hair, eyes, education, material_status, religion, personal_mail, phone, age_preferences, perfect_match, passport_image, reg_other_site, languages_spoken, english_proficiency, smoking, address, director_name, number_of_active_female_clients, number_of_cameras, number_of_computers, number_of_employees, agency_logo', 'safe', 'on'=>'search'),
		);
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
			'user_id' => 'User',
			'name' => 'Name',
            'surename'=>'Surename',
			'birth' => 'Birth',
			'country' => 'Country',
			'city' => 'City',
			'height' => 'Height',
			'weight' => 'Weight',
			'hair' => 'Hair',
			'eyes' => 'Eyes',
			'education' => 'Education',
			'material_status' => 'Material Status',
			'religion' => 'Religion',
			'personal_mail' => 'Personal Mail',
			'phone' => 'Phone',
			'age_preferences' => 'Age Preferences',
			'perfect_match' => 'Perfect Match',
			'passport_image' => 'Passport Image',
			'reg_other_site' => 'Reg Other Site',
			'languages_spoken' => 'Languages Spoken',
			'english_proficiency' => 'English Proficiency',
			'smoking' => 'Smoking',
			'address' => 'Address',
			'director_name' => 'Director Name',
			'number_of_active_female_clients' => 'Number Of Active Female Clients',
			'number_of_cameras' => 'Number Of Cameras',
			'number_of_computers' => 'Number Of Computers',
			'number_of_employees' => 'Number Of Employees',
			'agency_logo' => 'Agency Logo',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
        $criteria->compare('surename',$this->surename,true);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('hair',$this->hair);
		$criteria->compare('eyes',$this->eyes);
		$criteria->compare('education',$this->education);
		$criteria->compare('material_status',$this->material_status);
		$criteria->compare('religion',$this->religion);
		$criteria->compare('personal_mail',$this->personal_mail,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('age_preferences',$this->age_preferences,true);
		$criteria->compare('perfect_match',$this->perfect_match,true);
		$criteria->compare('passport_image',$this->passport_image,true);
		$criteria->compare('reg_other_site',$this->reg_other_site);
		$criteria->compare('languages_spoken',$this->languages_spoken,true);
		$criteria->compare('english_proficiency',$this->english_proficiency,true);
		$criteria->compare('smoking',$this->smoking);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('director_name',$this->director_name,true);
		$criteria->compare('number_of_active_female_clients',$this->number_of_active_female_clients);
		$criteria->compare('number_of_cameras',$this->number_of_cameras);
		$criteria->compare('number_of_computers',$this->number_of_computers);
		$criteria->compare('number_of_employees',$this->number_of_employees);
		$criteria->compare('agency_logo',$this->agency_logo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
