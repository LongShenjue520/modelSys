<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="robots" content="nofollow" />
<meta name="robots" content="noarchive" />
<title><?php if($companyid): echo C('COPYRIGHT'); endif; ?></title>
<!--
<link rel="stylesheet" type="text/css" href="__PUBLIC__/extJS/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/extJS/example.css" />
-->
<!-- bootstrap-->
<!--<link href="__PUBLIC__/bootstrap/css/bootstrap.css" rel="stylesheet" />-->

<link href="__PUBLIC__/Images/404/css.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Js/DataTables/media/css/jquery.dataTables.css" />
<!--do start-->
<link href="__PUBLIC__/Css/tmlstyle/tml.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="__PUBLIC__/dwz2/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="__PUBLIC__/Css/colorbox/colorbox.css" rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="__PUBLIC__/Js/jqGrid/themes/redmond/jquery-ui-1.8.2.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="__PUBLIC__/Js/jqGrid/css/ui.jqgrid.css" />
<!-- 日程 -->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/fullcalendar.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/fullcalendar.print.css" media="print" />

<script src="__PUBLIC__/Js/Huploadify/Huploadify.css"></script>
<link href="__PUBLIC__/Js/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>

<!-- ztree -->
<link href="__PUBLIC__/Css/zTreeStyle/zTreeStyle.css" rel="stylesheet" />
<!--[if IE]>
<link href="__PUBLIC__/dwz2/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<!-- 日期 -->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/flow/workflow.css" />
<!--换肤-->
<!--<link href="__PUBLIC__/Css/tmlstyle/tml_skin_red.css" rel="stylesheet" type="text/css" media="screen"/>-->
<!--<link href="__PUBLIC__/Css/tmlstyle/tml_skin_green.css" rel="stylesheet" type="text/css" media="screen"/>-->
<!-- DataTables -->
<!--兼容样式-->
<!--<link href="__PUBLIC__/Css/tmlstyle/jui_bootstrap_compatible.css" rel="stylesheet" />-->

<link href="__PUBLIC__/Js/newCombobox/jquery.ajax-combobox.css" rel="stylesheet" />
<link rel="stylesheet" href="__PUBLIC__/Js/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css">
<script>
// window.onerror = function(errorMsg, url, lineNumber) {
// 		try{
// 			alertMsg.error("页面JS错误");
// 			$("#background,#progressBar").hide();
// 		}catch(err){
// 			console.log(errorMsg);
// 		}
// 		return false;  
// }
var TP_ROOT = "__ROOT__";
var TP_TMPL = "__TMPL__";
var TP_APP  = "__APP__";
var TP_PUBLIC  = "__PUBLIC__";
var TP_URL  = "__URL__";
var TP_DECIMAL='<?php echo getDigits(0,false);?>';
var dialogMaskNum = 0;
</script>
<script src="__PUBLIC__/Js/jquery-1.7.1.js" type="text/javascript"></script>
<!-- bootstrap-->
<!--<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->

<!-- swfupload -->
<script src="__PUBLIC__/Js/swfupload/scripts/swfupload.js"></script>
<!-- uploadify -->
<script src="__PUBLIC__/Js/uploadify/scripts/jquery.uploadify.js"></script>
<!-- html5 uploadify -->
<script src="__PUBLIC__/Js/Huploadify/jquery.Huploadify.js"></script>
<!-- 条件js -->
<script src="__PUBLIC__/Js/addResult.js" type="text/javascript"></script>
		

<script type="text/javascript" language="javascript" src="__PUBLIC__/Js/DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/tml.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.table_wang_info_new.js"></script>
<link rel="stylesheet" href="__PUBLIC__/chosen/chosen.css" />

<script src="__PUBLIC__/chosen/chosen.jquery.js" type="text/javascript"></script>
<link href="__PUBLIC__/Js/select2/select2.css" rel="stylesheet"/>
<script type="text/javascript" language="javascript" src="__PUBLIC__/Js/select2/select2.js"></script>
<script src="__PUBLIC__/Js/jquery.popupwindow.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz2/js/jquery.cookie.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz2/js/jquery.validate.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz2/js/jquery.bgiframe.js" type="text/javascript"></script>

