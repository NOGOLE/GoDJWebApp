<?php
/* @var $this MoodController */
/* @var $data Mood */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dj')); ?>:</b>
	<?php echo CHtml::encode($data->dj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mood')); ?>:</b>
	<?php echo CHtml::encode($data->mood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />


</div>