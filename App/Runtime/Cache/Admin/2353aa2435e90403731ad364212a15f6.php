<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 	<link rel="stylesheet" href="/thinkphp/Public/admin/Css/public.css" />
 	<title>admin</title>
 </head>
 <body>
 <form action="<?php echo U('Admin/Attribute/runAddAttr');?>" method="post">
 		<table class="table">
 			<tr>
 				<th colspan="2">添加博文属性</th>

 			</tr>
 			<tr>
 				<td align="right">属性名称:</td>
 				<td>
 					<input type="text" name="name"/>
 				</td>
 			</tr>
 			<tr>
 				<td align="right">标题颜色:</td>
 				<td>
 					<input type="text" name="color">
 				</td>
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
 </html>