<script src="__PUBLIC__/Js/jquery.anchorsToolBar.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery.affix-form.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery.switch.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz2/js/dwz.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz2/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="__PUBLIC__/ueditor/ueditor.config.js" type="text/javascript"></script>
<script src="__PUBLIC__/ueditor/ueditor.all.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/jquery.marquee.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/addResult.js" type="text/javascript"></script> 
<script src="__PUBLIC__/Js/EsbApi/esblink.api.js" type="text/javascript"></script> 
<!-- 引入百度地图API -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=yshpYZlwnyEREkgdIgHcCPVx"></script>
<!-- lodop打印 -->
<!-- 日程 -->
<script src="__PUBLIC__/Js/jquery-ui-1.10.3.custom.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/fullcalendar.js" type="text/javascript"></script>
<!-- 聊天室js start -->
<!--  
<script src="http://<?php echo $_SERVER['SERVER_NAME'].':'.C('chat_port'); ?>/socket.io/socket.io.v0.9.9.js" type="text/javascript"></script>
-->
<!-- 预加载 -->
<script src="__PUBLIC__/Js/LAB.min.js" type="text/javascript"></script>
<!-- 导航js -->
<!-- 自定义js -->
<script src="__PUBLIC__/Js/main.js" type="text/javascript"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.dragsort.js"></script>

<script type="text/javascript" src="__PUBLIC__/Js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/calculator.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/highcharts.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/plugin.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.cookie.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/newCombobox/jquery.ajax-combobox.js"></script>


<!--	列表树插件 -->
<link rel="stylesheet" href="__PUBLIC__/Js/jqueryTable/screen.css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Js/jqueryTable/jquery.treetable.css" />
<link rel="stylesheet" href="__PUBLIC__/Js/jqueryTable/jquery.treetable.theme.default.css" />
<script src="__PUBLIC__/Js/jqueryTable/jquery.treetable.js"></script>

<script src="__PUBLIC__/Js/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>

<script>
    function cjkEncode(text) {
        if (text == null) {
            return "";
        }
        var newText = "";
        for (var i = 0; i < text.length; i++) {
            var code = text.charCodeAt (i);
            if (code >= 128 || code == 91 || code == 93) {
                newText += "[" + code.toString(16) + "]";
            } else {
                newText += text.charAt(i);
            }
        }
        return newText;
    }
