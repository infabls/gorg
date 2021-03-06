<?php 
$url = $_SERVER['REQUEST_URI'];
$content = explode('/', $url);
if ($content[1] == 'ust-kamenogorsk') {
    require '/../section/action.php';
}
require '/../section/quest.php';
 require '/../section/servise.php'; 
   require '/../section/why-we.php'; ?>
  <section id="mini_faq">
    <div class="mini-faq-title" style="text-align: center;"><h2>Вопросы</h2></div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed"><div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            1. Безопасность газ
          </h4>
        </div></a>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
          <div class="panel-body">
            <p>
              Все когда-либо задаются вопросом о безопасности газа. Мы, работая на рынке более 20 лет, можем с уверенностью сказать, что газ безопаснее Ваших сотовых телефонов. Так как к каждой газовой продукции, есть инструкции и техники безопасности, соблюдая которые Вы можете с комфортом и выгодой использовать газ в быту и промышленности, не опасаясь за свою безопасность, чего нельзя сказать о тех же телефонах взрывающихся даже при правильном пользовании. На нашем сайте мы постараемся максимально осветить все интересующие Вас вопросы, предоставляя видеоматериалы, информационные иллюстрации и техническую документацию.
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
           2. Инструкция при утечке или запахе газа с централизованного газоснабжения
          </h4>
        </div></a>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
          <div class="panel-body">
           <ol>
             <li>Откройте окна и двери</li>
             <li>Выйдите на улицу</li>
             <li>Позвоните по телефону 104 или в компанию которая обслуживает Ваш газгольдер</li>
           </ol>
           <p class="bg-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ни в коем случае не дышите испарениями , не оставляйте плиту включенной и не пользуйтесь электрическими приборами</p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
           3. Инструкция при утечке или запахе газа с газового баллона
          </h4>
        </div></a>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
          <div class="panel-body">
           <ol>
             <li>Закройте клапан у газового баллона</li>
             <li>Вынесите газовый баллон наружу</li>
             <li>Позвоните по телефону 104 или в компанию которая привезла Вам баллон</li>
             <p class="bg-danger">  <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ни в коем случае не дышите испарениями, не оставляйте плиту включенной и не пользуйтесь электрическими приборами</p>
           </ol>
          </div>
        </div>
      </div>
  </section>
  <?php require'/../section/call_q.php';
?>
 <!-- slider -->
 <script>$(document).ready( function() {
    $('#myCarousel').carousel({
    interval:   4000
  });
  
  var clickEvent = false;
  $('#myCarousel').on('click', '.nav a', function() {
      clickEvent = true;
      $('.nav li').removeClass('active');
      $(this).parent().addClass('active');    
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.nav').children().length -1;
      var current = $('.nav li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.nav li').first().addClass('active');  
      }
    }
    clickEvent = false;
  });
});</script>