<?php
    $this->title = 'Gold Index';
?>

<div style="float: left;">
    <div class="middleNav">
        <ul>
            <li class="iAdd"><a href="<?php echo url('gold/addprice') ?>"><span>New Price</span></a></li>
            <li class="iClose"><a href="#" onclick="$('#form-delete').submit();return false;"><span>Delete</span></a></li>
        </ul>
    </div>
</div>
<div class="fix"></div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-search',
    'enableClientValidation'=>false,
    'htmlOptions'=>array('class'=> 'mainForm'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'successCssClass'=>false,
        'validateOnChange'=>false,
    ),
)); ?>
    <fieldset>
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iList">Search</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
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
                    <input type="submit" value="Search" class="redBtn" />
                </div>
                <div class="fix"></div>

            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-delete',
    'enableClientValidation'=>false,
    'htmlOptions'=>array('class'=> 'mainForm'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'successCssClass'=>false,
        'validateOnChange'=>false,
    ),
)); ?>
<div class="widget first">
    <div class="head"><h5 class="iFrames">Gold Price</h5></div>
    <div class="">
        <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$modelGold->search(),
                'cssFile'=>false,
                'summaryText'=>false,
                'itemsCssClass'=>'tableStatic',
                'rowCssClass'=>false,
                'afterAjaxUpdate'=>'js:function(){$.uniform.update();}',
                'columns'=>array(
                    array(
                        'class'=>'ext.template.CheckBoxColumn',
                        'checkBoxHtmlOptions' => array(
                            'name' => 'cid[]',
                            'class'=> 'checkbox-cid',
                        ),
                        'selectableRows'=>2,
                        'headerHtmlOptions'=>array('style'=>'width:15px;padding-left: 10px;'),
                    ),
                    array(
                        'name'=>'date',
                        'header'=>t('Date'),
                        'type'=>'html',
                        'value'=>"CHtml::link(".'$data->date'.",url('av/av003',array('id'=>".'$data->goldindexid'.")))",
                    ),
                    array(
                        'name'=>'buy_price',
                        'header'=>t('Buy Price'),
                    ),
                    array(
                        'name'=>'sell_price',
                        'header'=>t('Sell Price'),
                    ),
                ),
                'pager'=>array(
                    'class'=>'CLinkPager',
                    'header'=>'',
                    'cssFile'=>false,
                    'htmlOptions'=>array('class'=>'pages'),
                ),
            ));
        ?>
    </div>
</div>
<?php $this->endWidget(); ?>