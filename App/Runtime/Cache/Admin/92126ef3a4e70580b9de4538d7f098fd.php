<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 	<link rel="stylesheet" href="/thinkphp/Public/admin/Css/public.css" />
 	<title>admin</title>
 	<script type="text/javascript">
 		window.UMEDITOR_HOME_URL = '/thinkphp/umeditor/';
 		window.onload = function (){
        //	window.UMEDITOR_CONFIG.imagePath:URL + "php/";
 			UM.getEditor('content');
 		}
 	</script>
     <link href="/thinkphp/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/thinkphp/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/thinkphp/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/thinkphp/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/thinkphp/umeditor/lang/zh-cn/zh-cn.js"></script>
 	
</head>
 <body>
 	<form action="<?php echo U('Admin/Blog/runAddBlog');?>" method="post">
 		<table class="table">
 			<tr>
 				<th colspan="2">博文发布</th>
 			</tr>
 			<tr>
 				<td align="right">所属分类:</td>
 				<td>
 					<select name='cid'>
 						<option value="">请选择分类</option>
 						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td align="right">博文属性:</td>
 				<td>
					<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style="marin-right: 10px;">
							<input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>"/>
							&nbsp;<?php echo ($v["name"]); ?> <!-- <div style="width:20px;height:20px;background:<?php echo ($v["color"]); ?>;dispaly:inline;"></div> -->
						</label><?php endforeach; endif; ?>
 				</td>
 			</tr>
 			<tr>
 				<td align="right">点击次数:</td>
 				<td>
 					<input type="text" name="click"/>
 				</td>
 			</tr>
 			<tr>
 				<td align="right">标题:</td>
 				<td>
 					<input type="text" name="title"/>
 				</td>
 			</tr>
 			<tr>
 				<td align="right">摘要:</td>
 				<td>
 					<input type="text" name="summary"/>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 				<textarea name="content" id="content" style="width:90%;margin:auto;"></textarea>
 				</td>
 			</tr>

 		</tr>
 		<tr>
 			<td colspan="2" align="center">
 				<!-- <input type="hidden" name="pid" value="<?php echo ($pid); ?>"> -->
 				<input type="submit" value="保存添加" />
 			</td>
 		</tr>

 	</table>
 </form>
</body>
<script type="text/javascript">
//	var um = UM.getEditor('content');
//	var editor = new UM.ui.Editor();
//	editor.render('content');
</script>
</html>