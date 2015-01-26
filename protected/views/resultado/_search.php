<?php
/* @var $this ResultadoController */
/* @var $model Resultado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idsorteo'); ?>
		<?php echo $form->textField($model,'idsorteo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posicion'); ?>
		<?php echo $form->textField($model,'posicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->