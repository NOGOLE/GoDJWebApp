<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);


?>

<h1>Congrats! You've Succesfully registered!</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'user_id',
		'first',
		'last',
		'username',
		'country',
		'city',
		'state',
		'bio',
		'email',
		'password',
		//'hashed_password',
	),
)); ?>
