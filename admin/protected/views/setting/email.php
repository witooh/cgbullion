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
            <div class="head"><h5 class="iList">Email Setting</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
                    <label for="tags">Email Contact us:</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelSetting, 'email_contactus',array('class'=>'tags')); ?>
                        <?php echo $form->error($modelSetting,'email_contactus'); ?>
                    </div>
                    <div class="fix"></div>
                </div>
                <div class="rowElem">
                    <label for="tags">Email Trading Account opening:</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelSetting, 'email_trading',array('class'=>'tags')); ?>
                        <?php echo $form->error($modelSetting,'email_trading'); ?>
                    </div>
                    <div class="fix"></div>
                </div>
                <div class="rowElem">
                    <label for="tags">Email Join us:</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelSetting, 'email_joinus',array('class'=>'tags')); ?>
                        <?php echo $form->error($modelSetting,'email_joinus'); ?>
                    </div>
                    <div class="fix"></div>
                </div>
                <div class="submitForm">
                    <input type="submit" value="Save" class="redBtn" />
                </div>
                <div class="fix"></div>
            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    $('#Setting_email_contactus').tagsInput({width:'100%','defaultText':'add email'});
    $('#Setting_email_trading').tagsInput({width:'100%','defaultText':'add email'});
    $('#Setting_email_joinus').tagsInput({width:'100%','defaultText':'add email'});
</script>