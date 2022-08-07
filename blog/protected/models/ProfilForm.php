<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ProfilForm extends CFormModel
{
	public $userId;
	public $userNama;
	public $userPassword;
	public $userGroup;


	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, userPassword, userNama', 'required'),
			array('userGroup', 'numerical', 'integerOnly' => true),
			array('userId,userNama', 'length', 'max' => 100),
			// array('userNama', 'length', 'max'=>15),
			// array('userNama', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userId, userPassword, userNama, userGroup', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'userId' => 'User ID',
			'userPassword' => 'User Password',
			'userNama' => 'User Nama',
			'userGroup' => 'User Group',
		);
	}
	
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}