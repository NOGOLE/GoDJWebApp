<?php
/* @var $this PartyController */
/* @var $model Party */

$this->breadcrumbs=array(
	'Parties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Party', 'url'=>array('index')),
	array('label'=>'Manage Party', 'url'=>array('admin')),
);
?>

<h1>Add a Party</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
