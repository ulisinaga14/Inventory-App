<?php
/* @var $this BarangkeluarController */
/* @var $data Barangkeluar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkeluar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idkeluar), array('view', 'id'=>$data->idkeluar)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('penerima')); ?>:</b>
	<?php echo CHtml::encode($data->penerima); ?>
	<br />


</div>