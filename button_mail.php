<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
 <script>
  $(document).ready(function(){
    $('#button_contacts2').click(function(){
                // собираем данные с формы
                var form_name2    = $('#form_name2').val();
                var form_email2  = $('#form_email2').val();
                 var form_message   = $('#form_message').val();
                // отправляем данные
                $.ajax({
                    url: "mail.php", // куда отправляем
                    type: "get", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                      "form_name2":    form_name2,
                      "form_email2":   form_email2,
                      "form_message":   form_message
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
<body>
 <div  class="tbForm_CallMe" data-tbform="M-XXX" data-toggle="modal" data-target="#exampleModalCenter2" style="position:fixed; right: 50px; bottom: 50px;" >
   <div class="tbForm_shadow2"></div>
   <div class="tbForm_fone2"><span>Написати</span></div>
 </div>
 <!-- Modal -->

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Надішліть нам повідомлення</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <section id="message">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
               <div id="contact-form">        
                 <div class="controls">
                   <div class="row">
                     <div class="col-sm-6">
                       <div class="form-group">
                         <label for="form_email">Ваш Email *</label>
                         <input id="form_email2" type="email" class="form-control" placeholder="Введіть ваш email*" required="" data-error="Потрібний дійсний email.">
                         <div class="help-block with-errors"></div>
                       </div>
                     </div>
                     <div class="col-sm-6">
                       <div class="form-group">
                         <label for="form_name2">Ваше ім'я *</label>
                         <input id="form_name2" type="text" class="form-control" required="" placeholder="Ваше ім'я">
                         <div class="help-block with-errors"></div>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-sm-12 checkbox-data">
                       <label>
                         <input type="checkbox" checked="checked" id="person_data" required="">
                         <p style="font-size:10px;" class="fa fa-2x icon-checkbox"></p>
                         <span>Я даю згоду на обробку персональних даних</span>
                       </label>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="form-group">
                        <textarea id="form_message" name="text_comment" class="form-control" placeholder="Залиште нам повідомлення." rows="3" required data-error="Залиште нам повідомлення."></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="messages"></div>
                    </div>          

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="modal-footer ">

      <button type="button" class="btn btn-info" id="button_contacts2">Надіслати</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>
