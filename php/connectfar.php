<?php
	require_once('config.php');
	//Á¬¿â
	if(!($con = mysql_connect("qdm162984309.my3w.com", "qdm162984309","1365249622skhm"))){
		echo mysql_error();
	}
	//Ñ¡¿â
	if(!mysql_select_db('qdm162984309_db')){
		echo mysql_error();
	}
	//×Ö·û¼¯
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
?>