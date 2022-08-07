<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
?>
<h1>Tambah User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>