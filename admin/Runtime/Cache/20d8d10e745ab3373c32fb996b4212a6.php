<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="__PUBLIC__/CSS/student.css" />
<script type="text/javascript" src="__PUBLIC__/JS/jquery-2.1.0.js" ></script>
<script type="text/javascript">
	var app="__APP__";	
</script>
<script src="__PUBLIC__/JS/studen.js"></script>

		<div>
			<form action="__URL__/showMoStudent" method="post">
			<input  type="text" placeholder="请输入学号" name="sno" />
			
			<input value="搜索" type="submit"/>
			<button id="xiugai">修改</button>
			<button>删除</button>
			</form>
			
		</div>
		<div>
		<table border="1" style="width: 600px;text-align: center;height: 300px;">
			<tr>
				<td>选择</td>
				<td>学号</td>
				<td>姓名</td>
				<td>性别</td>
				<td>年龄</td>
				<td>操作</td>
			</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td>
					<input type="checkbox" />
				</td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["uname"]); ?></td>
				<td><?php echo ($vo["sex"]); ?></td>
				<td><?php echo ($vo["age"]); ?></td>
				<td>
					<button class="modify" >修改</button>
					<button class="deleteStudent">删除</button>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table>
		</div>
		
		
		<div id="edit">
			<li id="edit_title">
				<span>修改学生信息</span>
			</li>
			<ul id="e_ul">
				<li>
					<span class="e_title" >学号</span>
					<input type="text" id="e_id" disabled="true" value="" />
				</li>
				<li>
					<span class="e_title" >姓名</span>
					<input type="text" id="e_uname"  placeholder="姓名" />
				</li>
				<li>
					<span class="e_title" >性别</span>
					<input type="text" id="e_sex" placeholder="性别" />
				</li>
				<li>
					<span class="e_title" >年龄</span>
					<input type="text" id="e_age" placeholder="年龄" />
				</li>
				<li>
					<input type="submit" value="修改完成" id="edit_ok" />
					<input type="submit" value="取消" id="cancel" />
				</li>
			</ul>
		</div>