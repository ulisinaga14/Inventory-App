<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// if (!isset($_GET['coba'])) {

		$this->render('index');
	}

	public function actionAbout()
	{
		if (isset($_GET['coba'])) {

			$this->render('about');
		}
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate()) {
				$name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" .
					"Reply-To: {$model->email}\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
				Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));
	}
	
	public function actionProfil()
	{
		$model = new User;


		// if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-register-form') {
		// 	echo CActiveForm::validate($model);
		// 	Yii::app()->end();
		// }

		if (isset($_POST['User'])) {
			$model->attributes = $_POST['User'];
			if ($model->validate()) {
				// form inputs are valid, do something here

				$model->userId = $_POST['User']['userId'];
				$model->userPassword = md5($_POST['User']['userPassword']);
				$model->userNama = $_POST['User']['userNama'];
				$model->userGroup = $_POST['User']['userGroup'];

				
			}
		}
		return $this->render('profil', array('model' => $model));
	}

	public function actionRegister()
	{
		$model = new User;


		// if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-register-form') {
		// 	echo CActiveForm::validate($model);
		// 	Yii::app()->end();
		// }


		if (isset($_POST['User'])) {
			$model->attributes = $_POST['User'];
			if ($model->validate()) {
				// form inputs are valid, do something here

				$model->userId = $_POST['User']['userId'];
				$model->userPassword = md5($_POST['User']['userPassword']);
				$model->userNama = $_POST['User']['userNama'];

				if (isset($_POST['userGroup']) == 'Admin') {
					$model->userGroup = 1;
				}
				if (isset($_POST['userGroup']) == 'Member') {
					$model->userGroup = 2;
				}

				if ($model->save()) {
					return $this->redirect(['login']);
				}
			}
		}
		return $this->render('register', array('model' => $model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;

		// if it is ajax validation request
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if (isset($_POST['LoginForm'])) {
			$model->attributes = $_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if ($model->validate() && $model->login())
			{
				$this->redirect(Yii::app()->user->returnUrl);
			}else {
            Yii::app()->user->setFlash('failure', "incorrect username or password");
			}
            return $this->refresh();
		}
		// display the login form
		$mygoogle = $this->getGoogle();
		$this->render(
			'login',
			array(
				'model' => $model,
				'google' => $mygoogle,
			)
		);
	}
	public function actionValidasi()
	{
		$mygoogle = $this->getGoogle();
		if ($mygoogle['islogin']) {
			//cek apakah sudah login
			$email = $mygoogle['info']->email;
			$name = $mygoogle['info']->name;
			$id = $mygoogle['info']->id;

			$users = User::model()->findByPk($email);
			if ($users == null) {
				//data baru...
				$users = new User();
				$users->userId = $email;
				$users->userPassword = md5($id);
				$users->userNama = $name;
				$users->userGroup = 2;
				$users->save();
			}

			$identity = new UserIdentity($email, $id);
			$identity->authenticate();

			$duration = 3600 * 24 * 30; // 30 days
			Yii::app()->user->login($identity, $duration);
			$this->redirect(array('index'));
		} else {
			$this->redirect(array('login'));
		}
	}

	public function getGoogle()
	{
		require_once 'protected/extensions/google/vendor/autoload.php';

		// init configuration
		$clientID = '250249107387-1ad7tmku3dauh2gqph351s6cucpsm6td.apps.googleusercontent.com';
		$clientSecret = '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';
		$redirectUri = 'http://localhost/sem6/TugasPKL/blog/index.php?r=site/validasi';

		// create Client Request to access Google API
		$client = new Google_Client();
		$client->setClientId($clientID);
		$client->setClientSecret($clientSecret);
		$client->setRedirectUri($redirectUri);
		$client->addScope("email");
		$client->addScope("profile");

		$google_account_info = null;
		$islogin = false;
		// authenticate code from Google OAuth Flow
		if (isset($_GET['code'])) {
			$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
			$client->setAccessToken($token['access_token']);

			// get profile info
			$google_oauth = new Google_Service_Oauth2($client);
			$google_account_info = $google_oauth->userinfo->get();
			$email =  $google_account_info->email;
			$name =  $google_account_info->name;
			$islogin = true;
		}

		return array(
			'islogin' => $islogin,
			'info' => $google_account_info,
			'client' => $client,
		);
		// now you can use this profile info to create account in your website and make user logged in.
		/*
		} else {
		  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
		}*/
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	

}
