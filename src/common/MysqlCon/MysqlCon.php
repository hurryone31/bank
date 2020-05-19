<?php


namespace Common\MysqlCon;

use mysqli;

class MysqlCon extends mysqli
{

    public function __construct(string $path)
    {
        $cfg = parse_ini_file($path);
        parent::__construct($cfg['route'], $cfg['user'], $cfg['pswd'], $cfg['db']);
        if (mysqli_connect_error()) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
    }
    public function close()
    {
        parent::close();
    }

}
