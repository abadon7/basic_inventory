<?php
/* @var $this InstiController */
/* @var $model Insti */

$this->breadcrumbs=array(
	'Instis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Insti', 'url'=>array('index')),
	array('label'=>'Create Insti', 'url'=>array('create')),
	array('label'=>'Update Insti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Insti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Insti', 'url'=>array('admin')),
);
?>

<h1>View Insti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'contacto',
	),
)); ?>
