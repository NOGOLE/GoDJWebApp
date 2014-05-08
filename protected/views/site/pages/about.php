<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<?php 
$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'What is it?'=>'GoDJ is an application that allows DJs to get analytics from party goers such as what songs they want to hear, and what vibe they want to feel.',
        'How does it work?'=>'DJs simply create an account, once set up and logged in, they simply click the My Request tabs and do with the data what they will.'
        . 'Party goers download the app and give their data.',
        // panel 3 contains the content rendered by a partial view
        'What is the purpose?'=>'To give DJs free analytics, therefore leading to a better party experience. Future updates will allow more functionality, such as allowing DJs to upload their mixes straight to the site.',
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
));
?>
