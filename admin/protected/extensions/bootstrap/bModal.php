<?php
class bModal extends CWidget
{
	public $header='header';
	public $message='message';
	
	public $btnLabel;
	public $btnClass;
	public $btnIconClass;
	public $btnTooltip;

	/*
	return true for open modal
	*/
	public $btnOnClick;
	
	public $submitLabel='Ok';
	/*
	type 'submit' or 'button' or 'link',
	*/
	public $submitType='submit';
	public $submitIconClass;
	public $submitColorClass='btn-primary';
	public $submitUrl;
	public $submitOnClick;
	
	public $closeLabel='Close';
	public $closeIconClass;
	public $closeColorClass;
	
	public $options;
	
    public function run()
    {
    	$this->id = $this->getId();
   		if(isset($this->btnIconClass))
    		$this->btnIconClass = '<i class="'.$this->btnIconClass.'"></i> ';
    	if(isset($this->submitIconClass))
    		$this->submitIconClass = '<i class="'.$this->submitIconClass.'"></i> ';
    	if(isset($this->closeIconClass))
    		$this->closeIconClass = '<i class="'.$this->closeIconClass.'"></i> ';
    	if(isset($this->submitOnClick)){
    		$_onSubmit = CJavaScript::encode($this->submitOnClick);
    		cs()->registerScript('myModelsubmitclick#'.$this->id,"jQuery(\"#{$this->id}-submit\").on('click',function(){{$_onSubmit}});");
   		}
   		if(isset($this->submitUrl))
   			$this->submitUrl = 'href="'.$this->submitUrl.'"';
   		if(isset($this->btnOnClick)){
   			$_btnOnClick = CJavaScript::encode($this->btnOnClick);
   			cs()->registerScript('myModelbtnclick#'.$this->id,"function {$this->id}fn(){{$_btnOnClick} return true;};");
	 		  cs()->registerScript('myModelrun#'.$this->id,"jQuery(\"#{$this->id}-btn\").on('click',function(){if({$this->id}fn()){jQuery(\"#{$this->id}\").modal({$this->options});}});");
   		}else{
   			cs()->registerScript('myModelrun#'.$this->id,"jQuery(\"#{$this->id}-btn\").on('click',function(){jQuery(\"#{$this->id}\").modal({$this->options});});");
   		}
    	echo '<a id="'.$this->id .'-btn" class="'.$this->btnClass.'" data-original-title="$this->btnTooltip">'.$this->btnIconClass.$this->btnLabel.'</a>';
		echo '<div class="modal" id="'.$this->id.'" style="display: none;">
				<div class="modal-header" style="text-align:left;">
					<a class="close" data-dismiss="modal">×</a>
					<h3>'.$this->header.'</h3>
				</div>
				<div class="modal-body" style="text-align:left;">'.$this->message.'</div>
				<div class="modal-footer">
					<button id="'.$this->id.'-submit" type="'.$this->submitType.'" class="btn '.$this->submitColorClass.'">'.$this->submitIconClass.$this->submitLabel.'</button>
					<a href="#" class="btn" data-dismiss="modal">'.$this->closeIconClass.$this->closeLabel.'</a>
				</div>
			</div>';
    }
}

