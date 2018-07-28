<?php //require_once('../integrating.class.php'); 
require_once('../integratingPdo.class.php');
$obj=new db;

#$res=$obj->getAll('SELECT * FROM cz_sip_doma WHERE 1');

$res1=$obj->getOne('SELECT * from cz_sip_doma WHERE id="1"');

#$test1=$obj->execute('UPDATE cz_sip_doma SET UURL="it" WHERE id="1" ');

var_dump($res1);die();
//valid


?>