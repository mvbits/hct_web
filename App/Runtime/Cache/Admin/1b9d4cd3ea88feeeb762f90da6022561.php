<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="/thinkphp/Public/admin/Css/public.css" />
	<title>admin</title>
</head>
<body>
	<form action="<?php echo U('Admin/Rbac/addRoleHandle');?>" method="post">
		<table class="table">
			<tr>
				<th colspan="2" align="center">添加角色</th>
			</tr>
			<tr>
				<td align="right">角色名称:</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td align="right">角色描述:</td>
				<td><input type="text" name="remark" /></td>
			</tr>
			<tr>
				<td align="right">是否开启:</td>
				<td><input type="radio" name="status" value='1'
					checked="checked" />开启 <input type="radio" name="status" value='0' />关闭</td>
			</tr>
			<tr>
				<td colspan='2' align="center"><input type="submit"
					name="submit" value="保存" /></td>
			</tr>
		</table>
	</form>
</body>
</html>