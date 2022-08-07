<?php
/* @var $this BarangmasukController */
/* @var $model Barangmasuk */

$this->breadcrumbs=array(
	'Barangmasuks'=>array('index'),
	$model->idmasuk=>array('view','id'=>$model->idmasuk),
	'Update',
);
?>
<h1>Mengubah Barangmasuk <?php echo $model->idmasuk; ?></h1>

<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); 
$this->renderPartial('_form', array('model'=>$model)); ?>