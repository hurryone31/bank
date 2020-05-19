<?php

namespace common\SmallCalc;

class SmallCalc
{
    public $json;

    public function __construct($json_in)
    {
        $this ->json = json_decode($json_in, true);
    }
    public function smallCalculate()
    {
        $myJson = $this -> json;
        $sum = $myJson['sum'];
        $term = $myJson['term'];
        $proc = $myJson['proc'];
        $mTerm = $term * 12;
        $procSt = $proc / (100 * 12);
        $a = pow($procSt + 1, $mTerm) - 1;
        $f = $procSt + $procSt / $a;
        $plat =round($sum * $f, 2);
        $allProc =round(($plat * $mTerm - $sum), 2);
        $long = strtotime("+ 1 year");
        $lastDate = date('d.m.y', strtotime("+$term year"));
        return(array('plat' => $plat, 'sumproc' => $allProc, 'lastdate' => $lastDate));
    }
    public function loadResult()
    {
        echo json_encode($this->smallCalculate());
    }
}
