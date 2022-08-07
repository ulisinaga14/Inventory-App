<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->idbarang,
);
?>
<h1>Menampilkan Stock #<?php echo $model->idbarang; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class =\"{class} list-group-item\">{label} : {value} </li>\n",
	'attributes'=>array(
		'idbarang',
		'namabarang',
		'deskripsi',
		'stock',
		'gambar',
	),
)); ?>

<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>
	</div>
	<div class="col-6">
		
		<?php $this->widget('ext.qrcode.QRCodeGenerator',array(
	'data' => 'http://localhost' . Yii::app()->getBaseUrl() . "/?r=stock/view&id=" . $_GET['id'],     
	'subfolderVar' => false,
	'filePath' => Yii::app()->getBasePath() . '/../uploads/stock' ,
	'fileUrl' => Yii::app()->baseUrl.'/uploads/stock',
    'filename' => $_GET['id'].'.png',
	'matrixPointSize' => 5,
    'displayImage'=>true, // default to true, if set to false display a URL path
    'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
    'matrixPointSize'=>3, // 1 to 10 only
)) ?> 

<img src="<?php echo Yii::app()->baseUrl.'/images/'.$model->gambar ?>">
	</div>


