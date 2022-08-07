<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	  'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'namabarang'); ?>
		<?php echo 		$form->textField($model,'namabarang',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'namabarang'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo 		$form->textField($model,'deskripsi',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'deskripsi'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo 		$form->textField($model,'stock',array('class'=>"form-control"))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'stock'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo 		$form->fileField($model,'gambar',array('class'=>"form-control"))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'gambar'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->