'use strict'
var refill_result = false;
function addEvent(selector, type, handler) {
  var el = document.querySelectorAll(selector);
  if (el) {
    for (var i = 0; i < el.length; i++) {
      if (el[i].attachEvent) el[i].attachEvent('on' + type, handler);
      else el[i].addEventListener(type, handler);
    }
  }
}

function runApp() {

  addEvent('#sum_deposit_number', 'change', function() {
    var a = document.getElementById('sum_deposit_number').value;
    var b = document.getElementById('sum_deposit_number');
    document.getElementById('sum_deposit_range').value = a;
    var val = (b.value - b.min) / (b.max - b.min);
    document.getElementById('sum_deposit_range').style.backgroundImage = '-webkit-gradient(linear, left top, right top, ' +
      'color-stop(' + val + ', #00d936),' +
      'color-stop(' + val + ', #000000)' +
      ')';
  });
  addEvent('#sum_deposit_range', 'change', function() {
    var a = document.getElementById('sum_deposit_range');
    var b = a.style;
    var c = a.value;
    var val = (a.value - a.min) / (a.max - a.min);
    document.getElementById('sum_deposit_number').value = c;
    b.backgroundImage = '-webkit-gradient(linear, left top, right top, ' +
      'color-stop(' + val + ', #00d936),' +
      'color-stop(' + val + ', #000000)' +
      ')';
  });

  addEvent('#sum_refill_number', 'change', function() {
    var a = document.getElementById('sum_refill_number').value;
    document.getElementById('sum_refill_range').value = a;
    var b = document.getElementById('sum_refill_number');
    var val = (b.value - b.min) / (b.max - b.min);
    document.getElementById('sum_refill_range').style.backgroundImage = '-webkit-gradient(linear, left top, right top, ' +
      'color-stop(' + val + ', #94A14E),' +
      'color-stop(' + val + ', #C5C5C5)' +
      ')';
  });
  addEvent('#sum_refill_range', 'change', function() {
    var a = document.getElementById('sum_refill_range');
    var b = a.style;
    var c = a.value;
    var val = (a.value - a.min) / (a.max - a.min);
    document.getElementById('sum_refill_number').value = c;
    b.backgroundImage = '-webkit-gradient(linear, left top, right top, ' +
      'color-stop(' + val + ', #94A14E), ' +
      'color-stop(' + val + ', #C5C5C5)' +
      ')';
  });
  addEvent('#refill_isTrue', 'click', function() {
    refill_result = true;
  });
  addEvent('#refill_isFalse', 'click', function() {
    refill_result = false;
  });
}

//отправляю POST запрос и получаю ответ
function postResult() {
  var xhr = new XMLHttpRequest();
  var a = $('#datepicker').datepicker('getDate');
  var b = document.getElementById('sum_deposit_number').value;
  var c = document.getElementById('years_deposit').value;
  var d = document.getElementById('sum_refill_number').value;
  var e = refill_result;
  if(a != null) {
    a.toLocaleString();
  }
  if(!e) {
    d = 0;
  }
  var data = 'date_deposit=' + a + '&sum_deposit=' + encodeURIComponent(b) + '&years_deposit=' + encodeURIComponent(c) + '&sum_refill=' + encodeURIComponent(d) + '&refill=' + encodeURIComponent(e);
  var str_json = JSON.stringify(data);
  console.log(data);
  xhr.open('POST', 'calc.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        var result = +xhr.response;
        document.getElementById('result-sum').value = result.toFixed(2) + ' руб';
      } else {
        alert(xhr.responseText);
      }
    }
  }
  xhr.send(data);
}

if (document.addEventListener) {
  document.addEventListener('DOMContentLoaded', runApp);
} else {
  document.attachEvent('onreadystatechange', function() {
    if (document.readyState == 'complete') {
      runApp();
    }
  });
}
