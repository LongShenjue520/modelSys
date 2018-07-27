CREATE TABLE `group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) DEFAULT NULL COMMENT '名称',
  `imgpath` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL COMMENT '图标',
  `createtime` int(11) DEFAULT NULL COMMENT '创建时间(自动)',
  `updatetime` int(11) DEFAULT '0' COMMENT '更新时间（自动）',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态',
  `sorts` smallint(3) DEFAULT '0' COMMENT '排序',
  `show` tinyint(1) DEFAULT '0' COMMENT '显示',
  `indexlink` tinyint(1) DEFAULT '1' COMMENT '是否首页链接(1为是0为否)',
  `companyid` int(10) DEFAULT NULL COMMENT 'company_id',
  `departmentid` int(10) DEFAULT '0' COMMENT '部门ID',
  `createid` int(10) DEFAULT NULL COMMENT 'create_id',
  `operateid` int(10) DEFAULT '0' COMMENT '操作人ID',
  `updateid` int(10) DEFAULT NULL COMMENT 'update_id',
  `orderno` varchar(50) DEFAULT NULL COMMENT '编号',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='应用项目组';
