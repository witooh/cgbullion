<?php
class bModalGroup extends CWidget
{
	public $modalClass;
	public $header='header';
	public $message='message';
	
	public $submitLabel='Ok';
	/*
	type 'submit' or 'button' or 'link',
	*/
	public $submitIconClass;
	public $submitColorClass='btn-primary';
	
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
   		cs()->registerScript('myModelsubmitclick#'.$this->id,"jQuery(\"#{$this->id}-submit\").on('click',function(){window.location = groupModelUrl;});");
   		cs()->registerScript('myModelrun#'.$this->id,"var groupModelUrl;jQuery(\".{$this->modalClass}\").on('click',function(){groupModelUrl=jQuery(this).attr('data-url');jQuery(\"#{$this->id}\").modal({$this->options}); return false;});");
   		if(isset($this->submitUrl))
   			$this->submitUrl = 'href="'.$this->submitUrl.'"';
		echo '<div class="modal" id="'.$this->id.'" style="display: none;">
				<div class="modal-header" style="text-align:left;">
					<a class="close" data-dismiss="modal">×</a>
					<h3>'.$this->header.'</h3>
				</div>
				<div class="modal-body" style="text-align:left;">'.$this->message.'</div>
				<div class="modal-footer">
					<button id="'.$this->id.'-submit" type="button" class="btn '.$this->submitColorClass.'">'.$this->submitIconClass.$this->submitLabel.'</button>
					<a href="#" class="btn" data-dismiss="modal">'.$this->closeIconClass.$this->closeLabel.'</a>
				</div>
			</div>';
    }
}

