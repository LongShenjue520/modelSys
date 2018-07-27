CREATE TABLE `mis_system_data_roam_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `masid` int(11) NOT NULL COMMENT '主表ID',
  `sname` varchar(50) NOT NULL COMMENT '来源字段中文名',
  `sfield` varchar(50) NOT NULL COMMENT '来源字段',
  `tname` varchar(50) NOT NULL DEFAULT '0' COMMENT '目标字段中文名',
  `tfield` varchar(50) NOT NULL DEFAULT '0' COMMENT '目标字段',
  `tsort` int(4) DEFAULT NULL COMMENT '目标字段执行排序',
  `condo` varchar(200) DEFAULT NULL COMMENT '定位条件',
  `conremark` varchar(200) DEFAULT NULL COMMENT '定位描述',
  `expdo` tinyint(1) DEFAULT NULL COMMENT '操作方式',
  `expremark` varchar(500) DEFAULT NULL COMMENT '操作描述',
  `sqlcuttomarr` varchar(1024) DEFAULT NULL COMMENT '自定义sql数据',
  `status` tinyint(1) DEFAULT '1',
  `companyid` int(10) DEFAULT NULL COMMENT 'company_id',
  `createid` int(10) DEFAULT NULL COMMENT 'create_id',
  `operateid` int(10) DEFAULT '0' COMMENT '操作人ID',
  `createtime` int(11) DEFAULT NULL COMMENT 'create_time',
  `updatetime` int(11) DEFAULT NULL COMMENT 'update_time',
  `updateid` int(10) DEFAULT NULL COMMENT 'update_id',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  `sourcetable` varchar(200) DEFAULT NULL COMMENT '来源表',
  `targettable` varchar(200) DEFAULT NULL COMMENT '目标表',
  `deldo` tinyint(1) DEFAULT NULL COMMENT '删除操作',
  `delremark` varchar(500) DEFAULT NULL COMMENT '删除描述',
  `delsqlcuttomarr` varchar(1024) DEFAULT NULL COMMENT '删除操作自定义sql语句',
  PRIMARY KEY (`id`),
  KEY `eid` (`masid`)
) ENGINE=InnoDB AUTO_INCREMENT=52209 DEFAULT CHARSET=utf8 COMMENT='数据库贯明细表';