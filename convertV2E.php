<?php
/**
@author info@nguyenanhung.com
@target convert 1 doan tu tieng Viet sang ky tu khong dau
@license Apache 2.0
@function convertV2E
@filename convertV2E.php
 **/
function convertV2E($str, $tolower = false, $callby = '', $slug = false) {
	$chars = array(
		'a'	=>	array('ấ','ầ','ẩ','ẫ','ậ','Ấ','Ầ','Ẩ','Ẫ','Ậ','ắ','ằ','ẳ','ẵ','ặ','Ắ','Ằ','Ẳ','Ẵ','Ặ','á','à','ả','ã','ạ','â','ă','Á','À','Ả','Ã','Ạ','Â','Ă','å','Ä','ä','aÌ'),
		'e'	=>	array('ế','ề','ể','ễ','ệ','Ế','Ề','Ể','Ễ','Ệ','é','è','ẻ','ẽ','ẹ','ê','É','È','Ẻ','Ẽ','Ẹ','Ê','ë','eÌ'),
		'i'	=>	array('í','ì','ỉ','ĩ','ị','Í','Ì','Ỉ','Ĩ','Ị','î','iÌ'),
		'o'	=>	array('ố','ồ','ổ','ỗ','ộ','Ố','Ồ','Ổ','Ô','Ộ','ớ','ờ','ở','ỡ','ợ','Ớ','Ờ','Ở','Ỡ','Ợ','ó','ò','ỏ','õ','ọ','ô','ơ','Ó','Ò','Ỏ','Õ','Ọ','Ô','Ơ','ø','ö','Ö','oÌ'),
		'u'	=>	array('ứ','ừ','ử','ữ','ự','Ứ','Ừ','Ử','Ữ','Ự','ú','ù','ủ','ũ','ụ','ư','Ú','Ù','Ủ','Ũ','Ụ','Ư','û','ů','ü','Ü','iÌ'),
		'y'	=>	array('ý','ỳ','ỷ','ỹ','ỵ','Ý','Ỳ','Ỷ','Ỹ','Ỵ','yÌ'),
		'd'	=>	array('đ','Đ','ð'),
		''	=> 	array('amp;', 'lt;', 'gt;', '.', 'quot;', '#92;', '#39','?','"',"'",'#',';',':','$','%','&'),
		'-'	=> 	array('----','---','--'),
		'ae' =>	array('æ'),
		'b'	=> 	array('ß'),
		'c' => 	array('ç'),
		'n' => 	array('ñ')
	);
	foreach ($chars as $key => $arr) {
		foreach ($arr as $val) {
			if ($tolower) {
				$str = strtolower(str_replace($val,$key,$str));
			} else {
				$str = str_replace($val,$key,$str);
			}
		}
	}
	if ($callby == 'postname') {
		$str = str_replace(' | ', '', $str);
		$str = str_replace(' : ', ' ', $str);
		$str = str_replace(': ', ' ', $str);
		$str = str_replace(' :', ' ', $str);
		$str = str_replace(':', '', $str);
		$str = str_replace(' ! ', ' ', $str);
		$str = str_replace('! ', ' ', $str);
		$str = str_replace(' !', ' ', $str);
		$str = str_replace('!', '', $str);
		$str = str_replace(' + ', ' ', $str);
		$str = str_replace('+ ', ' ', $str);
		$str = str_replace(' +', ' ', $str);
		$str = str_replace('+', '', $str);
		$str = str_replace(' & ', ' ', $str);
		$str = str_replace('& ', ' ', $str);
		$str = str_replace(' - ', ' ', $str);
		$str = str_replace(', ', ' ', $str);
		$str = str_replace(',', '', $str);
		$str = str_replace("'",' ',$str);
		$str = str_replace('"',' ',$str);
	}
	if ($slug) {
		$str = trim($str);
		$str = preg_replace(array("/[^a-zA-Z0-9 -]/","/[ -]+/","/^-|-$/"), array('','-',''), htmlspecialchars_decode($str));
	} else {
		$str = trim($str);
	}
	return $str;
}


