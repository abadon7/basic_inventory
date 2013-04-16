<?php
/* @var $this TareasController */
/* @var $model Tareas */

$this->breadcrumbs=array(
	'Tareases'=>array('index'),
	$model->tipo=>array('view','id'=>$model->tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tareas', 'url'=>array('index')),
	array('label'=>'Create Tareas', 'url'=>array('create')),
	array('label'=>'View Tareas', 'url'=>array('view', 'id'=>$model->tipo)),
	array('label'=>'Manage Tareas', 'url'=>array('admin')),
);
?>

<h1>Update Tareas <?php echo $model->tipo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>