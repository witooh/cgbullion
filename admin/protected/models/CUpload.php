<?php
class CUpload extends MUpload
{
	public function uploadCover($cuploadfile,$type){
		if(isset($cuploadfile))
			$this->setFile($cuploadfile);
		else 
			return false;
		$img = new Upload( (isset($this->file) ? $this->file : null) );
		if ($img->uploaded) {
			$img->image_convert = 'jpg';
		    $img->image_resize = true;
		    //$img->image_ratio_y = true;
		    $img->image_x = 247;
	    	$img->image_y = 151;
			$img->file_new_name_body = md5($img->file_src_name.date('Y:m:d H:s:i:u'));
		    switch($type){
		    	case 'news':
		    		$img->process(CUpload::getNewsCoverImagePath());
					break;
	    		case 'report':
	    			$img->process(CUpload::getReportCoverImagePath());
					break;
		    }
		    if ($img->processed) {
	    		$this->setFileDestination($img);
				return true;
		      $img->clean();
		    } else {
		    	setFlash('error',$img->error);
		    	return false;
		    }
		}
	}
	
	public static function getNewsCoverImagePath($img=''){
		return basepath().'/../files/cover/news/'.$img;
	}
	
	public static function getNewsCoverImageUrl($img=''){
		return baseurl('/../files/cover/news/'.$img);
	}
	
	public static function getReportCoverImagePath($img=''){
		return basepath().'/../files/cover/report/'.$img;
	}
	
	public static function getReportCoverImageUrl($img=''){
		return baseurl('/../files/cover/report/'.$img);
	}
}