<?php
    $this->title = 'News: Edit';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form-submit',
    'enableClientValidation'=>false,
    'enableAjaxValidation'=>true,
    'htmlOptions'=>array('class'=> 'mainForm','enctype' => 'multipart/form-data'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'successCssClass'=>false,
        'validateOnChange'=>true,
    ),
)); ?>
    <div class="widget tabsRight">
        <div class="head"><h5 class="iFrames">Content</h5></div>
        <ul class="tabs">
            <li><a href="#tab1">English</a></li>
            <li><a href="#tab2">Thai</a></li>
            <li><a href="#tab3">Indonesian</a></li>
        </ul>
        
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="rowElem noborder">
                    <?php echo $form->label($modelNews,'title_en'); ?>
                    <div class="formRight">
                        <?php echo $form->textField($modelNews,'title_en'); ?>
                        <?php echo $form->error($modelNews,'title_en'); ?>
                        <?php echo $form->error($modelNews,'title_th'); ?>
                        <?php echo $form->error($modelNews,'title_in'); ?>
                    </div>
                </div>
                <div class="rowElem ">
                    <?php echo $form->label($modelNews,'content_en'); ?>
                    <div class="formRight">
                        <?php $this->widget('ext.ckeditor.CKEditorWidget', array(
						        'model' => $modelNews,
						        'attribute' => 'content_en',
						 		'editorOptions' => array(
						 			'uiColor'=>'#FAFAFA',
						 			'resize_dir'=>'vertical',
								 	'toolbar' => 'Image',
								 ),
							));
						?>
                        <?php echo $form->error($modelNews,'content_en'); ?>
                    </div>
                </div>
                <div class="fix"></div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="rowElem noborder">
                    <?php echo $form->label($modelNews,'title_th'); ?>
                    <div class="formRight">
                        <?php echo $form->textField($modelNews,'title_th'); ?>
                        <?php echo $form->error($modelNews,'title_en'); ?>
                        <?php echo $form->error($modelNews,'title_th'); ?>
                        <?php echo $form->error($modelNews,'title_in'); ?>
                    </div>
                </div>
                <div class="rowElem">
                    <?php echo $form->label($modelNews,'content_th'); ?>
                    <div class="formRight">
                        <?php $this->widget('ext.ckeditor.CKEditorWidget', array(
						        'model' => $modelNews,
						        'attribute' => 'content_th',
						 		'editorOptions' => array(
						 			'uiColor'=>'#FAFAFA',
						 			'resize_dir'=>'vertical',
								 	'toolbar' => 'Image',
								 ),
							));
						?>
                        <?php echo $form->error($modelNews,'content_th'); ?>
                    </div>
                </div>
                <div class="fix"></div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="rowElem noborder">
                    <?php echo $form->label($modelNews,'title_in'); ?>
                    <div class="formRight">
                        <?php echo $form->textField($modelNews,'title_in'); ?>
                        <?php echo $form->error($modelNews,'title_en'); ?>
                        <?php echo $form->error($modelNews,'title_th'); ?>
                        <?php echo $form->error($modelNews,'title_in'); ?>
                    </div>
                </div>
                <div class="rowElem">
                    <?php echo $form->label($modelNews,'content_in'); ?>
                    <div class="formRight">
                        <?php $this->widget('ext.ckeditor.CKEditorWidget', array(
						        'model' => $modelNews,
						        'attribute' => 'content_in',
						 		'editorOptions' => array(
						 			'uiColor'=>'#FAFAFA',
						 			'resize_dir'=>'vertical',
								 	'toolbar' => 'Image',
								 ),
							));
						?>
                        <?php echo $form->error($modelNews,'content_in'); ?>
                    </div>
                </div>
                <div class="fix"></div>
            </div>
        </div>
        <div class="fix"></div>     
    </div>

    <fieldset>
        <div class="widget aligncenter">    
            <div class="head"><h5 class="iList">Options</h5></div>
            <div class="body" style="text-align: left;">
                <div class="rowElem noborder">
                    <?php echo $form->label($modelNews,'create_datetime'); ?>
                    <div class="formRight">
                        <?php echo $form->textField($modelNews, 'create_datetime',array('readonly'=>'readonly')); ?>
                        <?php echo $form->error($modelNews,'create_datetime'); ?>
                    </div><div class="fix"></div>
                </div>
                <div class="rowElem">
                    <?php echo $form->label($modelNews,'cover_image'); ?>
                    <div class="formRight">
                    	<?php if(!empty($modelNews->cover_image)): ?>
                    		<div style="margin-bottom: 10px;">
								<img src="<?php echo CUpload::getNewsCoverImageUrl($modelNews->cover_image) ?>" alt="" />
								<div style="margin-top: 10px;">
									<input class="basicBtn bConfirm" type="button" value="Remove" data-title="Confirm Delete" data-body="Please confirm to delete" data-url="<?php echo url('news/removecover',array('id'=>$modelNews->newsid)) ?>" />
								</div>
							</div>
						<?php endif; ?>
                    	<div>
	                        <?php echo $form->fileField($modelNews, 'cover_file'); ?>
	                        <?php echo $form->error($modelNews,'cover_file'); ?>
                        </div>
                    </div><div class="fix"></div>
                </div>
                <div class="submitForm">
                    <input type="submit" value="Save" class="redBtn" />
                    <input type="button" value="back" class="redBtn link" data-url="<?php echo url('news/index');?>" />
                </div>
                <div class="fix"></div>
            </div>
        </div>
    </fieldset>
<?php $this->endWidget(); ?>
