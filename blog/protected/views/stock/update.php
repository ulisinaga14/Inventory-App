<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->idbarang=>array('view','id'=>$model->idbarang),
	'Update',
);
?>
<h1>Mengubah Stock <?php echo $model->idbarang; ?></h1>
 <?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); 

$this->renderPartial('_form', array('model'=>$model)); 

