$(document).ready(function(){
	//点击修改出现修改框
	$(".modify").click(function(){
		$("#edit").css("display","block");
		//获取当前点击修改的学号
		var id=$(this).parent().siblings().eq(1).html();
		var uname=$(this).parent().siblings().eq(2).html();
		var sex=$(this).parent().siblings().eq(3).html();
		var age=$(this).parent().siblings().eq(4).html();
		$("#e_id").val(id);
		$("#e_uname").val(uname);
		$("#e_sex").val(sex);
		$("#e_age").val(age);
	});
	
	
	//确认修改学生信息
	$("#edit_ok").click(function(){
		var id=$("#e_id").val();;
		var uname=$("#e_uname").val();
		var sex=$("#e_sex").val();
		var age=$("#e_age").val();
		
		var xmlHttp=new XMLHttpRequest();
		xmlHttp.open("POST",app+'/Student/updateStudent');
		xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttp.send("id="+id+"&name="+uname+"&sex="+sex+"&age="+age);
		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState==4){
				window.location.href=app+'/Student/showStudent';				
			}
		}
		$("#edit").css("display","none");
		
	});
	
	
	//取消修改
	$("#cancel").click(function(){
		$("#edit").css("display","none");
		}
	);
	//删除学生
	$(".deleteStudent").click(function(){
		var id=$(this).parent().siblings().eq(1).html();
		window.location.href=app+'/Student/delteStudent?id='+id;
	});
	
});
