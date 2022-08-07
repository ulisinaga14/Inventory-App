<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	'Create',
);
?>
<h1>Tambah Stock</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>