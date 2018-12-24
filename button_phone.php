<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
 <script>
  $(document).ready(function(){
    $('#button_contacts').click(function(){
                // собираем данные с формы
                var form_name    = $('#form_name').val();
                var form_phone   = $('#form_phone').val();
                // отправляем данные
                $.ajax({
                    url: "phone.php", // куда отправляем
                    type: "get", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                      "form_name":    form_name,
                      "form_phone":   form_phone
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages1').html(data.result); // выводим ответ сервера
                      }
                    });
              });
  });
</script>
</head>
<body>
  <div  class="tbForm_CallMe" data-tbform="M-XXX" data-toggle="modal" data-target="#exampleModalCenter" style="position:fixed; right: 50px; bottom: 130px;" >
   <div class="tbForm_shadow"></div>
   <div class="tbForm_fone"><span>Замовити дзвінок</span></div>
 </div>
 
 <!-- Modal -->





 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Замовити дзвінок</h5>
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

                     <div class="col-sm-12">
                       <div class="form-group">
                         <label for="form_name">Як до вас звертатись? *</label>
                         <input id="form_name" type="text" class="form-control" required placeholder="Ім'я">
                         <label for="form_phone">Ваш номер телефону *</label>
                         <input id="form_phone" type="text" class="form-control" required placeholder="Телефон">
                            <div class="help-block with-errors"></div>
                                          </div>
                                           <div class="messages1"></div>

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
      <button type="button" class="btn btn-info" id="button_contacts">Подзвоніть мені</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
    </div>
  </div>
</div>
</div>
</div>


</body>
</html>
