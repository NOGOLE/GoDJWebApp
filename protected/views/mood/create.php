<?php
/* @var $this MoodController */
/* @var $model Mood */

$this->breadcrumbs=array(
	'Moods'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Mood', 'url'=>array('index')),
	array('label'=>'Manage Mood', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Request a change in mood!</h1>
<h2>Simply fill out the form below <br/>and the DJ will instantly receive your request!</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>