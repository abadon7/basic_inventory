<?php
/* @var $this InstiController */
/* @var $model Insti */

$this->breadcrumbs=array(
	'Instis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Insti', 'url'=>array('index')),
	array('label'=>'Create Insti', 'url'=>array('create')),
	array('label'=>'View Insti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Insti', 'url'=>array('admin')),
);
?>

<h1>Update Insti <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>