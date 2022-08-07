<?php
/* @var $this BarangmasukController */
/* @var $data Barangmasuk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmasuk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmasuk), array('view', 'id'=>$data->idmasuk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbarang')); ?>:</b>
	<?php echo CHtml::encode($data->idbarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>