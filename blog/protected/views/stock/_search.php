<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idbarang'); ?>
		<?php echo 		$form->textField($model,'idbarang',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'namabarang'); ?>
		<?php echo 		$form->textField($model,'namabarang',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo 		$form->textField($model,'deskripsi',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo 		$form->textField($model,'stock',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo 		$form->textField($model,'gambar',array('class'=>"form-control", 'size'=>60,'maxlength'=>250))			; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->