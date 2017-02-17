<?php 
	class ScoreModel extends Model{
		
		//查询所有学生成绩
		function getAllScore(){
			return D('Score')->query('select sc.*,s.uname from jw_score sc,jw_student s where s.id=sc.uid');
		}
		
		//查询某个学生的成绩
		function getScore($uid){
			return D('Score')->query('select * from jw_score where uid='.$uid);
		}
		
		//插入学生成绩
		function insertScore(){
			return D('Score')->query("insert into jw_score(cno,uid,score) values('$cno','$uid','$score')");
		}
		
		//删除学生某门课程成绩
		function deleteScore($sid){
			return D('Score')->query("delete from jw_score where id='$sid'");
		}
		
		//删除学生所有成绩
		function delAllScore($uid){
			return D('Score')->query("delete from jw_score where uid='$uid'");
		}
		
		//修改学生成绩
		function updateScore($sno,$score){
			return D('Score')->query("update jw_score set score='$score' where id='$sno'");
		}
	}
?>