$(function() {
	$LAB.script("__PUBLIC__/Charts/FusionCharts.js")
	.script("__PUBLIC__/Js/jquery.colorbox.js")
	.script("__PUBLIC__/Js/jquery.autocomplete.js")
	.script("__PUBLIC__/Js/jquery.ztree.all-3.4.js")
	.script("__PUBLIC__/My97DatePicker/WdatePicker.js")
	.script("__PUBLIC__/Js/jquery.lazyload.min.js")
	.script("__PUBLIC__/Js/jqGrid/js/jquery.jqGrid.min.js")
	.script("__PUBLIC__/Js/jqGrid/js/i18n/grid.locale-en.js")
	.script("__PUBLIC__/Js/report_forms.js")
	.script("__PUBLIC__/Js/LodopFuncs.js")
	.script("__PUBLIC__/dwz2/xheditor/xheditor-1.1.12-zh-cn.min.js")
	.script("__PUBLIC__/Js/jquery.textSearch-1.0.js")
    .wait(function(){
    	// 等待所有script加载完再执行这个代码块
    	//<!--百度编辑器的HomeURl-->
    	window.UEDITOR_HOME_URL = '__ROOT__/Public/ueditor/';
    	// 判断加载 初始化弹出
    	setTimeout(initOpenNavTab, 2000);
    	function initOpenNavTab(){
    		var objarr = <?php echo ($data); ?>;
    		// 判断是否有data参数
    		if(objarr){
    			//分割后[0]为实际路径,[1]为标签显示名称,[2]对应Model,[3]对应类型 dialog跟navtab 默认是navtabf
    			var urls = TP_APP+"/"+objarr['url'].replace(/\,/g, "/");
    			if(objarr['target']){
    				if(objarr['target']=='Dialog'){
    					var options = {};
    					options.width = 980;
    					options.height = 566;
    					options.mask = true;
    				   $.pdialog.open(urls,objarr['model'],objarr['title'],options);		
    				}else{
    					navTab.openTab(objarr['model'], urls, {title : objarr['title'],fresh : true,data : {}});
    				}
    			}else{
    				navTab.openTab(objarr['model'], urls, {title : objarr['title'],fresh : true,data : {}});
    			}
    		}
    	}
       // 站点地图
       var cuarWindowHeight = $(window).height();
       $('div.site_map_lay .map_content').height(cuarWindowHeight - 200);
       
       window.onresize = function()
       {  
			var cuarWindowHeight = $(window).height();
			$('div.site_map_lay .map_content').height(cuarWindowHeight - 200);
       }
       
        $("a.site_map").toggle(function(){
            $('div.site_map_lay').fadeIn(200);
            $("#navikeyinput").focus();
            $("a.site_map .map_name").html("关闭导航");},
        function(){
            $('div.site_map_lay').fadeOut(200);
            $("a.site_map .map_name").html("系统导航");}
        );
    });
//        var username =cjkEncode("<?php echo ($_SESSION['username']); ?>");
//        var password =cjkEncode("<?php echo ($_SESSION['password']); ?>");
		  var username ='admin';
		  var password ='hndgs2017';
//            var f = document.getElementById("loginForm");
        jQuery.ajax({
            url:"http://192.168.10.42:37799/WebReport/ReportServer?op=fs_load&cmd=sso",//µ¥µãµÇÂ¼µÄ±¨±í·þÎñÆ÷
            dataType:"jsonp",//¿çÓò²ÉÓÃjsonp·½Ê½
            data:{"fr_username":username,"fr_password":password},
            jsonp:"callback",
            timeout:10000,//³¬Ê±Ê±¼ä£¨µ¥Î»£ººÁÃë£©
            success:function(data) {
                if (data.status === "success") {
                    $("#myIfram").attr('src',"http://192.168.10.42:37799/WebReport/ReportServer?op=fs");
                    //µÇÂ¼³É¹¦
                } else if (data.status === "fail"){
                    console.log("登陆失败");           //µÇÂ¼Ê§°Ü£¨ÓÃ»§Ãû»òÃÜÂë´íÎó£©
                }
            },
            error:function(){
                console.log("链接超时");// µÇÂ¼Ê§°Ü£¨³¬Ê±»ò·þÎñÆ÷ÆäËû´íÎó£©
            }
        });
    jQuery.ajax({
        url:"http://1.62.154.90:37799/WebReport/ReportServer?op=fs_load&cmd=sso",//µ¥µãµÇÂ¼µÄ±¨±í·þÎñÆ÷
        dataType:"jsonp",//¿çÓò²ÉÓÃjsonp·½Ê½
        data:{"fr_username":username,"fr_password":password},
        jsonp:"callback",
        timeout:10000,//³¬Ê±Ê±¼ä£¨µ¥Î»£ººÁÃë£©
        success:function(data) {
            if (data.status === "success") {
                $("#myIfram").attr('src',"http://1.62.154.90:37799/WebReport/ReportServer?op=fs");
                //µÇÂ¼³É¹¦
            } else if (data.status === "fail"){
                console.log("登陆失败");           //µÇÂ¼Ê§°Ü£¨ÓÃ»§Ãû»òÃÜÂë´íÎó£©
            }
        },
        error:function(){
            console.log("链接超时");// µÇÂ¼Ê§°Ü£¨³¬Ê±»ò·þÎñÆ÷ÆäËû´íÎó£©
        }
    });
});
</script>
<script>
$(window).off("message");
$(window).on('message', function (e) {
    var command = e.originalEvent.data, origin = e.originalEvent.origin;
    var arr = command.split("###");
    if(arr.length>0 && arr[0]=="openTMLNavTab"){
    	var data = arr[1].split("&&&");
    	$.ajax({
   		   type: "POST",
   		   url: TP_URL+"/getTMLNavTabId/module/"+data[0]+"/orderno/"+arr[4],
   		   data: "",
   		   success: function(url){
   			   if(url!==""){
		   		   var title=data[1]?data[1]:"报表查看";
		   	       var tabid="baobiao_view";
		   	       var fresh=true;
		   	       var external=false;
		   	       navTab.openTab(tabid,url,{title:title,fresh:fresh,external:external});
   			   }
   		   }
   		});
   		
    }
});

