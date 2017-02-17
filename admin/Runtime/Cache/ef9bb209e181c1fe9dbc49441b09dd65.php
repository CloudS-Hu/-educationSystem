<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/CSS/demo-menu-if.css">
		<script src="__PUBLIC__/JS/zepto.min.js"></script>
		<style type="text/css">
		</style>
	</head>
	<body>
    <div class="ZMenu-left">
      <div class="ZMenu-left-label" id="testlabel" style="top: 16px;"></div>
      <ul class="ZMenu-left-nav">
        <li class="ZMenu-left-nav-item" data-number="1">
          <a class="ZMenu-left-nav-a item up" id="title" href="#">
            <img class="item-icon" src="__PUBLIC__/Image/Student.png" width="25px" height="25px">
            <span>学生信息查询</span>
          </a>
          <ul class="child-item-nav" style="display:none">
            <li class="ZMenu-left-nav-item">
              <a href="__APP__/Student/showStudent" target="11" class="ZMenu-left-nav-a 1">查看学生信息</a>
            </li>
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 1" href="__APP__/Student/addStudent" target="11">添加学生信息</a>
            </li>
          </ul>
        </li>
        <li class="ZMenu-left-nav-item" data-number="2">
          <a class="ZMenu-left-nav-a item up" id="title" href="#">
            <img class="item-icon" src="__PUBLIC__/Image/achievement.png" width="25px" height="25px">
            <span>学生成绩查询</span>
          </a>
          <ul class="child-item-nav" style="display:none">
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 2" href="__APP__/Score/showScore" target="11">查看学生成绩</a>
            </li>
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 2" href="__APP__/Score/addScore" target="11">更改学生成绩</a>
            </li>

          </ul>
        </li>
        <li class="ZMenu-left-nav-item" data-number="3">
          <a class="ZMenu-left-nav-a item up" id="title" href="#">
            <img class="item-icon" src="__PUBLIC__/Image/book.png" width="25px" height="25px">
            <span>学生课程查询</span>
          </a>
          <ul class="child-item-nav" style="display:none">
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 3" href="#">查看学生课程</a>
            </li>
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 3" href="#">更改学生课程</a>
            </li>
            <li class="ZMenu-left-nav-item">
              <a class="ZMenu-left-nav-a 3" href="#">删除学生课程</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>

		  <script type="text/javascript">
		  </script>
		  <script src="__PUBLIC__/JS/ZMenu.js"></script>
	</body>
</html>