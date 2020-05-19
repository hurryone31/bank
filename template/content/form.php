<ul>
    <li>
        <h2>Оставить заявку</h2>
        <span id = "content1">* - Поля обязательные для заполнения</span>
    </li>
    <li>
        <label for="loansum">Сумма кредита</label>
        <input type="number" name="loansum" id ="1" />
    </li>
    <li>
        <label for="loanterm">Срок</label>
        <input type="number" name="loanterm" id ="2" />
    </li>
    <li>
        <label for="percent">Процентная ставка</label>
        <input type="number" name="percent" id="3" />
    </li>
    <li>
        <label for="name">Фио *</label>
        <input type="text" name="name" id="4" />
    </li>
    <li>
        <label for="telnum">Номер телефонаа</label>
        <input type="tel" name="telnum" id ="5"/>
    </li>
</ul>
<div class="form2">
<ul>
    <li>
        <h2>Результаты расчета</h2>
    </li>
    <li>
        <label for="name">Ежемесячный платёж</label>
        <span id="plat">0.00</span>
    </li>
    <li>
        <label for="name">Сумма процентов</label>
        <span id="sumproc">0.00</span>
    </li>
    <li>
        <label for="name">Дата последнего платежа</label>
        <span id="lastdate"></span>
    </li>
    <li>
        <div class="sendbtn">
            <button class="submit" type="submit" id="loadbtn">Отправить заявку</button>
        </div>
    </li>
</ul>
</div>
    <script type="module" src="src/scripts/load.js?v=<?php echo filectime('src/scripts/load.js'); ?>"></script>