<?php
/**
 * 微社区-便民服务模块处理程序
 *
 * @author 疯狼工作组
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Fl_wsq_bmfwModuleProcessor extends WeModuleProcessor {
	public function respond() {
		$content = $this->message['content'];
		//这里定义此模块进行消息处理时的具体过程, 请查看YuanWX文档来编写你的代码
	}
}