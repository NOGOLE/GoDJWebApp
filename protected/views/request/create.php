<?php
/* @var $this RequestController */
/* @var $model Request */

$this->breadcrumbs=array(
	'Requests'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
 * */
 
?>

<h1>Request a song!</h1>
<h2>Simply fill out the form below <br />and the DJ will instantly receive your request!</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>