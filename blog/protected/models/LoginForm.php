<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $userNama;
	public $userPassword;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that userNama and userPassword are required,
	 * and userPassword needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and userPassword are required
			array('userNama, userPassword', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// userPassword needs to be authenticated
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe' => 'Remember me next time',
		);
	}

	/**
	 * Authenticates the userPassword.
	 * This is the 'authenticate' validator as declared in rules().
	 * @param string $attribute the name of the attribute to be validated.
	 * @param array $params additional parameters passed with rule when being executed.
	 */
	public function authenticate($attribute,$params)
{
	if(!$this->hasErrors())
	{
		$this->_identity=new UserIdentity($this->userNama, $this->userPassword);
		if($this->_identity->authenticate() == 1){
			$this->addError('userNama','Invalid username.');
		$this->addError('userPassword','');}
		else if($this->_identity->authenticate() == 2){
			$this->addError('userPassword','Incorrect password.');
		$this->addError('userPassword','');}
	}
}
	/**
	 * Logs in the user using the given userNama and userPassword in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if ($this->_identity === null) {
			$this->_identity = new UserIdentity($this->userNama, $this->userPassword);
			$this->_identity->authenticate();
		}
		if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
			$duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
			Yii::app()->user->login($this->_identity, $duration);
			return true;
		} else
			return false;
	}
}
