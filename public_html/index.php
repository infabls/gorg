<?php 


 session_start();
	include  dirname(__FILE__)."../engine/loader.php";
 require_once '../engine/loader.php';
 // check_cache();
 Router_start();
 

// generate($ptviews,$txt);
function generate($ptviews, $txt, $data = null)
	{
		global $txt, $ptviews;
		
		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include '../app/views/wrapper.php';
	}