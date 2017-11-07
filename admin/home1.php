<?php
include"header1.php";
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
		<title>الصفحة الرئيسية</title>
	 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/media.css">
  <link rel="stylesheet" type="text/css" href="css/log.css">
 <link href="https://fonts.googleapis.com/css?family=Jomhuria|Katibeh|Lateef" rel="stylesheet">	
 <style type="text/css">
 		button,a,input{
  
font-family: 'Lateef', cursive;
}
 .home .right{margin-top:-12px}
 	.home input{width:485px;height:80px;background:#354458;color:white;font-size:35px;text-align:;
 		border:1px solid white;}
.home input:hover{
	color:#EABA4F;

}
 		.right {
    float: right !important;}
    .empty{border:1px }
   .home{direction:ltr;margin-top:-0.4%}

   /* style screen*/
   @media (max-width:767px){ .home{margin-top:-0.5%} 
.home input{width:100%;;height:70px}}
 </style>
</head>
<body style="background:#f1f4f7">
<section class="home">
	<div class="row">
	<div class="right col-lg-4 col-md-10 col-sm-10 col-xs-12">
<input  type="button" class="btn " value="التسجيل"><br>
<input  type="button" class="btn" value="الجداول"><br>
<input  type="button" class="btn" value="الغيابات"><br>
<input  type="button" class="btn" value="الدرجات"><br>
<input  type="button" class="btn" value="جدول الأختبارات النهائية"><br>
<input  type="button" class="btn" value="المعلم">
</div>
	<div class=" col-lg-6">
		<div class="empty">
			
		</div>

	</div>
	</div>
</section>
</body>
</html>
<?php 
include'footer.php'
 ?>