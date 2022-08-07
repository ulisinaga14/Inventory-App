<?php
/* @var $this BarangkeluarController */
/* @var $model Barangkeluar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barangkeluar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php 
		// retrieve the models from db
		$models = Stock::model()->findAll(
						 array('order' => 'namabarang'));

		// format models as $key=>$value with listData
		$list = CHtml::listData($models, 
                'idbarang', 'namabarang');
		echo $form->dropDownList($model,'idbarang',
		$list,
		array(
			'empty'=>'--Pilih Nama Stock Barang--',
			'class'=>"custom-select")
			);
		?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'idbarang'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo CHtml::activeDateField($model,'tanggal',array('class'=>"form-control")); ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'tanggal'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo 		$form->textField($model,'jumlah',array('class'=>"form-control"))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'jumlah'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'penerima'); ?>
		<?php echo 		$form->textField($model,'penerima',array('class'=>"form-control", 'size'=>25,'maxlength'=>25))			; ?>
		<small  class="form-text text-muted">
			<?php echo $form->error($model,'penerima'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->