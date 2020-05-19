<?php
$loader = require __DIR__.'/../../../vendor/autoload.php';
$loader->add('common', __DIR__.'/../../../src');

use common\BigCalc\BigCalc;
use common\MysqlCon\MysqlCon;

$calc = new BigCalc(file_get_contents('php://input'));
$calc = $calc->loadResult();
echo json_encode($calc);
$mysqlCon = new MysqlCon(__DIR__.'/../../../cfg/dbcfg.ini');
$query = "SELECT COUNT(*) FROM quotes";
$result = $mysqlCon->query($query);
$row = $result->fetch_array();
$nId = $row[0] + 1;
$result->close();
$query = "INSERT INTO quotes VALUES('"
    .$nId.
    "',"."'"
    .$calc['fio'].
    "',"."'"
    .$calc['tel'].
    "')";
$result = $mysqlCon->query($query);
$query = "INSERT INTO itog VALUES('"
    .$nId.
    "',"."'"
    .$calc['allPlat'].
    "',"."'"
    .$calc['allProc'].
    "',"."'"
    .$calc['allSum'].
    "',"."'"
    .$calc['lastDate'].
    "')";
$result = $mysqlCon->query($query);
for ($i=1; $i<=$calc['count']; $i++) {
    $nDate = DateTime::createFromFormat('d.m.y', $calc[$i]['date']);
    $query = "INSERT INTO plat (clid, date, plat, pogProc, pogCred, ost ) VALUES('"
        .$nId.
        "',"."'"
        .$nDate->format('Y-m-d').
        "',"."'"
        .$calc[$i]['plat'].
        "',"."'"
        .$calc[$i]['pogproc'].
        "',"."'"
        .$calc[$i]['pogcred'].
        "',"."'"
        .$calc[$i]['ost'].
        "')";
    $result = $mysqlCon->query($query);
}
$result->close;
$mysqlCon->close();
