<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
  <link href="./css/style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
    <div class="page-wrapper">
      <div style="display: flex; padding: 0px 0px 10px 0px;">
        <img src="/img/images.png" alt="World bank" style="height: 80px;"/>
        <div style="margin: auto 0;">
          <p style="margin: 0px; padding: 0px 0px 0px 8px;">
            WORLD BANK
          </p>
          <p style="margin: 0px; padding: 0px 0px 0px 8px;">
            Publications
          </p>
        </div>
        <span style="margin: auto;"></span>
        <div class="phone-label">
          <p>
            8-800-100-5005
          </p>
          <p>
            +7(3452) 522-000
          </p>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="#">Кредитные карты</a></li>
          <li><a id="contribution" href="#">Вклады</a></li>
          <li><a href="#">Дебетовая карта</a></li>
          <li><a href="#">Страхование</a></li>
          <li><a href="#">Друзья</a></li>
          <li><a href="#">Интернет-банк</a></li>
        </ul>
      </nav>
      <ul id="breadcrumbs" style="list-style: none;">
        <li><a href="#"><u>Главная</u></a></li>
        <li><a href="#"><u>Вклады</u></a></li>
        <li><a href="#"><u>Калькулятор</u></a></li>
      </ul>
      <div class="calculator">
        <h2 style="color: rgb(228, 104, 25); padding: 10px; margin: 0px 0px 0px 75px;">Калькулятор</h2>
        <table>
          <tr>
            <td>
              Дата оформления вклада
            </td>
            <td>
              <input id="datepicker" type="text"/>
            </td>
          </tr>
          <tr>
            <td>
              Сумма вклада
            </td>
            <td>
              <input id="sum_deposit_number" value="10000" min="1000" max="3000000" type="number"/>
            </td>
            <td>
              <input id="sum_deposit_range" min="1000" max="3000000" name="sum_deposit" type="range"/>
            </td>
          </tr>
          <tr>
            <td>
              Срок вклада
            </td>
            <td>
              <select id="years_deposit">
                <option value="1">1 год</option>
                <option value="2">2 год</option>
                <option value="3">3 год</option>
                <option value="4">4 год</option>
                <option value="5">5 год</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              Пополнение вклада
            </td>
            <td class="radio-button">
              <input id="refill_isFalse" type="radio" value="false" name="refill" checked/>
              <label>Нет</label>
              <input id="refill_isTrue" type="radio" value="true" name="refill"/>
              <label>Да</label>
            </td>
          </tr>
          <tr>
            <td>
              Сумма пополнения вклада
            </td>
            <td>
              <input id="sum_refill_number" value="10000" min="1000" max="3000000" name="sum_deposit_refill" type="number"/>
            </td>
            <td>
              <input id="sum_refill_range" min="1000" max="3000000" name="sum_deposit_refill" type="range"/>
            </td>
          </tr>
        </table>
        <div style="margin: 0px 0px 0px 25px; padding: 5px;">
          <button id="button-sum" onclick="postResult()" value="100">Рассчитать</button>
          <label style="margin: 0px 0px 0px 20px;">Результат:</label>
          <input id="result-sum" type="text" disabled value="" class="input-sum"/>
        </div>
      </div>
    </div>
    <div class="footer">
      <ul>
        <li><a href="#">Кредитные карты</a></li>
        <li><a href="#">Вклады</a></li>
        <li><a href="#">Дебетовая карта</a></li>
        <li><a href="#">Страхование</a></li>
        <li><a href="#">Друзья</a></li>
        <li><a href="#">Интернет-банк</a></li>
      </ul>
    </div>
  <script src="./js/app.js" type="text/javascript"></script>
</body>
</html>
