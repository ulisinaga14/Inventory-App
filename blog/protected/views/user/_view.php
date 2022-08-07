<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userId), array('view', 'id'=>$data->userId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userPassword')); ?>:</b>
	<?php echo CHtml::encode($data->userPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userNama')); ?>:</b>
	<?php echo CHtml::encode($data->userNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userGroup')); ?>:</b>
	<?php echo CHtml::encode($data->userGroup); ?>
	<br />

</div>