if(typeof io != 'undefined'){
	var socketio;
	var unreadMsgs;
	document.cookie = 'socketUid=<?php echo $_SESSION[C("USER_AUTH_KEY")]; ?>;path=/;';

	$(document).ready(function(){
		socketio = new io.connect("http://<?php echo $_SERVER['SERVER_NAME'].':'.C('chat_port'); ?>");
		unreadMsgs = {};
		/* 被其他地方的登陆挤下线 */
		socketio.on('bePoped', function(){
			alert('您的帐号有其他地方的登陆，被迫下线，如不是您本人允许，请修改密码');
			window.location.href = TP_APP + '/Public/logout/';
		});

		$('li[tabid="MisChat"] span').live('click',function(){
			$(this).removeClass('newMsgIn');
		});

		/* 提示有新消息 */
		socketio.on('noticeMsgIn', function(data){
			if($('#chat_flag').length == 0){
				$('#room_enter .shownotic').show();
				data.time = msgTime();

				if(typeof unreadMsgs[data.from] == 'undefined'){
					unreadMsgs[data.from] = [];
				}

				unreadMsgs[data.from].push(data);
			}else if($('#chat_flag:visible').length == 0){
				$('li[tabid="MisChat"] span').addClass('newMsgIn');
			}
		});

		function msgTime(){
			var date = new Date();
			var minutes = date.getMinutes();
			var seconds = date.getSeconds();
			minutes = minutes >= 10 ? minutes : '0' + minutes;
			seconds = seconds >= 10 ? seconds : '0' + seconds;
			return date.getHours() + ':' + minutes + ':' + seconds;
		};
	});
}
function changecompang(obj){
	var val=$(obj).val();
	$.ajax({
		type : "POST",
		url : "__URL__/lookupchangec",
		data : {
			'companyid' : val,
		},
		success : function(response) {
			window.location.reload();
		}
	});
}
function changecompang1(obj,id){
	$.ajax({
		type : "POST",
		url : "__URL__/lookupchangec",
		data : {
			'companyid' : id,
		},
		success : function(response) {
			window.location.reload();
		}
	});
	
}
</script>
<script>
//不支持ie6显示
if($.browser.msie && ($.browser.version == "6.0") && !$.support.style){
	alert("要想浏览效果更佳,请使用IE6以上版本!");
	//window.location.href="http://yun.tmlsoft.com";
}
</script>
<script>
	//发起工作遮罩层处理
	$(function() {
		$(".index_work_lay").css("width",$(".tml_box_content").width()+30);
	});
</script>
<style>

