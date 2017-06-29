<?php
/**
 * 专注中小企业信息化和互联网+
 * http://www.yuancloud.cn
 */
if($action != 'entry') {
	define('FRAME', 'setting');
	$frames = buildframes(array(FRAME));
	$frames = $frames[FRAME];
}
