<?php
/* @var $this TiposorteoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiposorteos',
);

$this->menu=array(
	array('label'=>'Create Tiposorteo', 'url'=>array('create')),
	array('label'=>'Manage Tiposorteo', 'url'=>array('admin')),
);
?>

<h1>Tiposorteos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
