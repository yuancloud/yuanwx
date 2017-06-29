<?php
if (!pdo_fieldexists('qiyue_qiuqian', 'links')) {
    pdo_query("ALTER TABLE " . tablename('qiyue_qiuqian') . " ADD `links` text DEFAULT '';");
}
if (!pdo_fieldexists('qiyue_qiuqian', 'qiantype')) {
    pdo_query("ALTER TABLE " . tablename('qiyue_qiuqian') . " ADD `qiantype` tinyint(1) DEFAULT '0';");
}