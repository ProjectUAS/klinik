$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_web';
$connect = mysql_connect($host, $user, $pass) or die (mysql_error());
$dbselect = mysql_select_db($dbname);

class tes extends PHPUnit_Framework_TestCase{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM tbl_login where username ='admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['password'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM tbl_login where password ='admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
}