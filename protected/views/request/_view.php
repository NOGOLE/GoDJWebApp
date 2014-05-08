<?php
/* @var $this RequestController */
/* @var $data Request */
?>




<div class="view">
<b> </b>

	<b><?php $Criteria = new CDbCriteria(); 
	$Criteria->compare('dj',Yii::app()->user->getName(),true);   
	
	$list=$data->findAll($Criteria);
        //var_dump($list);
        //exit();
          $b = "<b>";
        $_b = "</b>";
        $br ="<br />";
      
	$arr = array();
foreach($list as $t)
{
        $arr[$t->id] = $t->attributes;
      
	echo $b.CHtml::encode($t->getAttributeLabel('title: ')).$_b;
        echo CHtml::encode($t->title).$br;
        echo $b.CHtml::encode($t->getAttributeLabel('artist: ')).$_b;
        echo CHtml::encode($t->artist).$br;
        
	
}
	
	
	
	 ?>

</div>