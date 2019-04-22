<?php
	echo "<br />Creating db now....";

   $dbhost="us-cdbr-iron-east-02.cleardb.net";
   $dbuser="b955f1346bbd64";
   $dbpass="ee5daa30";
   $dbname="heroku_8594579a78ced01";	

   $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   $db->setAttribute(PDO::MYSQL_ATTR_FOUND_ROWS, true);   

   try {
		$sql_create_dept_tbl = <<<EOSQL
			CREATE TABLE IF NOT EXISTS contacts (
			  id int(11) NOT NULL AUTO_INCREMENT,
			  name varchar(150) NOT NULL,
			  email varchar(250) NOT NULL,
			  mobileno varchar(15) NOT NULL,
			  photo varchar(150) NOT NULL DEFAULT 'default.png',
			  ownerlogin varchar(50) NOT NULL,
			  addeddate datetime NOT NULL,
			  status int(11) NOT NULL DEFAULT '0',
			  PRIMARY KEY (id)
			) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1
		EOSQL;   	

   }
   catch(PDOException $e) {
      $errorMessage = $e->getMessage();
      echo "<br />$errorMessage";
   }  

   echo "<br />table contacts created....";  

