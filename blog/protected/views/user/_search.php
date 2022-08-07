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
		<?php echo $form->label($model,'userId'); ?>
		<?php echo 		$form->textField($model,'userId',array('class'=>"form-control"))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userPassword'); ?>
		<?php echo 		$form->textField($model,'userPassword',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userNama'); ?>
		<?php echo 		$form->textField($model,'userNama',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'userGroup'); ?>
		<?php echo 		$form->textField($model,'userGroup',array('class'=>"form-control"))			; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->