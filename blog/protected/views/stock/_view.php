<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbarang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbarang), array('view', 'id'=>$data->idbarang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namabarang')); ?>:</b>
	<?php echo CHtml::encode($data->namabarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />


</div>