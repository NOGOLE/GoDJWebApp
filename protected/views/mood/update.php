<?php
/* @var $this MoodController */
/* @var $model Mood */

$this->breadcrumbs=array(
	'Moods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mood', 'url'=>array('index')),
	array('label'=>'Create Mood', 'url'=>array('create')),
	array('label'=>'View Mood', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mood', 'url'=>array('admin')),
);
?>

<h1>Update Mood <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>