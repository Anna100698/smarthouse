<?php include ('header.php'); ?>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
 <script>
  $(document).ready(function(){
    $('#button_contacts2').click(function(){
                // собираем данные с формы
                var pib    = $('#pib').val();
                var phone  = $('#phone').val();
                  var email  = $('#email').val();
                 var specialnist   = $('#specialnist').val();
                 var osvita   = $('#osvita').val();
                // отправляем данные
                $.ajax({
                    url: "includes/vacancii.php", // куда отправляем
                    type: "get", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                      "pib":  pib,
                      "phone":   phone,
                      "email":email,
                      "specialnist":   specialnist,
                      "osvita": osvita
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                      }
                    });
              });
  });
</script>
</head>
</head>
<body>
<div class="vacation vacation_image">
<div class="container">
  <div class="row">

    <div class="col-sm-7">
     <div class="vacancii mt-4">
    <div class="card  mb-3">
  <div class="card-header " style="font-size: 24px; font-weight: 600; width:100%;position: relative;">
   <p>Виконроб</p>
   <p style="position: absolute; right: 15px; top: 15px">Договірна</p>
  </div>
  <div class="card-body">
    <p class="card-text"> Повна/неповна зайнятість, можемо взяти студента.</p>
    <p><span style="text-decoration:underline; font-weight:bold;">Вимоги:</span>
    Знати та розбиратися у технічній документації, знання ДБН, вміння читати креслення, знання технологій будівництва.<br>Досвід роботи буде плюсом. Вік 18+.</p>
    <p><span style="text-decoration:underline; font-weight:bold;">Обов'язки:</span> Ведення об'єктів будівництва, подання звітності потрібних матералів, виплата зарплат, контроль якості виконання робіт.</p>
  </div>
  <div class="card-footer text-muted">
  <p>Офіційне працевлаштування. Зарплата договірна.</p>
  </div>
</div>
  
</div>
</div>

 
 <div class="col-sm-5">
   <div class="contactu2 mt-4 formvac">
    <form action="">
     <p class="formvac" style='margin-top:0;' >Прізвище Ім'я По-батькові</p>
     <input type="text" id="pib" required>
     <p class="formvac">Телефон</p>
     <input type="text" id="phone" required>
     <p class="formvac">Електронна пошта</p>
     <input type="email" id="email">
      <p class="formvac">Спеціальність</p>
     <input type="text" id="specialnist" required>
      <p class="formvac">Освіта та досвід</p>
    <textarea rows="3" id="osvita" required name="text"></textarea>
     <div class="messages"></div>
    <input class="formbutton" type="submit" id="button_contacts2" value="Відправити"> 
<a  style="margin-right:10px;" href="#"><img src="images/browse-folder.png" width='50px' title="Загрузити резюме з ком'ютера" alt=""></a>
</form>
   </div>
   </div>
 </div>
  </div>
	
<?php include ('footer.php'); ?>
</div>
</body>
</html>