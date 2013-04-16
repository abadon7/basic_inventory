<?php
/* @var $this InstiController */
/* @var $model Insti */

$this->breadcrumbs=array(
	'Instis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Insti', 'url'=>array('index')),
	array('label'=>'Manage Insti', 'url'=>array('admin')),
);
?>

<h1>Create Insti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>