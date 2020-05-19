<?php
$myJson = json_decode(file_get_contents('php://input'), true);
?>
<div class="scontainer">
    <span>Заявка</span>
</div>
<div class="scontainer">
        <span id="mailFio">Фио:<?php echo $myJson['fio']; ?></span>
    </div>
<div class="scontainer">
        <span id="mailTel">Телефон:<?php echo $myJson['tel']; ?></span>
    </div>
<div class="scontainer">
        <span id="mailSum">Сумма кредита:<?php echo $myJson['sum']; ?></span>
    </div>
<div class="scontainer">
        <span id="mailTerm">Срок кредитования:<?php echo $myJson['term']; ?></span>
    </div>
<div class="scontainer">
<span id="mailProc">Процентная ставка:<?php echo $myJson['allProc']; ?></span>
</div>
<div class="scontainer">
        <span id="mailPlat">Ежемесячный платеж:<?php echo $myJson['allPlat']; ?></span>
    </div>
<div class="scontainer">
        <span id="mailProcSum">Сумма процентов:<?php echo $myJson['allSum']; ?></span>
    </div>
<div class="scontainer">
        <span id="mailLastDate">Дата последнего платежа:<?php echo $myJson['lastDate']; ?></span>
</div>
<table border="1">
    <tr>
        <th>Дата</th>
        <th>Ежемесячный платеж, руб.</th>
        <th>Погашение процентов, руб.</th>
        <th>Погашение кредита, руб</th>
        <th>Остаток, руб.</th>
    </tr>
<?php
function tdGenerate($input)
{
    echo "<td>$input</td>";
}
function rowGenerate($row)
{
    echo '<tr>';
    tdGenerate($row['date']);
    tdGenerate($row['plat']);
    tdGenerate($row['pogproc']);
    tdGenerate($row['pogcred']);
    tdGenerate($row['ost']);
    echo '</tr>';
}
for ($i = 1; $i <= $myJson['count']; $i++) {
        rowGenerate($myJson[$i]);
}
?>

</table>