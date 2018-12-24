<?php include ('header.php'); ?>

<!--<img src="images/logo.png" class="img-fluid img-thumbnail d-block w-100 rounded mx-auto" alt="">-->
<style>
body {
 
  background: url(css/city.png) repeat-x 0 100% fixed,
  linear-gradient(to top, #fff, #B1DDE5) fixed;
  animation: city 30s linear infinite;
  -webkit-animation: city 50s linear infinite;
}
@keyframes city {
  from { background-position: -1000px 100%, 120% 30%, 120% 15%, 0 0;}
  to { background-position: 0 100%, -200% 10%, -50% 15%, 0 0; }
}
@-webkit-keyframes city {
  from { background-position: -1000px 100%, 120% 30%, 120% 15%, 0 0;}
  to { background-position: 0 100%, -200% 10%, -50% 15%, 0 0; }
}
</style>

<body>
  <div class="container" style="width:100%; ">
    <p class="lead mt-5" style="text-align: center;">Будівельна компанія</p>
    <h1 class="display-4 mt-0 ">SMART HOUSE</h1>
    <div class="row mt-4">
      <div class="col-sm-6">
        <p class="justify">Будівельна компанія працює з 2018 року та здійснює повний спектр комплексних внутрішніх оздоблювальних робіт, генпідряд на ремонт та реконструкцію будівель та приміщень на об'єктах комерційного призначення. Наша будівельна компанія дає гарантію якісного виконання поставлених завдань з урахуванням дотримання всіх норм будівельного законодавства. </p>
      </div>
      <div class="col-sm-6">
        <p class="justify">Сьогодні «Смарт Хаус» — це максимально інтегрована, що динамічно розвивається команда однодумців. Ми зібрали колектив фахівців вищої категорії, що зможе втілити в реальність архітектурні ідеї любої складності, професійно управляти проектом, від розробки та погодження технічної документації до введення обєкту в експлуатацію. </p>

      </div>
    </div>

  </div>
  <div class="container mt-5">
    <div class="row ">
      <div class="group col-sm-3" >
       <img src="css/group11.png" class="rounded float-left rounded-circle" width="45px" alt="img1">
       <p class="group_p">Якісні матеріали та інструменти</p>
     </div>
     <div class="group col-sm-3" width="">
       <img src="css/men-icon.png" class="rounded float-left rounded-circle" width="55px" alt="img1">
       <p class="group_p">Досвічені спеціалісти</p>
     </div>
     
     <div class="group col-sm-3" width="">
       <img src="images/price.png" class="rounded float-left rounded-circle" width="50px" alt="img1">
       <p class="group_p">Доступна ціна</p>
     </div> 
     <div class="group col-sm-3" width="">
       <img src="css/group3.png" class="rounded float-left rounded-circle" width="55px" alt="img1">
       <p class="group_p">Швидко та надійно</p>
     </div>
   </div>
 </div>
</body>



<!--FOOTER-->
<?php include ('footer.php'); ?>

</body>
</html>