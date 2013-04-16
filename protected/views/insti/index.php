<?php
/* @var $this InstiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Instis',
);

$this->menu=array(
	array('label'=>'Create Insti', 'url'=>array('create')),
	array('label'=>'Manage Insti', 'url'=>array('admin')),
);
?>

<h1>Instis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
