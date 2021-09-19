<?php
$temp_form = <<<TMPform
<!doctype html>
<html lang="en">
  <head>
<title>Форма регистрации</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<style>
.myh4{font-weight:bold; text-align: center;font-size:26px;}
</style>
</head>
<body style="margin: 30px 0">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<article class="card-body">
<div class='myh4'>Форма регистрации</div>
<form name="contactForm" method="post" action="index.php" target="view_frame_comment"> 
<input type="hidden" name="mode" value="myform"> 
	<div class="form-row">
		<div class="col form-group">
			<label> Фамилия* </label>   
		  	<input type="text" class="form-control" placeholder="..." name="last_name">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label> Имя* </label>
		  	<input type="text" class="form-control" placeholder=" ..." name="first_name">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->

	<div class="form-group">
		<label>Email*</label>
		<input type="email" class="form-control" placeholder="..." name="email">
	</div> <!-- form-group end.// -->

	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Страна</label>
		  <select id="inputState" class="form-control" name="country">
		    <option selected=""> Выбрать...</option>
		      <script>outCountry();</script>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->

	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option1" checked>
		  <span class="form-check-label"> Мужчина </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option2">
		  <span class="form-check-label"> Женщина </span>
		</label>
	</div> <!-- form-group end.// -->

                <div class="form-group">
                       <label>Дата рождения</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="birth_date">
                    </div>
                </div><!-- form-group end.// -->

<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" value='yes'>  Согласие с условиями*  
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->

    <div class="form-group">
        <button type="submit" name="submitted" value="ok" class="btn btn-primary btn-block" onClick="checkForm2a();"> Создать аккаунт  </button>
    </div> <!-- form-group// -->      
</form>
</article> <!-- card-body end .// -->
<div style="padding: 0 3%">
                        <div id="result_ok"></div>
</div>
<script>
var strfrm="<iframe id='view_frame_comment' name='view_frame_comment'  width='350' height='50'  border='0' frameborder='0' HSPACE='0' VSPACE='0' marginheight='0' SCROLLING='no' class='tmpfrm'></iframe>";
document.write(strfrm);
</script>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
</div> 
<!--container end.//-->
</body>
</html>
TMPform;
?>