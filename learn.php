<!DOCTYPE html>
<html>
<head>
	<title>php test</title>
</head>
<body>

<p>this is a php test</p>
<?php
	$str="hello world";
	echo $str;

	$int_a=5;
	testFun();

	function testFun()
	{
		global $int_a;
		$int_b=$int_a;
		echo $int_b,PHP_EOL;

		$int_a=3;
	}

	echo $int_a,PHP_EOL;

	/*
	 * 组合比较符 a<==>b
	 * a>b 返回1
	 * a<b 返回-1
	 * a==b 返回0
	 */
	echo "a" <=> 1;

	switch ($int_a) {
		case '1':
			echo "int_a == 1";
			break;
		
		default:
			echo "int_a == ".$int_a;
			break;
	}

	echo "<br>";

	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	foreach ($age as $name => $people_age) {
		echo $name." age is ".$people_age."<br>";
	}

	/*
	 数组排序
	 sort() - 对数组进行升序排列
	 rsort() - 对数组进行降序排列
 	 asort() - 根据关联数组的值，对数组进行升序排列
	 ksort() - 根据关联数组的键，对数组进行升序排列
	 arsort() - 根据关联数组的值，对数组进行降序排列
	 krsort() - 根据关联数组的键，对数组进行降序排列
	 */
?>

<?php 
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>

</body>
</html>