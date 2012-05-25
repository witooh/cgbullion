<?php

/**
 * This is the shortcut to DIRECTORY_SEPARATOR
 */
defined('DS') or define('DS',DIRECTORY_SEPARATOR);

/**
 * This is the shortcut to Yii::app()
 */
function app()
{
    return Yii::app();
}

function db()
{
    return Yii::app()->db;
}

/**
 * This is the shortcut to Yii::app()->clientScript
 */
function cs()
{
    // You could also call the client script instance via Yii::app()->clientScript
    // But this is faster
    return Yii::app()->getClientScript();
}

function cache(){
	return Yii::app()->cache;
}

function addJquery(){
    Yii::app()->clientScript->registerCoreScript('jquery');
}

function addJqueryUi(){
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
}

/**
 * This is the shortcut to Yii::app()->user.
 */
function user()
{
    return Yii::app()->getUser();
}

function userId(){
	return Yii::app()->getUser()->getId();
}

function userName(){
	return Yii::app()->getUser()->getName();
}

function checkAccess($access){
	return Yii::app()->user->checkAccess($access);
}

function urlImg($route,$params=array(),$ampersand='&'){
    return Yii::app()->parallelize->getParallelizedHost().Yii::app()->createUrl($route,$params,$ampersand);
}

function urlP($route,$params=array(),$ampersand='&'){
    return Yii::app()->parallelize->getParallelizedHost().Yii::app()->createUrl($route,$params,$ampersand);
}

function addJs($path,$pos = CClientScript::POS_HEAD){
    Yii::app()->clientScript->registerScriptFile($path,$pos);
}

function addCss($path){
    Yii::app()->clientScript->registerCssFile($path); 
}

function noJquery(){
    Yii::app()->clientscript->scriptMap['jquery.min.js'] = false;
    Yii::app()->clientscript->scriptMap['jquery.js'] = false;
}

/**
 * This is the shortcut to Yii::app()->createUrl()
 */
function url($route,$params=array(),$ampersand='&')
{
    return Yii::app()->createUrl($route,$params,$ampersand);
}

/**
 * This is the shortcut to CHtml::encode
 */
function h($text)
{
    return htmlspecialchars($text,ENT_QUOTES,Yii::app()->charset);
}

/**
 * This is the shortcut to CHtml::link()
 */
function l($text, $url = '#', $htmlOptions = array())
{
    return CHtml::link($text, $url, $htmlOptions);
}

/**
 * This is the shortcut to Yii::t() with default category = 'stay'
 */
/*
function t($message, $category = 'stay', $params = array(), $source = null, $language = null)
{
    return Yii::t($category, $message, $params, $source, $language);
}
*/

function t($message, $category = 'vaa',$language = null, $params = array(), $source = null)
{
    return Yii::t($category, $message, $params, $source, $language);
}

/**
 * This is the shortcut to Yii::app()->request->baseUrl
 * If the parameter is given, it will be returned and prefixed with the app baseUrl.
 */
function baseurl($url=null)
{
    static $baseUrl;
    if ($baseUrl===null)
        $baseUrl=Yii::app()->getRequest()->getBaseUrl();
    return $url===null ? $baseUrl : $baseUrl.'/'.ltrim($url,'/');
}

function basepath($path=null){
    static $basepath;
    if ($basepath===null)
        $basepath = Yii::app()->getBasePath() . '/../';
    return $path==null ? $basepath : $basepath.'/'.$path;
}

/**
 * Returns the named application parameter.
 * This is the shortcut to Yii::app()->params[$name].
 */
function param($name)
{
    return Yii::app()->params[$name];
}

function setFlash($key,$text){
    Yii::app()->user->setFlash($key,$text);
}

function getFlash($key){
    return Yii::app()->user->getFlash($key);
}

function encode($text){
	return CHtml::encode($text);
}

function decode($text){
	return CHtml::decode($text);
}

function yiiDate($timestamp,$dateWidth='medium', $timeWidth='medium',$budha=true){
    //'full', 'long', 'medium' or 'short'
    $newDate = Yii::app()->dateFormatter->formatDateTime($timestamp,$dateWidth,$timeWidth);
    if($budha){
        $chris = substr($timestamp,0,4);
        $adyear = substr($timestamp,0,4)+543;
        $newDate = str_replace($chris,$adyear,$newDate);
    }
    return $newDate;
}

