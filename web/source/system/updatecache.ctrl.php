<?php
/**
 * [YuanWX System] Copyright (c) 2014 176dj.com
 * YuanWX is NOT a free software, it under the license terms, visited http://www.yuancloud.cn/ for more details.
 */
$_W['page']['title'] = '更新缓存 - 系统管理';
load()->model('cache');
load()->model('setting');
if (checksubmit('submit')) {
	cache_build_template();
	cache_build_users_struct();
	cache_build_setting();
	cache_build_account_modules();
	cache_build_account();
	cache_build_accesstoken();
	cache_build_frame_menu();
	cache_build_module_subscribe_type();
	cache_build_platform();
	message('缓存更新成功！', url('system/updatecache'));
} else {
	template('system/updatecache');
}



















