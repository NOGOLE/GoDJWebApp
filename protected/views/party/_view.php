<?php
/* @var $this PartyController */
/* @var $data Party */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	 <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
        <?php echo CHtml::encode($data->city); ?>
        <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
        <?php echo CHtml::encode($data->state); ?>
        <br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cover_charge')); ?>:</b>
	<?php echo CHtml::encode($data->cover_charge); ?>
	<br />


</div>