function delete_folder($tmp_path){ 
    if(!is_writeable($tmp_path) && is_dir($tmp_path)){chmod($tmp_path,0777);} 
    $handle = opendir($tmp_path); 
    while($tmp=readdir($handle)){ 
    if($tmp!='..' && $tmp!='.' && $tmp!=''){ 
         if(is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp)){ 
                 unlink($tmp_path.DS.$tmp); 
         }elseif(!is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp)){ 
             chmod($tmp_path.DS.$tmp,0666); 
             unlink($tmp_path.DS.$tmp); 
         } 
         
         if(is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp)){ 
                delete_folder($tmp_path.DS.$tmp); 
         }elseif(!is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp)){ 
                chmod($tmp_path.DS.$tmp,0777); 
                delete_folder($tmp_path.DS.$tmp); 
         } 
    } 
    } 
    closedir($handle); 
    rmdir($tmp_path); 
    if(!is_dir($tmp_path)){return true;} 
    else{return false;} 
}

function diffTime($time1,$time2=null,$type='minute',$digit=null){
    $time1 = (int)strtotime($time1);
    if($time2 != null){
        $time2 = (int)strtotime($time2);
    } else {
        $time2 = time();
    }
    switch ($type){
        case 'day': $type = 86400; break;
        case 'hour': $type = 3600; break;
        case 'minute': $type = 60; break;
        case 'second': $type = 1; break;
    }
    $time = ($time1 - $time2)/$type;
    switch ($digit){
        case 'floor': return floor($time);
        case 'ceil': return ceil($time);
        default: return round($time,2);
    }
}

