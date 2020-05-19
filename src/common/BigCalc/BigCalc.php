<?php
namespace common\BigCalc;

class BigCalc
{
    public $json;

    public function __construct($json_in)
    {
        $this ->json = json_decode($json_in, true);
    }
    public function bigCalculate()
    {
        $myJson = $this->json;
        $sum = $myJson['sum'];
        $term = $myJson['term'];
        $proc = $myJson['proc'];
        $arr['fio'] = $myJson['fio'];
        $arr['tel'] = $myJson['tel'];
        $mTerm = $term * 12;
        $procSt = $proc / (100 * 12);
        $a = pow($procSt+1, $mTerm) -1;
        $f = $procSt + $procSt / $a ;
        $plat = $sum * $f;
        $arr['allPlat'] = $plat * $mTerm;
        $arr['allProc'] = $arr['allPlat'] - $sum;
        $arr['allSum'] = $sum;
        $arr['lastDate'] = date('Y-m-d', strtotime("+$term year"));
        $ost = $sum;
        $yearVal = 0;
        $itPogProc = 0;
        $itPogCred = 0;
        for ($i=1; $i<=$mTerm; $i++) {
            $arr[$i]['date'] = date('d.m.y', strtotime("+$i month"));
            $arr[$i]['plat'] = round($plat, 2);
            $pogProc = $ost * $procSt;
            $itPogProc += $pogProc;
            $arr[$i]['pogproc'] = round($pogProc, 2);
            $pogCred = $plat - $pogProc;
            $itPogCred += $pogCred;
            $arr[$i]['pogcred'] = round($pogCred, 2);
            $ost = $ost - $pogCred;
            $arr[$i]['ost'] = round($ost, 2);
            $arr['count'] = $i;
            if ($i % 12 == 0) {
                $yearVal++;
                $arr['itogplat'][$yearVal] = round($plat*$i, 2);
                $arr['itpogproc'][$yearVal] = round($itPogProc, 2);
                $arr['itpogcred'][$yearVal] = round($itPogCred, 2);
            }
        }
        return($arr);
    }
    public function loadResult()
    {
        return($this->bigCalculate());
    }
}
