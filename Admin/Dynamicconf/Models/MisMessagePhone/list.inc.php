<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'2' => array(
		'name' => 'userid',
		'showname' => '接收人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'userid',
		'sortnum' => '2',
		'searchField' => 'mis_message_phone.userid',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'1' => array(
		'name' => 'content',
		'showname' => '短信内容',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'content',
		'sortnum' => '3',
		'searchField' => 'mis_message_phone.content',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'3' => array(
		'name' => 'sendtime',
		'showname' => '发送时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sendtime',
		'sortnum' => '4',
		'searchField' => 'mis_message_phone.sendtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'transTime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'Y-m-d H:i:s',
				),
			),
		),
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'5' => array(
		'name' => 'flag',
		'showname' => '动作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'flag',
		'sortnum' => '5',
		'searchField' => 'mis_message_phone.createid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'func' => array(
			'0' => array(
				'0' => 'getSelectByname',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => 'phoneflag',
					'1' => '###',
					'2' => '',
				),
			),
		),
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'4' => array(
		'name' => 'createid',
		'showname' => '发送人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createid',
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
		'sortnum' => '6',
		'searchField' => 'mis_message_phone.createid',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '5',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'69' => array(
		'name' => 'action',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '7',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'extention_html_end' => array(
			'0' => ' ',
		),
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
);

?>