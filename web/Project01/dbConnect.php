<?php
function get_db() {
	$db = NULL;

	try {
		// default Heroku Postgres configuration URL
		$dbUrl = getenv('DATABASE_URL');

		// if (!isset($dbUrl) || empty($dbUrl)) {
		// 	$dbUrl = "postgres://tczslyjguuugfd:d002dfd294a725069c5384783b41937d9e4ca2df67c63b1d4650e21bf6ea3ce8@ec2-3-231-241-17.compute-1.amazonaws.com:5432/dadbrpbrosik1k";
		// }

		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);

		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');

		// Create the PDO connection
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex)
    {
    echo 'Error!: ' . $ex->getMessage();
    die();
    }

	return $db;
}
?>
