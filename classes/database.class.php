
<?php


class Database
{
	private static $_singleton;
	private $linkID;

	private function __construct($hostname, $username, $password, $database, $debug=False){
		$this->debug = $debug;
		$this->linkID = 0;
		$this->queryID = 0;
		$this->queryCount = 0;
		$this->errNo = 0;
		$this->errStr = '';

		//$this->_connection = mysql_connect();
		 if (! ($hostname and $username and $database))
            $this->halt('Missing parameters.');

		$this->linkID = mysql_connect($hostname, $username, $password);

		if (! $this->linkID)
            $this->halt('linkID == False. Connect failed.');

		if (! mysql_select_db($database, $this->linkID))
            $this->halt("Cannot use database '$database'.");

	}

	public static function getInstance($hostname, $username, $password, $database, $debug=False){
		if (is_null (self::$_singleton)) {
			self::$_singleton = new Database($hostname, $username, $password, $database, $debug=False);
		}
		return self::$_singleton;
	}

}

?>
