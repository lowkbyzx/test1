<?php 
require 'api-coinmaster.php';
$class = new coinmaster;
popen('cls', 'w');
echo "COIN MASTER | By www.dark-shop.ml \n";
echo "------------------ [ Setting ] ------------------\n";
$link = readline("Link : ");
$count = readline("Total : ");
popen('cls', 'w');
echo "------------------ [ 0/".$count." ] ------------------\n";
$bossnz = preg_match_all('/~[^}]*?s=m/', $link, $a);
if ($bossnz == NULL) {
	$bossnz = preg_match_all('/~[^}]*/', $link, $a);
	$edit1 = str_replace('~', '', $a[0]);
	$edit2 = str_replace('', '', $edit1[0]);
	$code = $edit2;
}else{
	$edit1 = str_replace('~', '', $a[0]);
	$edit2 = str_replace('?s=m', '', $edit1[0]);
	$code = $edit2;
}
if (empty($code)) {
	echo "ERROR : TryAgain";
	exit();
}
for ($i=0; $i < $count; $i++) {
	$start = $class->addspin($link);
	$number = $i+1;
	popen('cls', 'w');
	echo "================= [ API BY www.dark-shop.ml ] =================\n";
	print_r("[ ".$number."/".$count." ] - Code : ".$code."\n");
}
?>