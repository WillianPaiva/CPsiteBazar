<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/web/CtrlListAteliers.php');
$test = new CtrlListAteliers('dbserver', 'acleret', 'azerty', 'acleret');

if ($test->checkConnection()) {
    die("Connection failed: " .$test->checkConnection());
}

echo 'hello1<br/> ';
echo $test->getListAteliers('ATELIER');
echo '<br/>';
echo $test->getTitreOrder('ATELIER');
echo '<br/>';
echo $test->getDateOrder('ATELIER');
echo '<br/>';
echo $test->getThemeOrder('ATELIER');
echo '<br/>hello5<br/>';
?>