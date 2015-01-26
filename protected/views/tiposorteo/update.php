<?php
/* @var $this TiposorteoController */
/* @var $model Tiposorteo */

$this->breadcrumbs=array(
	'Tiposorteos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tiposorteo', 'url'=>array('index')),
	array('label'=>'Create Tiposorteo', 'url'=>array('create')),
	array('label'=>'View Tiposorteo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tiposorteo', 'url'=>array('admin')),
);
?>

<h1>Update Tiposorteo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>