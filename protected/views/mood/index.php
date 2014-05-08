<?php
/* @var $this MoodController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Moods',
);

$this->menu=array(
	array('label'=>'Create Mood', 'url'=>array('create')),
	array('label'=>'Manage Mood', 'url'=>array('admin')),
);
?>

<h1>Moods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
