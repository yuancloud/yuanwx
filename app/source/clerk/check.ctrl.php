<?php
/**
 * [YuanWX System] Copyright (c) 2014 176dj.com
 * YuanWX is NOT a free software, it under the license terms, visited http://www.yuancloud.cn/ for more details.
 */
defined('IN_IA') or exit('Access Denied');
$dos = array('check');
$do = in_array($do, $dos) ? $do : 'check';

if($do == 'check') {
	template('clerk/check');
}