<?php
/* @var $this TiposorteoController */
/* @var $model Tiposorteo */

$this->breadcrumbs=array(
	'Tiposorteos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tiposorteo', 'url'=>array('index')),
	array('label'=>'Manage Tiposorteo', 'url'=>array('admin')),
);
?>

<h1>Create Tiposorteo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>