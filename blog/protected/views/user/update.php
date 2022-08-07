<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userId=>array('view','id'=>$model->userId),
	'Update',
);
?>
<h1>Mengubah User <?php echo $model->userId; ?></h1>
 <?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); 

$this->renderPartial('_form', array('model'=>$model)); 