</style>
</head>
<body scroll="no">
<iframe id="myIfram" frameborder="0" src="http://192.168.10.42:37799/WebReport/ReportServer?op=fs_load&cmd=fs_signin&pid=com.fr.plugin.fresh.login&_=1501666485320" allowtransparency="true" scrolling="yes" style="width: 100%; height:100%;display: none;">
</iframe>
	<div class="xymodal_overlay" id="xyModalOverlay1"></div>
	<div class="xymodal" id="xyModal1"></div>
	<div class="xymodal_arrow" id="xymodalArrow1"></div>
	<div class="xymodal_overlay" id="xyModalOverlay2"></div>
	<div class="xymodal" id="xyModal2"></div>
	<div class="xymodal_arrow" id="xymodalArrow2"></div>
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="" href="<?php echo (C("bbsurl")); ?>" style="display:inline-block; position: absolute;left:10px; top:5px;">
					<?php if($logoPic != null): ?><img alt="logo" height="40" src="__PUBLIC__/Uploads/<?php echo ($logoPic); ?>" />
					<?php else: ?>
						<img alt="logo" height="40" src="__PUBLIC__/Images/logo.png" /><?php endif; ?>
				 </a>
                <div class="login_company">
                	<span class="company_name"><?php echo ($companyname); ?></span>
	                <?php if(count($MisSystemCompanyList) > 1): ?><span class="icon-angle-down company_select"></span><?php endif; ?>
                </div>
                 <div id="loadcompany" class="company_cut top_drop_lay">
					<ul>
						<?php if(is_array($MisSystemCompanyList)): $i = 0; $__LIST__ = $MisSystemCompanyList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$MisSystemCompanyVo): $mod = ($i % 2 );++$i;?><li <?php if($MisSystemCompanyVo["companyid"] == $companyid): ?>class="active"<?php endif; ?> onclick="changecompang1(this,<?php echo ($MisSystemCompanyVo['companyid']); ?>)"><?php echo ($MisSystemCompanyVo['name']); ?> </li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
                <script type="text/javascript">
					$(function(){
						$("span.company_name,span.company_select").click(function(){
							$("#loadcompany").toggle();
						});

						$("#loadcompany").mouseleave(function(){
								$("#loadcompany").hide();	
							})
					})
                    $(function(){
                        $('.user_operate_ul li a.theme').click(function(){
                            $(this).closest("ul").find("a").removeClass('active');
                            $(this).addClass('active');
                        });
                    });
				</script>
				<div style="position:absolute;top:7px; left:23%;width:45%;height:30px;z-index:100;color:#363636;font-size:12pt;line-height:20px">
				 	<marquee behavior="scroll" width="100%" scrollamount="3" direction="left" line-height="10px">
					 	<ul>
						 	<li style=" float:left; clear: right; white-space: nowrap;height: 30px;list-style: none;">
						 		<?php echo (htmlspecialchars_decode($roll)); ?>
						 	</li>
					 	</ul>
				 	</marquee>
				 </div>
				<!--<ul class="nav" id="mainpanel">-->
				<ul class="right_top" id="mainpanel">
					<li class="nav_first">
					<div id="loadusername" class="top_drop_lay user_more_operate">
						<ul class="user_operate_ul">
							<li><a href="__APP__/UserInfo/index"target="navTab" rel="UserInfo">个人资料</a></li>
							<li>
                                <a href="__APP__/MisMessage/index/messageType/inboxself" target="navTab" title="收件箱" rel="MisMessage">
                                    <span>邮件</span>
                                    <span class="tips_number js-countemail"><?php echo ($newmsg['countsum']); ?></span>
                                </a>
                            </li>
							<li>
                                <a href="#">
                                    <span>待处理工作</span>
                                    <span class="tips_number"><?php echo ($workCount); ?></span>
                                </a>
                            </li>
							<li>
                                <span class="left">换肤：</span>
                                <a class="left skin_blue theme active" title="默认" href="#"></a>
                                <a class="left skin_green theme" title="绿色" href="#"></a>
                                <a class="left skin_red theme" title="红色" href="#"></a>
							</li>
						</ul>
					</div>
					<script type="text/javascript">
					$(function(){
						$("#mainpanel .login_user_name ").click(function(){
							$("#loadusername").toggle();
						})
						$("#loadusername").mouseleave(function(){
							$("#loadusername").hide();	
						})
					})
					</script>
                        <img class="user_photo" width="38" height="38" <?php if($loaduserpicture): ?>src="__PUBLIC__/<?php echo ($loaduserpicture); ?>" <?php else: ?>src="__PUBLIC__/Uploads/img/photo/photo.jpg"<?php endif; ?> alt=""/>
                        <span class="login_user_name"><?php echo ($_SESSION['loginUserName']); ?></span>
                    </li>
                    <li>
                        <a class="cache_clean" target="dialog" width="300" height="250" mask="true" href="__URL__/clearcache" title="清空缓存">清空缓存</a>
                    </li>
                    <li>
                        <a class="logout_btn" href="__APP__/Public/logout/" title="退出系统">退出 <span class="icon-power-off"></span></a>
                    </li>
				</ul>
				<script>
					function deletecache(){
						var u='__APP__/Index/clear_cache/';
						$.ajax({
							type:'GET',
							url:u,
							success:function(json){
								json = DWZ.jsonEval(json);
								alertMsg.correct(json.message);
							},
							error:DWZ.ajaxError});
						return false;
					}
					function myopendialog(){
					    $.pdialog.open("__APP__/MisUserApps/add", 'fifterDiv', '添加APP应用', {resizable:false});
					    return false;
					}
				</script>

			</div>

		<!--<div id="navMenu"><?php echo ($often); ?></div>-->
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="mymenu-trigger">
						<a href="#" id="xyStartMenuTrigger"><span class="icon-reorder"></span><span> 菜单</span></a>
					</div>
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>

				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:void(0)">我的主页</a></li>
				</ul>

				<div class="navTab-panel tabsPageContent layoutBox">
					<div style="height:100%;position:relative;">
						<div class="pageFormContent s_modules" id="s_modules" >
							<style>
