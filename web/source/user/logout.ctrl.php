<?php
/**
 * [YuanWX System] Copyright (c) 2014 176dj.com
 * YuanWX is NOT a free software, it under the license terms, visited http://www.yuancloud.cn/ for more details.
 */
defined('IN_IA') or exit('Access Denied');
isetcookie('__session', '', -10000);

$forward = $_GPC['forward'];
if(empty($forward)) {
	$forward = './?refersh';
}
header('Location:' . url('account/welcome'));
