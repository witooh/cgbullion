<?php
    $this->title = 'Gold Index: Add Price';
    $this->pageMenu = array(
        array(
            'label'=>'Back',
            'url'=>array('gold/index'),
            'icon'=>'iBack',
        ),
    );
?>

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
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iList">New Price</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
                    <label>Buy Price:</label>
                    <div class="formRight">
                        <?php echo $form->textField($modelGold,'buy_price'); ?>
                        <?php echo $form->error($modelGold,'buy_price'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem">
                    <label>Sell Price:</label>
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
                                    'readonly'=>'readonly',
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
                    <input type="submit" value="New Price" class="redBtn" />
                </div>
                <div class="fix"></div>
            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
