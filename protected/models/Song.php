<?php

/**
 * This is the model class for table "song".
 *
 * The followings are the available columns in table 'song':
 * @property integer $id
 * @property integer $song_id
 * @property string $title
 * @property string $artist
 * @property string $genre
 * @property integer $artist_id
 * @property string $path
 */
class Song extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public $song;
	public function tableName()
	{
		return 'song';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' title, artist, genre', 'required'),
			array('song_id, artist_id', 'numerical', 'integerOnly'=>true),
			array('title, artist, genre', 'length', 'max'=>25),
			array('path', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, song_id, title, artist, genre, artist_id, path', 'safe', 'on'=>'search'),
                        array('path', 'file', 'types'=>'mp3,MP3', 'maxSize'=>1024*1024*50, 'tooLarge'=>'File has to be smaller than 50MB'),
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
			'song_id' => 'Song',
			'title' => 'Title',
			'artist' => 'Artist',
			'genre' => 'Genre',
			'artist_id' => 'Artist',
			'path' => 'Path',
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

		//$criteria->compare('id',$this->id);
		$criteria->compare('song_id',$this->song_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('artist',$this->artist,true);
		$criteria->compare('genre',$this->genre,true);
		$criteria->compare('artist_id',$this->artist_id);
		//$criteria->compare('path',$this->path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Song the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
