<?php
require_once("templates/template_form.php"); //-- HTML-форма
if($_POST['mode']!="myform" ) {  
                                                   print  $temp_form;   exit;
                                                  }else{
//-----------обработка формы-----------
$result = "ip:".$_SERVER['REMOTE_ADDR']."\n";
foreach ($_POST as $key => $value) { 
          if($key == "birth_date"){   
                                                $p=preg_split("/-/", $value);
                                                $value = gmmktime(0, 0, 0, $p[2], $p[1], $p[0]);  
                                                }  
          if($key == "gender"){  
                         if($value=="option2"){ $value="женщина";}else{ $value="мужчина";} 
                                           } 
          $result .= "$key => $value\n";
}//for(POST)
$result .= "referer:".$_SERVER['HTTP_REFERER']."\n".date("F j, Y, g:i a");
//------------------результат сбрасываем на диск-------------
                       $fp2=fopen("result/result.txt","w");
                        fwrite($fp2, $result);
                        fclose($fp2);
//-----------------результат копируем на email--------------
$result2    = str_replace("\n","<br>", $result);
$email      = 'smirnoff04@mail.ru';    //  ,support@infokontrol.com
$subject    = "Registration Form"; 
$from       = "Vacancy WEB";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "Subject: ".$subject."\r\n";
$headers .= 'From: '.$from.' <job@220volt.com>' . "\r\n" .
                  'Reply-To: job@220volt.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
 mail($email,$subject,$result2,$headers);
}//if(POST)
//*************functions*****************
function form_submitted($form_name=false){
  if(!isset($_POST['submitted'])){ // был ли вообще сабмит
    return false; //неа, завершаем
  }
  if($form_name && $_POST['submitted']!=$form_name){ //если проверяется конкретная форма, была ли отправлена именно она?
    return false;//нет, завершаем
  }
  return true;//все, ок.
}

?>