function timeAgoInWords($dateTime, $options = array()) {
    $now = time();

    $inSeconds = strtotime($dateTime);
    $backwards = ($inSeconds > $now);

    $format = 'j/n/y';
    $end = '+1 month';

    if (is_array($options)) {
        if (isset($options['format'])) {
            $format = $options['format'];
            unset($options['format']);
        }
        if (isset($options['end'])) {
            $end = $options['end'];
            unset($options['end']);
        }
    } else {
        $format = $options;
    }

    if ($backwards) {
        $futureTime = $inSeconds;
        $pastTime = $now;
    } else {
        $futureTime = $now;
        $pastTime = $inSeconds;
    }
    $diff = $futureTime - $pastTime;

    // If more than a week, then take into account the length of months
    if ($diff >= 604800) {
        $current = array();
        $date = array();

        list($future['H'], $future['i'], $future['s'], $future['d'], $future['m'], $future['Y']) = explode('/', date('H/i/s/d/m/Y', $futureTime));

        list($past['H'], $past['i'], $past['s'], $past['d'], $past['m'], $past['Y']) = explode('/', date('H/i/s/d/m/Y', $pastTime));
        $years = $months = $weeks = $days = $hours = $minutes = $seconds = 0;

        if ($future['Y'] == $past['Y'] && $future['m'] == $past['m']) {
            $months = 0;
            $years = 0;
        } else {
            if ($future['Y'] == $past['Y']) {
                $months = $future['m'] - $past['m'];
            } else {
                $years = $future['Y'] - $past['Y'];
                $months = $future['m'] + ((12 * $years) - $past['m']);

                if ($months >= 12) {
                    $years = floor($months / 12);
                    $months = $months - ($years * 12);
                }

                if ($future['m'] < $past['m'] && $future['Y'] - $past['Y'] == 1) {
                    $years --;
                }
            }
        }

        if ($future['d'] >= $past['d']) {
            $days = $future['d'] - $past['d'];
        } else {
            $daysInPastMonth = date('t', $pastTime);
            $daysInFutureMonth = date('t', mktime(0, 0, 0, $future['m'] - 1, 1, $future['Y']));

            if (!$backwards) {
                $days = ($daysInPastMonth - $past['d']) + $future['d'];
            } else {
                $days = ($daysInFutureMonth - $past['d']) + $future['d'];
            }

            if ($future['m'] != $past['m']) {
                $months --;
            }
        }

        if ($months == 0 && $years >= 1 && $diff < ($years * 31536000)) {
            $months = 11;
            $years --;
        }

        if ($months >= 12) {
            $years = $years + 1;
            $months = $months - 12;
        }

        if ($days >= 7) {
            $weeks = floor($days / 7);
            $days = $days - ($weeks * 7);
        }
    } else {
        $years = $months = $weeks = 0;
        $days = floor($diff / 86400);

        $diff = $diff - ($days * 86400);

        $hours = floor($diff / 3600);
        $diff = $diff - ($hours * 3600);

        $minutes = floor($diff / 60);
        $diff = $diff - ($minutes * 60);
        $seconds = $diff;
    }
    $relativeDate = '';
    $diff = $futureTime - $pastTime;

    if ($diff > abs($now - strtotime($end))) {
        //$relativeDate = sprintf('%s', date($format, $inSeconds));
        $relativeDate = yiiDate($dateTime,'medium',false);
    } else {
        if ($years > 0) {
            // years and months and days
            $relativeDate .= ($relativeDate ? ', ' : '') . $years . ' ' . ($years==1 ? 'ปี':'ปี');
            $relativeDate .= $months > 0 ? ($relativeDate ? ', ' : '') . $months . ' ' . ($months==1 ? 'เดือน':'เดือน') : '';
            $relativeDate .= $weeks > 0 ? ($relativeDate ? ', ' : '') . $weeks . ' ' . ($weeks==1 ? 'สัปดาห์':'สัปดาห์') : '';
            $relativeDate .= $days > 0 ? ($relativeDate ? ', ' : '') . $days . ' ' . ($days==1 ? 'วัน':'วัน') : '';
        } elseif (abs($months) > 0) {
            // months, weeks and days
            $relativeDate .= ($relativeDate ? ', ' : '') . $months . ' ' . ($months==1 ? 'เดือน':'เดือน');
            $relativeDate .= $weeks > 0 ? ($relativeDate ? ', ' : '') . $weeks . ' ' . ($weeks==1 ? 'สัปดาห์':'สัปดาห์') : '';
            $relativeDate .= $days > 0 ? ($relativeDate ? ', ' : '') . $days . ' ' . ($days==1 ? 'วัน':'วัน') : '';
        } elseif (abs($weeks) > 0) {
            // weeks and days
            $relativeDate .= ($relativeDate ? ', ' : '') . $weeks . ' ' . ($weeks==1 ? 'สัปดาห์':'สัปดาห์');
            $relativeDate .= $days > 0 ? ($relativeDate ? ', ' : '') . $days . ' ' . ($days==1 ? 'วัน':'วัน') : '';
        } elseif (abs($days) > 0) {
            // days and hours
            $relativeDate .= ($relativeDate ? ', ' : '') . $days . ' ' . ($days==1 ? 'วัน':'วัน');
            $relativeDate .= $hours > 0 ? ($relativeDate ? ', ' : '') . $hours . ' ' . ($hours==1 ? 'ชั่วโมง':'ชั่วโมง') : '';
        } elseif (abs($hours) > 0) {
            // hours and minutes
            $relativeDate .= ($relativeDate ? ', ' : '') . $hours . ' ' . ($hours==1 ? 'ชั่วโมง':'ชั่วโมง');
            $relativeDate .= $minutes > 0 ? ($relativeDate ? ', ' : '') . $minutes . ' ' . ($minutes==1 ? 'นาที':'นาที') : '';
        } elseif (abs($minutes) > 0) {
            // minutes only
            $relativeDate .= ($relativeDate ? ', ' : '') . $minutes . ' ' . ($minutes==1 ? 'นาที':'นาที');
        } else {
            // seconds only
            $relativeDate .= ($relativeDate ? ', ' : '') . $seconds . ' ' . ($seconds==1 ? 'วินาที':'วินาที');
        }

        if (!$backwards) {
            $relativeDate = sprintf('%sที่แล้ว', $relativeDate);
        }
    }
    return $relativeDate;
}

function arrayToXml($data, $rootNodeName = 'data', $xml=null)
{
	// turn off compatibility mode as simple xml throws a wobbly if you don't.
	if (ini_get('zend.ze1_compatibility_mode') == 1)
	{
		ini_set ('zend.ze1_compatibility_mode', 0);
	}

	if ($xml == null)
	{
		$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName />");
	}

	// loop through the data passed in.
	foreach($data as $key => $value)
	{
		// no numeric keys in our xml please!
		if (is_numeric($key))
		{
			// make string key...
			$key = "unknownNode_". (string) $key;
		}

		// replace anything not alpha numeric
		$key = preg_replace('/[^a-z]/i', '', $key);

		// if there is another array found recrusively call this function
		if (is_array($value))
		{
			$node = $xml->addChild($key);
			// recrusive call.
			arrayToXml($value, $rootNodeName, $node);
		}
		else 
		{
			// add single node.
   			$value = htmlentities($value);
			$xml->addChild($key,$value);
		}

	}
	// pass back as string. or simple xml object if you want!
	return $xml->asXML();
}

