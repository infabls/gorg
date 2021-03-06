<style>
  .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; font-size: 26px;}
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: #FFF }
     .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
  .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
  .tab-pane { padding: 0px 0; }
  .tab-content{padding:0px 20px;}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
.card-contact {width: 100%; height: 200px;}

@media screen and (max-width:767px){
  .tab-content {padding: 0;}
  .container {padding: 0;}
  
}
</style>
<section>
  <div class="text-center"><h1>Контакты организации Горгаз </h1>
<p>Для просмора контактов выберите город</p></div>
</section>


<div class="container">
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Общие контакты</a></li>
    <li ><a data-toggle="tab"  href="#menu1">Астана</a></li>
    <li><a data-toggle="tab" href="#menu2">Караганда</a></li>
    <li><a data-toggle="tab" href="#menu3">Павлодар</a></li>
    <li><a data-toggle="tab" href="#menu4">ВКО</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="card-w"><h3>Контактные телефоны:</h3>

Бухгалтерия 8(7172) 408001, 8 701 960 36 05 <br>

Отдел гос.закупок: 8 707 188 99 19, 8 776 288 99 19</div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="card-w"><h3>По вопросам сотрудничества звонить:</h3>

<p>Менеджеру по развитию: Диляра: <br>  8 707 188 99 19, 8 776 288 99 19. <br>

<strong>Или в региональные филиалы:</strong> <br>

Акмолинская область и г.Астана: <br>  8 701 527 0 527 <br>

Карагандинская область и г.Караганда: <br>  8 701 960 66 99 <br>

Павлодарская область и г.Павлодар: <br>  8 701 536 01 36 <br>

ВКО и г.Усть-Каменогорск: <br>  8 701 960 36 08</p></div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="card-w"><h3>Аварийная служба</h3></div>
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Астана</h3>
      <?php  $city=0;require 'data_contact_and_price.php'; require '/../section/contact.php'; ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Караганда</h3>
     <?php $city=1;require 'data_contact_and_price.php'; require '/../section/contact.php'; ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Павлодар</h3>
      <?php $city=2;require 'data_contact_and_price.php'; require '/../section/contact.php'; ?>
    </div>
     <div id="menu4" class="tab-pane fade">
      <h3>Усть-Каменогорск</h3>
      <?php $city=3;require 'data_contact_and_price.php'; require '/../section/contact.php'; ?>
    </div>
  </div>
</div>
<section id="form_price">
  <div class="container">
    <div class="card-w text-center">
      <h2>Юридические данные компании:</h2>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12"> <p>ТОО "ГорГазАстана 2050"</p>
       <p>БИН 130540014281</p>  <p> РНН 030600213343</p> </div>
        <div class="col-md-4 col-sm-6 col-xs-12"> <p> <i class="fa fa-credit-card-alt" aria-hidden="true"></i>Банковские реквизиты: <br>
ИИК KZ41826F0KZTD2003630
ФАО «АТФБанка» в г.Усть-Каменогорск <br>
БИК ALMNKZKA <br>
ИИК №KZ45722S000000898901 <br>
АО «Kaspi Bank» в г. Астана БИК CASPKZKA</p></div>
        <div class="col-md-4 col-sm-12 col-xs-12"><p><i class="fa fa-map-marker" aria-hidden="true"></i>
Юридический и почтовый адрес: <br> 010000, г.Астана, ж.м.Коктал, ул.Коктал 23 <br>
Св-во по НДС серия 03001 №0005533 от 31.12.2013г. <br> <i class="fa fa-phone-square" aria-hidden="true"></i>
Тел: <a href="tel:+77172408001">8(717)2408001</a> <br> <i class="fa fa-envelope-open" aria-hidden="true"></i>Эл.адрес: <a href="mailto:gorgaz2050@mail.ru"> 
gorgaz2050@mail.ru </a></p></div>
      </div>
      <p><i class="fa fa-user-circle" aria-hidden="true"></i>Директор Штихалюк Василий Дмитриевич</p>
    </div>
  </div>
</section>
<section id="contacts">
  <div class="row">
    
<div class="card-w"><h2>По поводу работы сайта пишите на почту</h2>
<p> <i class="fa fa-envelope-open" aria-hidden="true"></i><a href="mailto:bug@gorgaz2050.kz"> 
bug@gorgaz2050.kz </a></p>
</div>
  </div>
</section>

<section id="contact-form">
  <form action="mail.php" method="POST">
    <div class="row">
      <div class="col-md-6 col-sm-12"></div>
      <div class="col-md-6 col-sm-12"></div>
    </div>
  </form>
</section>

<?php 
require '/../section/call_q.php';?>