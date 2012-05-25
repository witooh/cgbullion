<div class="loginPanel">
    <div class="head"><h5 class="iLocked2">Forget Password</h5></div>
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'form-submit',
        'enableClientValidation'=>false,
        'htmlOptions'=>array('class'=> 'mainForm'),
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'successCssClass'=>false,
            'validateOnChange'=>true,
            'inputContainer' => '.control-group',
        ),
    )); ?>
        <fieldset>
            <div class="loginRow noborder">
                <label for="req1"><?php echo t('Email:') ?></label>
                <div class="loginInput">
                    <?php echo $form->textField($modelLogin,'email'); ?>
                    <?php echo $form->error($modelLogin,'email'); ?>
                </div>
                <div class="fix"></div>
            </div>
            <div class="loginRow" style="padding-bottom: 0;">
                <input type="button" value="<?php echo t('Back') ?>" class="basicBtn submitForm" style="margin-bottom: 15px;" onclick="window.location = '<?php echo url('login') ?>';" />
                <input type="submit" value="Submit" class="greyishBtn submitForm" style="margin-bottom: 15px; margin-right: 0px;" />
                <div class="fix"></div>
            </div>
        </fieldset>
    <?php $this->endWidget(); ?>
</div>