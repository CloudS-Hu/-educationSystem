$(document).ready(function(){
	//点击修改出现修改框
	$(".modify").click(function(){
		$("#edit").css("display","block");
		//获取当前点击修改的学号
		var id=$(this).parent().siblings().eq(0).html();
		var uname=$(this).parent().siblings().eq(1).html();
		var course=$(this).parent().siblings().eq(2).html();
		var score=$(this).parent().siblings().eq(3).html();
		$("#e_id").val(id);
		$("#e_uname").val(uname);
		$("#e_course").val(course);
		$("#e_score").val(score);
	});
	
	
	//确认修改学生成绩
	$("#edit_ok").click(function(){
		var id=$("#e_id").val();
		var score=$("#e_score").val();
		
		var xmlHttp=new XMLHttpRequest();
		xmlHttp.open("POST",app+'/Score/updateScore');
		xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttp.send("id="+id+"&score="+score);
		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState==4){
//				alert(xmlHttp.responseText);
				window.location.href=app+'/Score/showScore';				
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
	$(".deleteScore").click(function(){
		var id=$(this).parent().siblings().eq(0).html();
		window.location.href=app+'/Score/delteScore?id='+id;
	});
	
});