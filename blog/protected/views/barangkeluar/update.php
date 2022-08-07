<?php
/* @var $this BarangkeluarController */
/* @var $model Barangkeluar */

$this->breadcrumbs=array(
	'Barangkeluars'=>array('index'),
	$model->idkeluar=>array('view','id'=>$model->idkeluar),
	'Update',
);
?>
<h1>Mengubah Barangkeluar <?php echo $model->idkeluar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>