<div class="loginPanel">
    <div class="head"><h5 class="iUser">Login</h5></div>
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
                <label for="req1"><?php echo t('Username:') ?></label>
                <div class="loginInput">
                    <?php echo $form->textField($modelLogin,'username'); ?>
                    <?php echo $form->error($modelLogin,'username'); ?>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="loginRow">
                <label for="req2"><?php echo t('Password:') ?></label>
                <div class="loginInput">
                    <?php echo $form->passwordField($modelLogin,'password'); ?>
                    <?php echo $form->error($modelLogin,'password'); ?>
                </div>
                <div class="fix"></div>
            </div>
            
            <div class="loginRow" style="padding-bottom: 0;">
                <div class="rememberMe"><input type="checkbox" id="check2" name="Login[rememberMe]" value="1" /><label for="check2">Remember me</label></div>
                <input type="submit" value="Log me in" class="greyishBtn submitForm" style="margin-bottom: 15px;" />
                <div class="fix"></div>
            </div>
        </fieldset>
    <?php $this->endWidget(); ?>
</div>