.clear{ clear:both;}
img {border:none;}
ul,li{ list-style:none;}
#s_left{ width:400px; float:right; margin-top:4px;}
/*new*/
.index_l{ background-color:#FFF; border-left:1px solid #b8d0d6; border-right:1px solid #b8d0d6;  border-bottom:1px solid #b8d0d6; margin-bottom:15px;  margin-left:15px; height:220px;}
.index_c{ background:#eaf1f2; border-top:1px solid #b8d0d6; border-bottom:1px solid #b8d0d6; height:25px;}
	.index_c h1{ font-size:14px; padding-left:5px; padding-top:6px; width:83%;}
	.index_c img{ margin-top:-1px;}
	.index_c p{ width:55px;}
	.index_c li{ line-height:20px;}
	.index_c ul{ margin-left:5px;}
	.index_c span{ font-size:14px; padding-right:5px; font-weight:bold;}
.r_title h4{ font-weight:100;}
.r_title span{ color:#1d50a1;}
.r_weather{ margin-top:5px;}
.r_weather ul{ border:1px dashed #b8d0d6; height:30px; padding-top:3px;}
.cl img{ margin-top:-5px;}
#tododiv1{height:190px;width:100%;}
.dhx_year_body table tr{ height:auto;}

.lcan{ background:url(__PUBLIC__/Images/index/lcan.gif) no-repeat; width:231px; height:38px; margin:0 auto; text-align:center;}
.lcan a{ line-height:30px; text-decoration:none;}
.lcjt{ background:url(__PUBLIC__/Images/index/lcjt.gif) no-repeat; width:27px; height:45px; margin:0 auto;}
</style>

<script>
initLayout();
var sysTimeout = null;
// 工作台更变
function workbenchChange($id){
	if(sysTimeout) clearTimeout(sysTimeout);
	$("#xywrap").loadUrl("__URL__/lookupuserindex/workbench/"+$id);
}
$(function(){
	$('#xyToolbar').bind('click', function(e){
		if($(e.target).is('a') || $(e.target).parent().is('a')){
			e.preventDefault();
			$(this).find('li').removeClass('active');
			$(e.target).closest('li').addClass('active');
		}
	});
});
function navToPanel(id){
	if(sysTimeout) clearTimeout(sysTimeout);
	$("#xywrap").loadUrl("__APP__/DesingForm/autoPanelShow/navid/"+id);
}
</script>
<div id="new_index">
    <div id="chart">
		<div class="xymenu" id="xymenu">
			<div class="xypt clearfix">
				<div class="xytoolbar" id="xyToolbar">
					<ul class="clearfix tml_myNav">
						<!--TEMPLATE_NAV_START--><?php if(getSesstionContion(59)): ?><li><a class="" href="" onclick="navToPanel(59);"><span class="ui-select my-destop"></span></a><span>个人主页</span></li><?php endif; ?><!--TEMPLATE_NAV_END-->
					</ul>
				</div>
			</div> 
			
			 
			 <div class="xypc" layouth="48" id="xywrap">
			<!--TEMPLATE_CONTENT_START--><li class="left panel_group_lay panel_6" title="待办工作统计" style="height:280px;<?php echo A('UserOftenMenu')->getConfig();?>"><div class="title"><span>待办工作统计</span></div><div class="desing_content"><?php echo A('UserOftenMenu')->lookupworkinfo();?></div></li><li class="left panel_group_lay panel_6" title="提醒中心" style="height:280px;<?php echo A('MisSystemRemind')->getConfig();?>"><div class="title"><span>提醒中心</span></div><div class="desing_content"><?php echo A('MisSystemRemind')->lookupmyRemindDis();?></div></li><li class="left panel_group_lay panel_12" title="常用" style="height:150px;<?php echo A('UserOftenMenu')->getConfig();?>"><div class="title"><span>常用</span></div><div class="desing_content"><?php echo A('UserOftenMenu')->getOftenList();?></div></li><!--TEMPLATE_CONTENT_END-->
			</div> 
			<div class="xypb">
			</div>
		</div><!-- end xymenu -->
    </div>
    <div id="s_left" style="display:none;">
        <?php if(is_array($aryapps)): $i = 0; $__LIST__ = $aryapps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$app): $mod = ($i % 2 );++$i;?><div class="index_l">
				<div class="index_c">
					<h1 class=""><?php echo ($app['appname']); ?></h1>
                    <div class="clear"></div>
                </div>
				<div class="modules_content index_z" url="<?php echo ($app['apppath']); ?>"></div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="site_map_lay">
        <div class="site_map_warp">
            <div class="map_searcher">
                <input class="add_map_name left"  type="text" placeholder="请输入您要查找的内容" name="" id="navikeyinput">
                <a href="#naviselect" id="naviselecta" onclick="navikeyfind();"><button class="map_search_btn icon-search right " type="button"></button></a>
            </div>
            <div class="map_header">
                <div class="map_header_title">系统导航</div>
            </div>
            <div class="map_content">
                <ul class="map_con_ul">
                <?php if(is_array($navilist)): $i = 0; $__LIST__ = $navilist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="big_kind_lay left"><a class="big_kind" href="#"><?php echo ($vo["name"]); ?></a></div>
                        <div class="cell_kind_lay right">
                            <?php if(is_array($vo['_child'])): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><dl class="cell_kind">
                                <dt>【<?php echo ($v1["title"]); ?>】</dt>
                                <?php if(is_array($v1['_child'])): $i = 0; $__LIST__ = $v1['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><dd><a href="javascript:void(0);" dhref="__APP__/<?php echo ($v2["name"]); ?>/index" rel="<?php echo ($v2["name"]); ?>" title="<?php echo ($v2["title"]); ?>" class="navilist1" onclick="jumpToIndex1(this);" id="<?php echo ($v2["id"]); ?>"><?php echo ($v2["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>                         
                        </div>
                        <div class="clear"></div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
	<div id="footer">
        <button class="animation_elm">
            <span class="icon-medkit"></span> 反馈错误
        </button>
        Copyright &copy; 2014-2017 <?php echo C('COPYRIGHT');?>
		<a style="color:royalblue; display:block;" class="remindaspan remind_centrality" target="navTab" title="反馈问题" rel="MisSystemDataRemindMas" href="__APP__/MisAutoHqw/index">反馈问题</a>

		<a class="right site_map" href="#">
            <span class="icon-map-marker map_icon"></span>
            <span class="map_name">系统导航</span>
        </a>
    </div>
	<!-- 打印插件 -->		
		<object id="LODOP_OB" classid="clsid:2105C259-1E0C-4534-8141-A753534CB4CA" width=0 height=0>
			<embed id="LODOP_EM" type="application/x-print-lodop" width=0 height=0 pluginspage="__TMPL__/Lodop/install_lodop.exe"></embed>
		</object>
<!-- footpanel -->
	<!-- 菜单分组 -->
	<div class="xystartmenu" id="xystartmenu">
		<div class="xystartmenu_title">
		</div>
		<div class="xystartmenu_con clearfix">
			<div class="xystartmenu_main">
				<?php echo ($pannels); ?>
			</div>
			<div class="xystartmenu_sub"></div>
		</div>
	</div><!-- end of xystartmenu_con -->
<div class="xystartmenu_shadow" id="xyStartMenuShadow"></div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<style>
.map_searching {
    background:background: none repeat scroll 0 0 red;
}
</style>
<!-- 系统导航js -->
<script type="text/javascript">
//回车模拟a标签点击效果
$(function(){
	$('#navikeyinput').keydown(function(e){
		if(e.keyCode==13){
			navikeyfind();
		}		
		});
	
});

$(function(){
	var account= $.cookie('test');
	if(account!='123'){
		//userAlert();
	}
})
var map_searching_index = -1;

function navikeyfind() {
    var value = $.trim($("#navikeyinput").val());// 取得关键字
    if (value === "") return; // 如果关键字为空则直接返回
    // 判断当前树和检索关键字是否相同
    var list = $("ul").find(".navilist1");
	list.attr("name","");
	var frist_num = 0;
	var find_obj = $(".map_con_ul li a.find_this");
	var select_obj = $(".map_con_ul li a.select");
	if(find_obj.length==select_obj.length){
		map_searching_index = -1;
		list.removeClass("find_this");
		
	}
	list.removeClass("map_searching");
    $.each(list,function(i){
    	$(this).removeClass('select');
    	$(this).attr("name","");
    	if($(this).text().indexOf(value)>-1){
    		$(this).addClass('select');
			if(map_searching_index==-1 || (frist_num ==0 && i > map_searching_index)){
				map_searching_index = i;
				frist_num = map_searching_index;
				$(this).attr("name","naviselect");
	    		$(this).addClass("find_this");
			}
    	}
    });
    if(map_searching_index!=-1){
    	list.eq(map_searching_index).addClass("map_searching");
    }
    
    window.location.href=$('#naviselecta').attr('href');
}

$("#navikeyinput").change(function(){
	map_searching_index = -1;
	$("ul").find(".navilist1").removeClass("find_this");
});

function jumpToIndex1($obj){
	// 站点地图
    $("a.site_map").click();
	var $this = $($obj);
	var title=$this.attr("title")||$this.text();
	var tabid=$this.attr("rel")||"_blank";
	var fresh=eval($this.attr("fresh")||"true");
	var external=eval($this.attr("external")||"false");
	var url=unescape($this.attr("dhref"));
	DWZ.debug(url);
	if(!url.isFinishedTm()){
	alertMsg.error($this.attr("warn")||DWZ.msg("alertSelectMsg"));
	return false;}
	navTab.openTab(tabid,url,{title:title,fresh:fresh,external:external});
}
</script>
<!-- 系统导航js结束  -->
<script type="text/javascript">
;(function($, xy){
	var $this = $('#xystartmenu');
	var $trigger = $('#xyStartMenuTrigger');
	var $shadow = $('#xyStartMenuShadow');
	var main = $this.find('.xystartmenu_main');
	var $li = main.find('li');
	var mainLi = main.children('ul').children('li');
	var mainLiLength = mainLi.length;
	var use = $this.find('.xystartmenu_sub');
	var subLi = use.find('li');
	var subLiLength = subLi.length;
	var $ul = null;
	var timer = null;
	var i = 0;
	var w = 182 * Math.ceil(mainLiLength / 12);
	w = w + 158 * Math.ceil(subLiLength / 11) + 'px';
	$this.width(w);
	$shadow.width(w);
	
	$trigger.bind('click', function(e){
		e.preventDefault();
		e.stopPropagation();
		$this.show();
		$shadow.show();
	});
	
	$li.bind('mouseenter', function(){
		var $this = $(this);
		$this.addClass('hov');
		var pxy = $this.offset();
		var oUl = $this.children('ul');
		xy.startMenuPosition(oUl, pxy);
		$(this).children('ul').show();
	}).bind('mouseleave', function(){
		$(this).removeClass('hov');
		$(this).children('ul').hide();
	}).bind('click', function(){
		$this.find('.xystartmenu_s_ul').hide().end().hide();
		$shadow.hide();
	});
	
	$(document).bind('click', function(e){
		var $target = $(e.target);
		$this.hide();
		$shadow.hide();
	});
	
	subLi.bind('click', function(){
		$this.hide();
		$shadow.hide();
	});
/*	
	while(mainLiLength > 12){
		$Ul = $('<ul></ul>');
		for(i = 12; i < mainLiLength; i++){
			$Ul.append(mainLi[i]);
		}
		main.append($Ul);
		mainLiLength = $Ul.children('li').length;
	}
*/	
	if(subLiLength == 0){
		use.hide();
	}
	
	while(subLiLength > 11){
		$Ul = $('<ul></ul>');
		for(i = 11; i < subLiLength; i++){
			$Ul.append(subLi[i]);
		}
		use.append($Ul);
		subLiLength = $Ul.find('li').length;
	}
	
	$shadow.height($this.height());
	
	$this.bind('click', function(e){
		e.stopPropagation();
	});
	
	$ul = null;
	
	$('#messages, #messageInfo').bind('mouseenter', function(e){
		clearTimeout(timer);
		$('#messageInfo').show();
	}).bind('mouseleave', function(e){
		timer = setTimeout(function(){
			$('#messageInfo').hide();
		}, 500);
	});
})(jQuery, xy);
/* 添加模块可拖动 */
$("#partList").dragsort({ dragSelector: "li .part_title", dragBetween: true, dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });
function saveOrder(){
	var panelindex = "0";
	$("#partList").find("input[name='panelsort[]']").each(function(){
		panelindex += ","+$(this).val();
	});
	if (panelindex == "0") {
		return false;
	}
	$.ajax({
		type:"POST",
		url: TP_APP+"/MisSystemPanelMethod/savepanelsort",
		data:{panelindex:panelindex},
		async:true,
		global:false
	});
	return false;
}
var wsdata='<?php echo ($wsdata); ?>';
</script>
</body>
<script src="__PUBLIC__/Js/wssend.js" type="text/javascript"></script> 
</html>