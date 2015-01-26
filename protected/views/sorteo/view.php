<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sorteo', 'url'=>array('index')),
	array('label'=>'Create Sorteo', 'url'=>array('create')),
	array('label'=>'Update Sorteo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sorteo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sorteo', 'url'=>array('admin')),
);
?>

<h1>View Sorteo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'idtiposorteo',
	),
)); ?>
