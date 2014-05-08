<h1>Mood Request for DJ <?php echo Yii::app()->user->getName(); ?></h1>



<?php /*echo CHtml::ajaxButton("Insert New Request", array('request/ajaxcreate'), array('success'=>'allFine')); */?>
<!--  CODE TO INSERT NEW PLAYER ENDS -->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'player-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
//        'id',
        
        'mood',
        'name',
		//'artist',
		//'timestamp',
		array
(
    'class'=>'CButtonColumn',
    'template'=>'{delete}',
)
    ),
	
));
?>

<head>
<meta http-equiv="refresh" content="7" >
</head>