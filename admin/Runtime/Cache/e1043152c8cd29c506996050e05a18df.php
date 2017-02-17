<?php if (!defined('THINK_PATH')) exit();?>		<form action="__URL__/addStudent" method="post">
		姓名<input name="name"/>
		年龄<input name="age" />
		性别<input name="sex" />
		<input type="submit" value="添加"/>
		</form>
		<br />
		
		<table border="1" style="width: 600px;text-align: center;height: 100px;">
			<tr>
				<td>选择</td>
				<td>学号</td>
				<td>姓名</td>
				<td>性别</td>
				<td>年龄</td>
				
			</tr>
		<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td>
					<input type="checkbox" />
				</td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["uname"]); ?></td>
				<td><?php echo ($vo["sex"]); ?></td>
				<td><?php echo ($vo["age"]); ?></td>
				
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table>