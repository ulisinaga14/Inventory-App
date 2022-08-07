<?php
/* @var $this BarangmasukController */
/* @var $model Barangmasuk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idmasuk'); ?>
		<?php echo 		$form->textField($model,'idmasuk',array('class'=>"form-control"))			; ?>
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
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo 		$form->textField($model,'keterangan',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->