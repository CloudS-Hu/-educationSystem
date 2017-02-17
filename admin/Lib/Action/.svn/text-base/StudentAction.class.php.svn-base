<?php 
	class StudentAction extends action{
		function showStudent(){

			$Student=D('Student');
			$list=$Student->select();
			$this->assign('list',$list);
			$this->display();

		}
//		查询某一个
		function showMoStudent(){
			$sno=$_POST['sno'];
			$Student=D('Student');
			$list1=$Student->getStudetInfo($sno);
			$this->assign('list1',$list1);
			$this->display();
		}
//		添加学生信息
		function addStudent(){
			$name=$_POST['name'];
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$Student=D('Student');
			$Student->insertStudent($name,$age,$sex);
			$list2=$Student->select();
			$this->assign('list2',$list2);
			$this->display();
		}
		
		//删除某个学生
		function delteStudent(){
			$uid=$_GET['id'];
			$Student=D('Student');
			$Score=D('Score');
			$Student->deleteStudent($uid);
			$Score->delAllScore($uid);
			$list=$Student->select();
			$this->assign('list',$list);
			$this->display('showStudent');
		}
		
		//修改学生信息
		function updateStudent(){
			$uid=$_POST['id'];
			$name=$_POST['name'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$Student=D('Student');
			$Student->updateStudent($uid,$name,$age,$sex);
		}
		
	}
?>