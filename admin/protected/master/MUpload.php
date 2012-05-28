<?php
class MUpload extends CFormModel
{
	public $file = array();
	public $file_dst_path = null;
	public $file_dst_name_body = null;
	public $file_dst_name_ext = null;
	public $file_dst_name = null;
	public $file_dst_pathname = null;
	
	public $basepath = null;
	public $urlpath = null;
	
	protected function afterConstruct()
	{
		parent::afterConstruct();
		Yii::import('application.extensions.upload.Upload');
	}
	
	protected function setFile($cuploadfile){
		$this->file = array(
			'name'=>$cuploadfile->getName(),
			'type'=>$cuploadfile->getType(),
			'tmp_name'=>$cuploadfile->getTempName(),
			'error'=>$cuploadfile->getError(),
			'size'=>$cuploadfile->getSize(),
		);
	}
	
	protected function setFileDestination($img){
		$this->file_dst_path = $img->file_dst_path;
		$this->file_dst_name = $img->file_dst_name;
		$this->file_dst_name_body = $img->file_dst_name_body;
		$this->file_dst_name_ext = $img->file_dst_name_ext;
		$this->file_dst_pathname = $img->file_dst_pathname;
	}
}