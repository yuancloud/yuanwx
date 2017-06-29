<?php
/**
 * [YuanWX System] Copyright (c) 2014 176dj.com
 * YuanWX is NOT a free software, it under the license terms, visited http://www.yuancloud.cn/ for more details.
 */

define('IN_GW', true);

if(in_array($action, array('profile', 'device', 'callback', 'appstore'))) {
	$do = $action;
	$action = 'redirect';
}
if($action == 'touch') {
	exit('success');
}
