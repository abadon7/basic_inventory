<?php
/* @var $this TareasController */
/* @var $data Tareas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipo), array('view', 'id'=>$data->tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tecnico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tecnico0->username), array('user/view', 'id'=>$data->tecnico0->id)); ?>
	<br />


</div>
