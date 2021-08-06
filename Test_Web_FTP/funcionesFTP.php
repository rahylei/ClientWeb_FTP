<?php
	
	$fileF;
	// coneccion a la base de datos
	function conectFTP(){
		/*
		$ftp_server = "189.141.106.34";
		$ftp_username = "Claudiadimitrecu";
		$ftp_userpass = "weboskeios";*/
		$ftp_server = "192.168.0.26";
		$ftp_username = "Julius";
		$ftp_userpass = "";
		$ftp_conn = ftp_connect($ftp_server, 21, 5) or die("<script> alert('Could not connect to server') <script>");

		$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
	}

	// connect and login to FTP server
	function tablaFTP(){

		/*conectFTP();
		$ftp_server = "189.141.106.34";
		$ftp_username = "Claudiadimitrecu";
		$ftp_userpass = "weboskeios";*/
		$ftp_server = "192.168.0.26";
		$ftp_username = "Julius";
		$ftp_userpass = "";

		$ftp_conn = ftp_connect($ftp_server, 21, 5) or die("<script> alert('Could not connect to server') <script>");

		$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
	

		$file_list = ftp_nlist($ftp_conn, "");

		return ($file_list);

		ftp_close($ftp_conn);

	}

	function descargarFile($file){

		/*
		$ftp_server = "189.141.106.34";
		$ftp_username = "Claudiadimitrecu";
		$ftp_userpass = "weboskeios";
		*/
		$ftp_server = "192.168.0.26";
		$ftp_username = "Julius";
		$ftp_userpass = "";
		$ftp_conn = ftp_connect($ftp_server, 21, 5) or die("<script> alert('Could not connect to server') <script>");

		$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);


		$local_file = $file;
		$server_file = $file;

		// download server file
		if (ftp_get($ftp_conn, $local_file, $server_file, FTP_ASCII))
		  {
		  echo "Successfully written to $local_file.";
		  }
		else
		  {
		  echo "Error downloading $server_file.";
		  }

		// close connection
		ftp_close($ftp_conn);

	}

	function saveFile($name){
		$fileF = $name;

	}

	function getFile(){
		return $fileF;
	}
?>


