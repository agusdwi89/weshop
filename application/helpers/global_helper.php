<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('debug_array'))
{
	function debug_array( $a=array(),$b=false)//format abjad-abjad atau abjad-angka
	{
	   	echo "<pre>";
        print_r($a);
        echo "</pre>";
		if(!$b)
			die();
        return 0;
	}
}

if ( ! function_exists('db_conv'))
{
	function db_conv($a)
	{
		if($a->num_rows() == 1){
			$a = $a->result();
			$a = $a[0];
			return $a;
		}else return array('your class db return more than 1 result');
	}
}

if (!function_exists('cur_url')) {
    function cur_url($a = 0) {
        $r = base_url() . uri_string();
        if ($a == 0) {
            return $r . '/';
        } else if ($a == -1) {
            return substr($r, 0, strripos($r, '/')). '/';
        } else if ($a == -2) {
            $r = substr($r, 0, strripos($r, '/'));
            return substr($r, 0, strripos($r, '/')). '/';
        }else if ($a == -3) {
            $r = substr($r, 0, strripos($r, '/'));
			$r = substr($r, 0, strripos($r, '/'));
			return substr($r, 0, strripos($r, '/')). '/';
        }
		
    }
}

if (!function_exists('tiny_mce')) {

    function tiny_mce($a,$front=false){
		$fr = "";
		if($front) $fr = "front";
        return "<script src='" . base_url() . "assets/editor/tiny_mce/tiny_mce.js' type='text/javascript'></script>
				<script>
					tinyMCE.init({
						relative_urls : false,
						remove_script_host : false,
						document_base_url : BASE,
						width : '100%',
						height: '400',
						mode : 'textareas',
						verify_html : false,
						theme : 'advanced',
						editor_selector : '{$a}',
						plugins : 'pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave',

						// Theme options
						theme_advanced_buttons1 : 'newdocument,|,bold,italic,underline,strikethrough,forecolor,backcolor,|,cut,copy,paste,pastetext,pasteword,|,search,replace',
						theme_advanced_buttons2 : 'bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,media,cleanup,help,code,emotions,advhr',
						theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell',
						theme_advanced_buttons4 : 'justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect',
						theme_advanced_toolbar_location : 'top',
						theme_advanced_toolbar_align : 'left',
						theme_advanced_statusbar_location : 'bottom',
						theme_advanced_resizing : true,

						// Drop lists for link/image/media/template dialogs
						template_external_list_url : 'lists/template_list.js',
						external_link_list_url : 'lists/link_list.js',
						external_image_list_url : 'lists/image_list.js',
						media_external_list_url : 'lists/media_list.js',

						// Style formats
						style_formats : [
							{title : 'Bold text', inline : 'b'},
							{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
							{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
							{title : 'Example 1', inline : 'span', classes : 'example1'},
							{title : 'Example 2', inline : 'span', classes : 'example2'},
							{title : 'Table styles'},
							{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
						],

						// Replace values for the template plugin
						template_replace_values : {
							username : 'Some User',
							staffid : '991234'
						},
						file_browser_callback : function(field_name, url, type, win) {
							var w = window.open('".base_url()."admin/finder/$fr', null, 'width=600,height=500');
							w.tinymceFileField = field_name;
							w.tinymceFileWin = win;
						}
					});
				</script>";
    }
}

function smart_trim($text, $max_len, $trim_middle = false, $trim_chars = '...')
{
	$text = strip_tags($text); 
	$text = trim($text);

	if (strlen($text) < $max_len) {

		return $text;

	} elseif ($trim_middle) {

		$hasSpace = strpos($text, ' ');
		if (!$hasSpace) {
			/**
			 * The entire string is one word. Just take a piece of the
			 * beginning and a piece of the end.
			 */
			$first_half = substr($text, 0, $max_len / 2);
			$last_half = substr($text, -($max_len - strlen($first_half)));
		} else {
			/**
			 * Get last half first as it makes it more likely for the first
			 * half to be of greater length. This is done because usually the
			 * first half of a string is more recognizable. The last half can
			 * be at most half of the maximum length and is potentially
			 * shorter (only the last word).
			 */
			$last_half = substr($text, -($max_len / 2));
			$last_half = trim($last_half);
			$last_space = strrpos($last_half, ' ');
			if (!($last_space === false)) {
				$last_half = substr($last_half, $last_space + 1);
			}
			$first_half = substr($text, 0, $max_len - strlen($last_half));
			$first_half = trim($first_half);
			if (substr($text, $max_len - strlen($last_half), 1) == ' ') {
				/**
				 * The first half of the string was chopped at a space.
				 */
				$first_space = $max_len - strlen($last_half);
			} else {
				$first_space = strrpos($first_half, ' ');
			}
			if (!($first_space === false)) {
				$first_half = substr($text, 0, $first_space);
			}
		}

		return $first_half.$trim_chars.$last_half;

	} else {

		$trimmed_text = substr($text, 0, $max_len);
		$trimmed_text = trim($trimmed_text);
		if (substr($text, $max_len, 1) == ' ') {
			/**
			 * The string was chopped at a space.
			 */
			$last_space = $max_len;
		} else {
			/**
			 * In PHP5, we can use 'offset' here -Mike
			 */
			$last_space = strrpos($trimmed_text, ' ');
		}
		if (!($last_space === false)) {
			$trimmed_text = substr($trimmed_text, 0, $last_space);
		}
		return remove_trailing_punctuation($trimmed_text).$trim_chars;

	}

}
function remove_trailing_punctuation($text)
{
	return preg_replace("'[^a-zA-Z_0-9]+$'s", '', $text);
}

function get_misc($id){
	$CI =& get_instance();
	$ds = db_conv($CI->db->get_where('misc', array('misc_id' => $id)));
	return $ds;
}

function get_unique($title,$table_name,$column){
	$CI =& get_instance();

	$uniqcount = 0;
	$key = url_title($title);
	$defkey = $key;
	$ds = $CI->db->get_where($table_name,array($column=>$title));
	$i = $ds->num_rows();
	while($i > 0){
		$uniqcount += 1;
		$key = $defkey.$uniqcount;
		$ds = $CI->db->get_where($table_name,array($column=>$key));
		$i = $ds->num_rows();
	}
	return $key;
}

function get_unique_edit($title,$table_name,$column,$column_id,$id){
	$CI =& get_instance();

	$uniqcount 	= 0;
	$key 		= url_title($title);
	$old 		= $CI->db->get_where($table_name,array($column_id=>$id))->row()->$column;
	if ($old == $key)
		return $key;
	else return get_unique($title,$table_name,$column);
}

function is_post(){
	$CI =& get_instance();
	return ($CI->input->server('REQUEST_METHOD') == "POST");
}

if (!function_exists('format_date_time')) {

    function format_date_time($i, $complete = true) {
		if(($i == '0000-00-00') || empty($i)){
			return '-';
		}else{
			$a = explode(" ", $i);
	        $d = explode("-", $a[0]);
	        if ($complete) {
	            $t = explode(":", $a[1]);
	            return "$d[2]-$d[1]-$d[0] $t[0]:$t[1]";
	        }else
	            return "$d[2]-$d[1]-$d[0]";
		}
    }
}

function indo_day($d){
	switch ($d) {
		case 'Sun':return 'Minggu';break;
		case 'Mon':return 'Senin';break;
		case 'Tue':return 'Selasa';break;
		case 'Wed':return 'Rabu';break;
		case 'Thu':return 'Kamis';break;
		case 'Fri':return 'Jumat';break;
		case 'Sat':return 'Sabtu';break;
	}
}

if (!function_exists('pretty_date')) {

    function pretty_date($i,$complete = true) {
		if(($i == '0000-00-00') || empty($i)){
			return '-';
		}else{
			$date = new DateTime($i);
			$day = indo_day($date->format('D'));
		
			if($complete){
				$a = explode(" ", $i);
				$d = explode("-", $a[0]);
				$j = explode(":", $a[1]);	
			}else{
				$a = explode(" ", $i);
				$d = explode("-", $a[0]);
			}
			$bln = '';
			switch (intval($d[1])) {
				case 1: $bln = 'Januari';break;
				case 2: $bln = 'Februari';break;
				case 3: $bln = 'Maret';break;
				case 4: $bln = 'April';break;
				case 5: $bln = 'Mei';break;
				case 6: $bln = 'Juni';break;
				case 7: $bln = 'Juli';break;
				case 8: $bln = 'Agustus';break;
				case 9: $bln = 'September';break;
				case 10: $bln = 'Oktober';break;
				case 11: $bln = 'November';break;
				case 12: $bln = 'Desember';break;
			}
			if ($complete) {
				return "$day, $d[2] $bln $d[0] $j[0]:$j[1]";
			}else return "$day, $d[2] $bln $d[0]";
			
		}
    }
}

function format_number($number){
	return number_format($number, 0, ',', '.');
}