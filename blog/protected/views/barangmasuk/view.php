<?php
/* @var $this BarangmasukController */
/* @var $model Barangmasuk */

$this->breadcrumbs=array(
	'Barangmasuks'=>array('index'),
	$model->idmasuk,
);
?>
<h1>Menampilkan Barangmasuk #<?php echo $model->idmasuk; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class =\"{class} list-group-item\">{label} : {value} </li>\n",
	'attributes'=>array(
		'idmasuk',
		'idbarang',
		'tanggal',
		'jumlah',
		'keterangan',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>