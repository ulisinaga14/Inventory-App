<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userId,
);
?>
<h1>Menampilkan User #<?php echo $model->userId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class =\"{class} list-group-item\">{label} : {value} </li>\n",
	'attributes'=>array(
		'userId',
		'userPassword',
		'userNama',
		'userGroup',
	),
)); ?>

<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>
	