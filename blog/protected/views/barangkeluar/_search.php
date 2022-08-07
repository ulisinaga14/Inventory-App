<?php
/* @var $this BarangkeluarController */
/* @var $model Barangkeluar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idkeluar'); ?>
		<?php echo 		$form->textField($model,'idkeluar',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'idbarang'); ?>
		<?php echo 		$form->textField($model,'idbarang',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo 		$form->textField($model,'tanggal',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo 		$form->textField($model,'jumlah',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'penerima'); ?>
		<?php echo 		$form->textField($model,'penerima',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->