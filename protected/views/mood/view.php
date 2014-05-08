<?php
/* @var $this MoodController */
/* @var $model Mood */

$this->breadcrumbs=array(
	'Moods'=>array('index'),
	$model->id,
);
/*
$this->menu=array(
	array('label'=>'List Mood', 'url'=>array('index')),
	array('label'=>'Create Mood', 'url'=>array('create')),
	array('label'=>'Update Mood', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mood', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mood', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>You have successfully requested a change in Mood! DJ <?php echo $model->dj; ?> has received your request!</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'dj',
		'mood',
		'timestamp',
	),
)); ?>
