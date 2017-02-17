<?php 
	class ScoreAction extends action{
		//显示所有学生成绩
		function showScore(){
			$Score=D('Score');
			$list=$Score->getAllScore();
			$this->assign('list',$list);
			$this->display();
		}
		
		function addScore(){
			$this->display();
		}
		
		//删除某个学生某门课成绩
		function delteScore(){
			$sid=$_GET['id'];
			$Score=D('Score');
			$Score->deleteScore($sid);
			$list=$Score->getAllScore();
			$this->assign('list',$list);
			$this->display('showScore');
		}
		
		//修改某个学生某门课成绩
		function updateScore(){
			$sid=$_POST['id'];
			$score=$_POST['score'];
			$Score=D('Score');
			$Score->updateScore($sid,$score);
		}
	}
?>