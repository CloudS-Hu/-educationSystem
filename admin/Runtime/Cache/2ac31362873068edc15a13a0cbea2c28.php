<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div>
		<table border="1" style="width: 600px;text-align: center;height: 100px;">
			<tr>
				<td>选择</td>
				<td>学号</td>
				<td>姓名</td>
				<td>性别</td>
				<td>年龄</td>
				<td>操作</td>
			</tr>
		<?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td>
					<input type="checkbox" />
				</td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["uname"]); ?></td>
				<td><?php echo ($vo["sex"]); ?></td>
				<td><?php echo ($vo["age"]); ?></td>
				<td>
			<button id="xiugai">修改</button>
			<button>删除</button></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table>
		
		</div>
	</body>
</html>