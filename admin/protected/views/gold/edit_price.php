<?php
    $this->title = 'Gold Index: Edit Price';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-submit',
    'enableClientValidation'=>false,
    'enableAjaxValidation'=>true,
    'htmlOptions'=>array('class'=> 'mainForm'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'successCssClass'=>false,
        'validateOnChange'=>true,
    ),
)); ?>
    <fieldset>
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iList">Edit Price</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
                    <label>Buy Price (USD):</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelGold,'buy_price'); ?>
                        <?php echo $form->error($modelGold,'buy_price'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem">
                    <label>Sell Price (USD):</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelGold,'sell_price'); ?>
                        <?php echo $form->error($modelGold,'sell_price'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem">
                    <label>Date:</label>
                    <div class="formRight">
                        <?php
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'name'=>'publishDate',
                                'model'=>$modelGold,
                                'attribute'=>'date',
                                'htmlOptions'=>array(
                                    'disabled'=>'disabled',
                                ),
                                'options'=>array(
                                    'dateFormat'=>'yy-mm-dd',
                                ),
                            ));
                        ?>
                        <div class="fix"></div>
                        <?php echo $form->error($modelGold,'date'); ?>
                    </div>
                    <div class="fix"></div>
                </div>
                <div class="submitForm">
                    <input type="submit" value="Save" class="redBtn" />
                    <input type="button" value="back" class="redBtn link" data-url="<?php echo url('gold/index');?>" />
                </div>
                <div class="fix"></div>
            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
