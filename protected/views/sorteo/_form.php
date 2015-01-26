<?php
/* @var $this SorteoController */
/* @var $model Sorteo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sorteo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php echo $form->labelEx($model,'fecha'); ?>
                <?php
                    if ($model->fecha!='') {
                        $model->fecha=date('d-m-Y',strtotime($model->fecha));
                    }
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'fecha',
                    'value'=>$model->fecha,
                    'language' => 'es',
                    'htmlOptions' => array('readonly'=>"readonly"),

                    'options'=>array(
                        'autoSize'=>true,
                        'defaultDate'=>$model->fecha,
                        'dateFormat'=>'yy-mm-dd',
                        //'dateFormat'=>'dd-mm-yy',
                        //'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                        'buttonImageOnly'=>true,
                        'buttonText'=>'Fecha',
                        'selectOtherMonths'=>true,
                        'showAnim'=>'slide',
                        'showButtonPanel'=>true,
                        //'showOn'=>'button',
                        'showOtherMonths'=>true,
                        'minDate'=>'-80Y',
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                    ),
                    )); 
                ?>
                <?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idtiposorteo'); ?>
                <?php echo $form->dropDownList($model,'idtiposorteo',
                                  $model->getListarTipoSorteo(), 
                                  array("empty"=>"Seleccione...")); ?>
		<?php echo $form->error($model,'idtiposorteo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->