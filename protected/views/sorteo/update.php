<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sorteo', 'url'=>array('index')),
	array('label'=>'Create Sorteo', 'url'=>array('create')),
	array('label'=>'View Sorteo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sorteo', 'url'=>array('admin')),
);
?>

<h1>Update Sorteo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>