<?php
    $this->title = 'Report';
?>

<div>
    <div class="middleNav" style="float: none;">
        <ul>
            <li class="iAdd"><a href="<?php echo url('report/add') ?>"><span>Add Report</span></a></li>
            <li class="iClose"><a href="#" class="submitform" data-form="form-delete" data-confirm="1" data-title="Confirm Delete" data-body="Please confirm to delete" ><span>Delete Report</span></a></li>
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
                    <?php echo $form->label($modelReport,'title_en'); ?>
                    <div class="formRight">
                        <?php echo $form->textField($modelReport,'title_en'); ?>
                        <?php echo $form->error($modelReport,'title_en'); ?>
                        <?php echo $form->error($modelReport,'title_th'); ?>
                        <?php echo $form->error($modelReport,'title_in'); ?>
                    </div>
                </div>
                <div class="submitForm">
                    <input type="submit" value="Search" class="redBtn" />
                    <input type="button" value="Clear" class="redBtn link" data-url="<?php echo url('report/index') ?>" />
                </div>
                <div class="fix"></div>

            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-delete',
    'action'=>url('report/deleteall'),
    'htmlOptions'=>array('class'=> 'mainForm'),
)); ?>
<div class="widget first">
    <div class="head"><h5 class="iFrames">Report</h5></div>
    <div class="">
        <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$modelReport->search(),
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
                        'name'=>'title',
                        'header'=>t('Title (English)'),
                        'type'=>'html',
                        'value'=>"CHtml::link(".'$data->title_en'.",url('report/edit',array('id'=>".'$data->reportid'.")))",
                    ),
                    array(
                        'name'=>'create_datetime',
                        'header'=>t('Created Date'),
                        'headerHtmlOptions'=>array('style'=>'width:150px;'),
                        'htmlOptions'=>array('style'=>'text-align:center;'),
                    ),
                    array(
                        'name'=>'modified_datetime',
                        'header'=>t('Modified Date'),
                        'headerHtmlOptions'=>array('style'=>'width:150px;'),
                        'htmlOptions'=>array('style'=>'text-align:center;'),
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