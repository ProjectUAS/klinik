<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("db_web") or die (mysql_error());

class tes extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM tbl_pasien where nama_pasien ='fiki'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['no_rm'];
		$content = $test_user;
		$this->assertEquals('R004',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM tbl_pasien where no_rm ='R004'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['nama_pasien'];
		$content = $test_user;
		$this->assertEquals('fiki',$content);
	}
}
?>