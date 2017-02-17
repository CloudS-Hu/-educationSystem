<?php
	class StudentModel extends Model{
		
		//查询某个学生信息
		function getStudetInfo($id){
			return D('Student')->query("select * from jw_student where id='$id'");
		}
		
		//删除学生信息
		function deleteStudent($uid){
			return D('Student')->query("delete from jw_student where id=$uid");
		}
		
		//添加学生信息
		function insertStudent($name,$age,$sex){
			return	D('Student')->query("insert into jw_student(uname,age,sex) values('$name',$age,'$sex')");
		}
		
		//更新学生信息
		function updateStudent($uid,$name,$age,$sex){
			return D('Student')->query("update jw_student set uname='$name',age='$age',sex='$sex' where id='$uid' ");
		}
	}
 ?>