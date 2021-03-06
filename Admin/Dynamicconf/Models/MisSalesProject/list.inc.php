<?php 
return array(
	'34' => array(
		'name' => 'orderno',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '1',
		'searchField' => 'mis_auto_kimpu.orderno',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'helpvalue' => '',
	),
	'0' => array(
		'name' => 'name',
		'showname' => '项目名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '2',
		'searchField' => 'mis_auto_kimpu.name',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'helpvalue' => '',
	),
	'1' => array(
		'name' => 'typeid',
		'showname' => '业务类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'typeid',
		'sortnum' => '3',
		'searchField' => 'mis_auto_kimpu.typeid',
		'conditions' => 'outlinelevel,1',
		'type' => 'select',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_system_flow_type',
				),
			),
		),
		'table' => 'mis_system_flow_type',
		'field' => 'name',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'zt',
		'showname' => '主体',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zt',
		'sortnum' => '4',
		'searchField' => 'mis_auto_kimpu.zt',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_sale_client_type',
				),
			),
		),
		'table' => 'mis_sale_client_type',
		'field' => 'name',
		'helpvalue' => '',
	),
	'3' => array(
		'name' => 'hy',
		'showname' => '行业',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'hy',
		'sortnum' => '5',
		'searchField' => 'mis_auto_kimpu.hy',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_sale_profession',
				),
			),
		),
		'table' => 'mis_sale_profession',
		'field' => 'name',
		'helpvalue' => '',
	),
	'4' => array(
		'name' => 'cyl',
		'showname' => '产业链',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'cyl',
		'sortnum' => '6',
		'searchField' => 'mis_auto_kimpu.cyl',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_sale_industry',
				),
			),
		),
		'table' => 'mis_sale_industry',
		'field' => 'name',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'sjid',
		'showname' => '商机编号',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sjid',
		'sortnum' => '7',
		'searchField' => 'mis_auto_kimpu.sjid',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'helpvalue' => '',
	),
	'6' => array(
		'name' => 'sjuserid',
		'showname' => '商机所属人',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sjuserid',
		'sortnum' => '8',
		'searchField' => 'mis_auto_kimpu.sjuserid',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'helpvalue' => '',
	),
	'7' => array(
		'name' => 'projectcode',
		'showname' => '参照项目编码',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectcode',
		'sortnum' => '9',
		'searchField' => 'mis_auto_kimpu.projectcode',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '7',
		'helpvalue' => '',
	),
	'8' => array(
		'name' => 'projectname',
		'showname' => '参照项目名称',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectname',
		'sortnum' => '10',
		'searchField' => 'mis_auto_kimpu.projectname',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '8',
		'helpvalue' => '',
	),
	'9' => array(
		'name' => 'projectstatus',
		'showname' => '参照项目状态',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectstatus',
		'sortnum' => '11',
		'searchField' => 'mis_auto_kimpu.projectstatus',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '9',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'debit',
				),
			),
		),
		'helpvalue' => '',
	),
	'10' => array(
		'name' => 'zd',
		'showname' => '主调',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zd',
		'sortnum' => '12',
		'searchField' => 'mis_auto_kimpu.zd',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '10',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'user',
				),
			),
		),
		'table' => 'user',
		'field' => 'name',
		'helpvalue' => '',
	),
	'11' => array(
		'name' => 'fd',
		'showname' => '副调',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'fd',
		'sortnum' => '13',
		'searchField' => 'mis_auto_kimpu.fd',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '11',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'user',
				),
			),
		),
		'table' => 'user',
		'field' => 'name',
		'helpvalue' => '',
	),
	'12' => array(
		'name' => 'dkyt',
		'showname' => '贷款用途',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'dkyt',
		'sortnum' => '14',
		'searchField' => 'mis_auto_kimpu.dkyt',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '12',
		'ischosice' => '1',
		'helpvalue' => '',
	),
	'13' => array(
		'name' => 'utms',
		'showname' => '贷款用途描述',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'utms',
		'sortnum' => '15',
		'searchField' => 'mis_auto_kimpu.utms',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '13',
		'ischosice' => '1',
		'helpvalue' => '',
	),
	'14' => array(
		'name' => 'bank',
		'showname' => '意向银行',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'bank',
		'sortnum' => '16',
		'searchField' => 'mis_auto_kimpu.bank',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '14',
		'helpvalue' => '',
	),
	'15' => array(
		'name' => 'xz',
		'showname' => '项目性质',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'xz',
		'sortnum' => '17',
		'searchField' => 'mis_auto_kimpu.xz',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '15',
		'ischosice' => '1',
		'helpvalue' => '',
	),
	'16' => array(
		'name' => 'dbfl',
		'showname' => '意向担保费率',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'dbfl',
		'sortnum' => '18',
		'searchField' => 'mis_auto_kimpu.dbfl',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '16',
		'helpvalue' => '',
	),
	'17' => array(
		'name' => 'zsdbl',
		'showname' => '正式担保费率',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zsdbl',
		'sortnum' => '19',
		'searchField' => 'mis_auto_kimpu.zsdbl',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '17',
		'helpvalue' => '',
	),
	'18' => array(
		'name' => 'yhlv',
		'showname' => '银行利率',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'yhlv',
		'sortnum' => '20',
		'searchField' => 'mis_auto_kimpu.yhlv',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '18',
		'helpvalue' => '',
	),
	'19' => array(
		'name' => 'yj',
		'showname' => '继保意见',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'yj',
		'sortnum' => '21',
		'searchField' => 'mis_auto_kimpu.yj',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '19',
		'ischosice' => '1',
		'helpvalue' => '',
	),
	'20' => array(
		'name' => 'sfjq',
		'showname' => '是否结清',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sfjq',
		'sortnum' => '22',
		'searchField' => 'mis_auto_kimpu.sfjq',
		'conditions' => '',
		'type' => 'radio',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '20',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'debit',
				),
			),
		),
		'helpvalue' => '',
	),
	'21' => array(
		'name' => 'qtsm',
		'showname' => '其他事项说明',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'qtsm',
		'sortnum' => '23',
		'searchField' => 'mis_auto_kimpu.qtsm',
		'conditions' => '',
		'type' => 'textarea',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '21',
		'ischosice' => '1',
		'helpvalue' => '',
	),
	'22' => array(
		'name' => 'zbje',
		'showname' => '在保金额（万元）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zbje',
		'sortnum' => '24',
		'searchField' => 'mis_auto_kimpu.zbje',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '22',
		'helpvalue' => '',
	),
	'23' => array(
		'name' => 'sqje',
		'showname' => '申请金额（万元）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sqje',
		'sortnum' => '25',
		'searchField' => 'mis_auto_kimpu.sqje',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '23',
		'helpvalue' => '',
	),
	'24' => array(
		'name' => 'psje',
		'showname' => '评审金额（万元）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'psje',
		'sortnum' => '26',
		'searchField' => 'mis_auto_kimpu.psje',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '24',
		'helpvalue' => '',
	),
	'25' => array(
		'name' => 'sqywqx',
		'showname' => '申请业务期限（月）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sqywqx',
		'sortnum' => '27',
		'searchField' => 'mis_auto_kimpu.sqywqx',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '25',
		'helpvalue' => '',
	),
	'26' => array(
		'name' => 'psqx',
		'showname' => '评审期限（月）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'psqx',
		'sortnum' => '28',
		'searchField' => 'mis_auto_kimpu.psqx',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '26',
		'helpvalue' => '',
	),
	'27' => array(
		'name' => 'fkrq',
		'showname' => '放款日期',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'fkrq',
		'sortnum' => '29',
		'searchField' => 'mis_auto_kimpu.fkrq',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '27',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
	),
	'28' => array(
		'name' => 'jhrq',
		'showname' => '计划到期日',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'jhrq',
		'sortnum' => '30',
		'searchField' => 'mis_auto_kimpu.jhrq',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '28',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
	),
	'29' => array(
		'name' => 'sfdc',
		'showname' => '是否代偿',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sfdc',
		'sortnum' => '31',
		'searchField' => 'mis_auto_kimpu.sfdc',
		'conditions' => '',
		'type' => 'radio',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '29',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'debit',
				),
			),
		),
		'helpvalue' => '',
	),
	'30' => array(
		'name' => 'dcje',
		'showname' => '代偿金额（万元）',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'dcje',
		'sortnum' => '32',
		'searchField' => 'mis_auto_kimpu.dcje',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '30',
		'helpvalue' => '',
	),
	'31' => array(
		'name' => 'hkfs',
		'showname' => '还款方式',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'hkfs',
		'sortnum' => '33',
		'searchField' => 'mis_auto_kimpu.hkfs',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '31',
		'helpvalue' => '',
	),
	'32' => array(
		'name' => 'bzjzh',
		'showname' => '保证金账号',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'bzjzh',
		'sortnum' => '34',
		'searchField' => 'mis_auto_kimpu.bzjzh',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '32',
		'helpvalue' => '',
	),
	'33' => array(
		'name' => 'jqrq',
		'showname' => '结清日期',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'jqrq',
		'sortnum' => '35',
		'searchField' => 'mis_auto_kimpu.jqrq',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '33',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
	),
	'35' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'showStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
				),
			),
		),
		'sortnum' => '36',
		'helpvalue' => '',
	),
);

?>