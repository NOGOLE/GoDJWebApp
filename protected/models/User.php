<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $user_id
 * @property string $first
 * @property string $last
 * @property string $username
 * @property string $country
 * @property string $city
 * @property string $state
 * @property string $bio
 * @property string $email
 * @property string $password
 * @property string $hashed_password
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    private $repeat;
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first, last, username, country, city, state, bio, email, password', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('first, last, username, country, city, state', 'length', 'max'=>25),
			array('bio', 'length', 'max'=>5000),
			array('email, password', 'length', 'max'=>50),
			array('hashed_password', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, first, last, username, country, city, state, bio, email, password, hashed_password', 'safe', 'on'=>'search'),
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
			'first' => 'First',
			'last' => 'Last',
			'username' => 'Username',
			'country' => 'Country',
			'city' => 'City',
			'state' => 'State',
			'bio' => 'Bio',
			'email' => 'Email',
			'password' => 'Password',
			'hashed_password' => 'Hashed Password',
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
		$criteria->compare('first',$this->first,true);
		$criteria->compare('last',$this->last,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('hashed_password',$this->hashed_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
         public function validatePassword($password)
        {
            return CPasswordHelper::verifyPassword($password, $this->hashed_password);
        }
        
        public function hashPassword($password)
        {
            return CPasswordHelper::hashPassword($password);
        }
}
