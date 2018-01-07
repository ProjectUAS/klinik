<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("db_web") or die (mysql_error());

class tes extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM tbl_login where username ='admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['password'];
		$content = $test_user;
		$this->assertEquals('21232f297a57a5a743894a0e4a801fc3',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM tbl_login where password ='21232f297a57a5a743894a0e4a801fc3'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
}
?>