function xmlToArray($contents, $get_attributes=1, $priority = 'tag') { 
    if(!$contents) return array(); 

    if(!function_exists('xml_parser_create')) { 
        //print "'xml_parser_create()' function not found!"; 
        return array(); 
    } 

    //Get the XML parser of PHP - PHP must have this module for the parser to work 
    $parser = xml_parser_create(''); 
    xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss 
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0); 
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1); 
    xml_parse_into_struct($parser, trim($contents), $xml_values); 
    xml_parser_free($parser); 

    if(!$xml_values) return;//Hmm... 

    //Initializations 
    $xml_array = array(); 
    $parents = array(); 
    $opened_tags = array(); 
    $arr = array(); 

    $current = &$xml_array; //Refference 

    //Go through the tags. 
    $repeated_tag_index = array();//Multiple tags with same name will be turned into an array 
    foreach($xml_values as $data) { 
        unset($attributes,$value);//Remove existing values, or there will be trouble 

        //This command will extract these variables into the foreach scope 
        // tag(string), type(string), level(int), attributes(array). 
        extract($data);//We could use the array by itself, but this cooler. 

        $result = array(); 
        $attributes_data = array(); 
         
        if(isset($value)) { 
            if($priority == 'tag') $result = $value; 
            else $result['value'] = $value; //Put the value in a assoc array if we are in the 'Attribute' mode 
        } else{
        	$result = '';
        }

        //Set the attributes too. 
        if(isset($attributes) and $get_attributes) { 
            foreach($attributes as $attr => $val) { 
                if($priority == 'tag') $attributes_data[$attr] = $val; 
                else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr' 
            } 
        } 

        //See tag status and do the needed. 
        if($type == "open") {//The starting of the tag '<tag>' 
            $parent[$level-1] = &$current; 
            if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag 
                $current[$tag] = $result; 
                if($attributes_data) $current[$tag. '_attr'] = $attributes_data; 
                $repeated_tag_index[$tag.'_'.$level] = 1; 

                $current = &$current[$tag]; 

            } else { //There was another element with the same tag name 

                if(isset($current[$tag][0])) {//If there is a 0th element it is already an array 
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result; 
                    $repeated_tag_index[$tag.'_'.$level]++; 
                } else {//This section will make the value an array if multiple tags with the same name appear together 
                    $current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array
                    $repeated_tag_index[$tag.'_'.$level] = 2; 
                     
                    if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well 
                        $current[$tag]['0_attr'] = $current[$tag.'_attr']; 
                        unset($current[$tag.'_attr']); 
                    } 

                } 
                $last_item_index = $repeated_tag_index[$tag.'_'.$level]-1; 
                $current = &$current[$tag][$last_item_index]; 
            } 

        } elseif($type == "complete") { //Tags that ends in 1 line '<tag />' 
            //See if the key is already taken. 
            if(!isset($current[$tag])) { //New Key 
                $current[$tag] = $result; 
                $repeated_tag_index[$tag.'_'.$level] = 1; 
                if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data; 

            } else { //If taken, put all things inside a list(array) 
                if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array... 

                    // ...push the new element into that array. 
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result; 
                     
                    if($priority == 'tag' and $get_attributes and $attributes_data) { 
                        $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data; 
                    } 
                    $repeated_tag_index[$tag.'_'.$level]++; 

                } else { //If it is not an array... 
                    $current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
                    $repeated_tag_index[$tag.'_'.$level] = 1; 
                    if($priority == 'tag' and $get_attributes) { 
                        if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well 
                             
                            $current[$tag]['0_attr'] = $current[$tag.'_attr']; 
                            unset($current[$tag.'_attr']); 
                        } 
                         
                        if($attributes_data) { 
                            $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data; 
                        } 
                    } 
                    $repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken 
                } 
            } 

        } elseif($type == 'close') { //End of tag '</tag>' 
            $current = &$parent[$level-1]; 
        } 
    } 
     
    return($xml_array); 
}
?>