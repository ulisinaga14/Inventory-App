<?php
/* @var $this BarangmasukController */
/* @var $model Barangmasuk */

$this->breadcrumbs=array(
	'Barangmasuks'=>array('index'),
	'Create',
);
?>
<h1>Tambah Barangmasuk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>