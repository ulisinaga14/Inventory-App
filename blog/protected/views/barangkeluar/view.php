<?php
/* @var $this BarangkeluarController */
/* @var $model Barangkeluar */

$this->breadcrumbs=array(
	'Barangkeluars'=>array('index'),
	$model->idkeluar,
);
?>
<h1>Menampilkan Barangkeluar #<?php echo $model->idkeluar; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class =\"{class} list-group-item\">{label} : {value} </li>\n",
	'attributes'=>array(
		'idkeluar',
		'idbarang',
		'tanggal',
		'jumlah',
		'penerima',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>