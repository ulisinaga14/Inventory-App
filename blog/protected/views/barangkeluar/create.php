<?php
/* @var $this BarangkeluarController */
/* @var $model Barangkeluar */

$this->breadcrumbs=array(
	'Barangkeluars'=>array('index'),
	'Create',
);
?>
<h1>Tambah Barangkeluar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>