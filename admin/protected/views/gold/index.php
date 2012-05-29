<?php
    $this->title = 'Gold Index';
?>

<div>
    <div class="middleNav" style="float: none;">
        <ul>
            <li class="iAdd"><a href="<?php echo url('gold/addprice') ?>"><span>Add Price</span></a></li>
            <li class="iClose"><a href="#" class="submitform" data-form="form-delete" data-confirm="1" data-title="Confirm Delete" data-body="Please confirm to delete" ><span>Delete Price</span></a></li>
        </ul>
    </div>
</div>
<div class="fix"></div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-search',
    'method'=>'get',
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
                                'name'=>'fromDate',
                                'model'=>$modelGold,
                                'attribute'=>'fromDate',
                                'htmlOptions'=>array(
                                    'style'=>'width:200px;',
                                ),
                                'options'=>array(
                                    'dateFormat'=>'yy-mm-dd',
                                ),
                            ));
                        ?>
                        <span> To </span>
                        <?php
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'name'=>'toDate',
                                'model'=>$modelGold,
                                'attribute'=>'toDate',
                                'htmlOptions'=>array(
                                    'style'=>'width:200px;',
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
                    <input type="reset" value="Clear" class="redBtn" />
                </div>
                <div class="fix"></div>

            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-delete',
    'action'=>url('gold/deleteall'),
    'htmlOptions'=>array('class'=> 'mainForm'),
)); ?>
<div class="widget first">
    <div class="head"><h5 class="iFrames">Gold Prices</h5></div>
    <div class="">
        <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$modelGold->search(),
                'cssFile'=>false,
                'summaryText'=>false,
                'itemsCssClass'=>'tableStatic',
                'rowCssClass'=>false,
                'afterAjaxUpdate'=>'js:function(){$("select, input:checkbox, input:radio, input:file").uniform();}',
                'columns'=>array(
                    array(
                        'class'=>'ext.template.CheckBoxColumn',
                        'checkBoxHtmlOptions' => array(
                            'name' => 'cid[]',
                            'class'=> 'checkbox-cid',
                        ),
                        'selectableRows'=>2,
                        'headerHtmlOptions'=>array('style'=>'width:15px;padding:0 10px;'),
                    ),
                    array(
                        'name'=>'date',
                        'header'=>t('Date'),
                        'type'=>'html',
                        'value'=>"CHtml::link(".'$data->date'.",url('gold/edit',array('id'=>".'$data->goldindexid'.")))",
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
<div style="margin-top: 10px;">
	<input type="button" value="Delete Price" class="basicBtn submitform" data-form="form-delete" data-confirm="1" data-title="Confirm Delete" data-body="Please confirm to delete" />
</div>
<?php $this->endWidget(); ?>