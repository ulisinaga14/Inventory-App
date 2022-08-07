<?php

class BarangmasukController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view', 'create'),
				'users' => array('*'),
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('view', 'create'),
				'expression' => 'User::model()->findByPk(Yii::app()->user->id)->userGroup==2',
			),
			array(
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('view', 'create'),
				'expression' => 'User::model()->findByPk(Yii::app()->user->id)->userGroup==1',
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Barangmasuk;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$barangMasukModel = new Barangmasuk;
		if (isset($_POST['Barangmasuk'])) {
			$idBarang = $_POST['Barangmasuk']['idbarang'];

			$barangMasukModel->attributes = $_POST['Barangmasuk'];
			$inputJumlah = $_POST['Barangmasuk']['jumlah'];

			$stockBarang = Stock::model()->findByPk($idBarang);
			$stockBarang->stock = intval($stockBarang->stock) + intval($inputJumlah);

			if ($barangMasukModel->save() && $stockBarang->save(false))
				$this->redirect(array('view', 'id' => $barangMasukModel->idmasuk));
		}

		$this->render('create', array(
			'model' => $barangMasukModel,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$barangMasukModel = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Barangmasuk']))
		{
			$idBarang = $_POST['Barangmasuk']['idbarang'];
			//panggil id b
			$barangMasukModel->attributes = $_POST['Barangmasuk'];
			$inputJumlah = $_POST['Barangmasuk']['jumlah'];
			$barangMasukModel->save();
			
			$barangMasukSum = BarangMasuk::model()->findBySql("SELECT jumlah FROM barangmasuk WHERE idbarang=2");
			
			$stockModel = Stock::model()->findByPk($idBarang);
			$stockModel->stock = $barangMasukSum->jumlah;
			$stockModel->save();
		}

		$this->render('update',array(
			'model'=>$barangMasukModel,
		)); 
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model = new Barangmasuk('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Barangmasuk']))
			$model->attributes = $_GET['Barangmasuk'];

		$this->render('admin', array(
			'model' => $model,
		));

		/*
		$dataProvider=new CActiveDataProvider('Barangmasuk');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Barangmasuk('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Barangmasuk']))
			$model->attributes = $_GET['Barangmasuk'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Barangmasuk the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = Barangmasuk::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Barangmasuk $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'barangmasuk-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
