<?php

/**
 * This is the model class for table "barangkeluar".
 *
 * The followings are the available columns in table 'barangkeluar':
 * @property integer $idkeluar
 * @property integer $idbarang
 * @property string $tanggal
 * @property string $penerima
 *
 * The followings are the available model relations:
 * @property Stock $idbarang0
 */
class Barangkeluar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barangkeluar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idbarang, tanggal, jumlah, penerima', 'required'),
			array('idbarang', 'numerical', 'integerOnly'=>true),
			array('penerima', 'length', 'max'=>25),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idkeluar, idbarang, tanggal, penerima', 'safe', 'on'=>'search'),
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
			'idBrg' => array(self::BELONGS_TO, 'Stock', 'idbarang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idkeluar' => 'Idkeluar',
			'idbarang' => 'Idbarang',
			'tanggal' => 'Tanggal',
			'penerima' => 'Penerima',
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

		$criteria->compare('idkeluar',$this->idkeluar);
		$criteria->compare('idbarang',$this->idbarang);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('penerima',$this->penerima,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barangkeluar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
