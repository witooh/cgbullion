<?php
    $this->title = 'Setting';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-submit',
    'enableClientValidation'=>false,
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=> 'mainForm','enctype' => 'multipart/form-data'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'successCssClass'=>false,
        'validateOnChange'=>true,
    ),
)); ?>
    <fieldset>
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iList">Change Password</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
                    <?php echo $form->label($modelSetting,'oldPassword'); ?>
                    <div class="formRight">
                        <?php echo $form->passwordField($modelSetting, 'oldPassword'); ?>
                        <?php echo $form->error($modelSetting,'oldPassword'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem noborder">
                    <?php echo $form->label($modelSetting,'newPassword'); ?>
                    <div class="formRight">
                        <?php echo $form->passwordField($modelSetting, 'newPassword'); ?>
                        <?php echo $form->error($modelSetting,'newPassword'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem noborder">
                    <?php echo $form->label($modelSetting,'confirmNewPassword'); ?>
                    <div class="formRight">
                        <?php echo $form->passwordField($modelSetting, 'confirmNewPassword'); ?>
                        <?php echo $form->error($modelSetting,'confirmNewPassword'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="submitForm">
                    <input type="submit" value="Save" class="redBtn" />
                </div>
                <div class="fix"></div>
            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
