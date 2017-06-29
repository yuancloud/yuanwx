<?php
/**
 * Created by IntelliJ IDEA.
 * User: codeMonkey QQ:631872807
 * Date: 2015/6/8
 * Time: 8:35
 */

global $_W,$_GPC;
MonUtil::checkmobile();
$sid=$_GPC['sid'];
$shake=DBUtil::findById(DBUtil::$TABLE_QMSHAKE,$sid);
if(empty($shake)) {
	message("摇一摇活动删除或已不存在");
}
include $this->template("index");