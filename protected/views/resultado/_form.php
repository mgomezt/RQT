<?php
/* @var $this ResultadoController */
/* @var $model Resultado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resultado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idsorteo'); ?>
		<?php echo $form->textField($model,'idsorteo'); ?>
		<?php echo $form->error($model,'idsorteo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posicion'); ?>
		<?php echo $form->textField($model,'posicion'); ?>
		<?php echo $form->error($model,'posicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado'); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->