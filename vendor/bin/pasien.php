<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("db_web") or die (mysql_error());

class tes2 extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM tbl_pasien where nama_pasien ='Mariah Ulfah'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['no_rm'];
		$content = $test_user;
		$this->assertEquals('R006',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM tbl_pasien where no_rm ='R006'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['nama_pasien'];
		$content = $test_user;
		$this->assertEquals('Mariah Ulfah',$content);
	}
}
?>