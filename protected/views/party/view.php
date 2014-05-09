<?php
/* @var $this PartyController */
/* @var $model Party */

$this->breadcrumbs=array(
	'Parties'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Party', 'url'=>array('index')),
	array('label'=>'Create Party', 'url'=>array('create')),
	array('label'=>'Update Party', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Party', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Party', 'url'=>array('admin')),
);
?>

<h1>View Party <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'address',
		'city',
		'state',
		'description',
		'cover_charge',
	),
)); ?>
