<!DOCTYPE html>
<html>
<head>
	<title>php test</title>
</head>
<body>

	<p>this is a php test</p>
	<?php
	class Site { 
		/* 成员变量 */ 
		var $url; 
		var $title; 

		function __construct( $par1, $par2 ) { // 构造函数
			$this->url = $par1;
			$this->title = $par2;
		}

		/* 成员函数 */ 
		function setUrl($par){ 
			$this->url = $par; 
		} 

		function getUrl(){ 
			echo $this->url . PHP_EOL; 
		} 

		function setTitle($par){ 
			$this->title = $par; 
		} 

		function getTitle(){ 
			echo $this->title . PHP_EOL; 
		} 

		function __destruct() { //析构函数
			print "销毁 " . $this->name . "\n";
		}
	} 

	$runoob = new Site('www.runoob.com', '菜鸟教程');
	$taobao = new Site('www.taobao.com', '淘宝');
	$google = new Site('www.google.com', 'Google 搜索');
	$baidu  = new Site('www.baidu.com', 'baidu 搜索');

// 调用成员函数，获取标题和URL 
	$runoob->getTitle(); 
	$taobao->getTitle(); 
	$google->getTitle(); 

	$runoob->getUrl(); 
	$taobao->getUrl(); 
	$google->getUrl();
	?>

	<?php 
// 子类扩展站点类别
	class Child_Site extends Site {
		var $category;

	 	function __construct( $par1, $par2, $spar3 ) {
			$this->url = $par1;
			$this->title = $par2;
			$this->category = $par3;
		}


		function setCate($par){
			$this->category = $par;
		}

		function getCate(){
			echo $this->category.PHP_EOL;
		}

	}
	$runoob = new Child_Site('www.runoob.com', '菜鸟教程', 'type');

	?>

</body>
</html>