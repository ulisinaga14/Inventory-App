<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $idbarang
 * @property string $namabarang
 * @property string $deskripsi
 * @property integer $stock
 * @property string $gambar
 *
 * The followings are the available model relations:
 * @property Barangkeluar[] $barangkeluars
 * @property Barangmasuk[] $barangmasuks
 

 *@property Yii;
 *@property yii\db\ActiveRecord;
 *@property yii\behaviors\SluggableBehavior;
 *@property yii\behaviors\BlameableBehavior;
 */
class Stock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namabarang, deskripsi, stock, gambar', 'required'),
			array('stock', 'numerical', 'integerOnly' => true),
			array('namabarang, deskripsi', 'length', 'max' => 25),
			array('gambar', 'file', 'types' => 'jpg, png, gif', 'safe' => false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbarang, namabarang, deskripsi, stock, gambar', 'safe', 'on' => 'search'),
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
			'barangkeluars' => array(self::HAS_MANY, 'Barangkeluar', 'idbarang'),
			'barangmasuks' => array(self::HAS_MANY, 'Barangmasuk', 'idbarang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbarang' => 'Idbarang',
			'namabarang' => 'Namabarang',
			'deskripsi' => 'Deskripsi',
			'stock' => 'Stock',
			'gambar' => 'Gambar',
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

		$criteria = new CDbCriteria;

		$criteria->compare('idbarang', $this->idbarang);
		$criteria->compare('namabarang', $this->namabarang, true);
		$criteria->compare('deskripsi', $this->deskripsi, true);
		$criteria->compare('stock', $this->stock);
		$criteria->compare('gambar', $this->gambar, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stock the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
