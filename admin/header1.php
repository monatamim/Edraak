<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>

	<meta charset="utf-8">

  <title></title>

  <!--<link rel="stylesheet" type="text/css" href="css/header1.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Jomhuria|Katibeh|Lateef" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style type="text/css">

.navbar {
  background-color: #79376B;
  font-family: 'Lateef', cursive;
}
.brandLogo {
  font-size: 35px;
  background-color: #FEA878;
  padding-right:30px;
  padding-left: 30px;
  border-radius: 15px;
  border:1px solid transparent;
}
.brandLogo:hover {
color:#FEA878 !important;
background-color: white;
border:1px solid #FEA878;
}
.userIcon {
    font-size: 25px !important;
    margin-right: 30px;
    margin-left: 5px;
    margin-top: 5px;
    color: white !important;
}

.navLinks {
  color: white !important;
  font-size:24px;
  border:1px transparent solid;
}
.navLinks:hover {
  color: white !important;
  background-color: #FEA878;
  border:1px solid #FEA878;

}
.searchBox {
  margin-top: 4px;
  font-size:18px;
  color:#79376B;
  font-weight: bold;
}
.signOut {
  background-color: #79376B;
  color: white;
  font-size:20px;
  text-align: right;
  margin:0;
}
.signOut:hover {
  color: white;
  background-color: #FEA878;
}
@media screen and  (min-width: 992px) {
.navbar {
  height: 54px;
}
}
@media screen and  (max-width: 990px) {
.nav-item {
text-align: right;
margin-top: 10px;
}
.userIcon {
  margin:5px 0 0 0;
}
  }
  /*
 @media (max-width:767px){ .navbar .navbar-header  a{float:right !important} 
 .glyphicon-user {display:inline;}
 input[placeholder="البحث .."] {
  ;width:100%} 
    .nbar .top  a{float:right !important;}
    }

    body{overflow-x:hidden}
    .nav-top .navbar:hover{border-bottom:5px solid #EABA4F}
        button,a,input{font-family: 'Lateef', cursive;}
    .nav-top .top a{color:white;font-size:40px;font-weight:bolder;padding-right:50px;
 letter-spacing: 5px;}
.nbar .top  a:hover{
  color:#EABA4F;
  font-size:50px
}
.nav-top li a{font-size:24px;border-radius:5px}
.nav-top .top1 li a{font-size:30px;color:#f1f4f7}
.nav-top .top-icon{background:#354458}
.nav-top .top1 li a:hover{font-weight:bold;color:black;border-bottom:10px solid #EABA4F}
input[placeholder="البحث .."] {
}
*/
	</style>
</head>



<body>
  <!-- start logo-->

<img class = "col-lg-12" src="images/banner.png" style = "max-width:100%;height: 140px;" name="logo">

<!--end logo-->

  <!-- start navbar
      <div class="row">
<nav style="background:#354458" class="navbar navbar-inverse top ">
  <div class="container-fluid ">
    <div class="navbar-header top1 navbar-right">
      <a  class="navbar-brand" href="#">إدراك</a>
 <button style="float:left;margin-left:50px;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div style="float:left;margin-bottom:10px;" class="collapse navbar-collapse" id="myNavbar">
    <form class="navbar-form navbar-left">
      <input type="text" name="search" placeholder="البحث ..">


           <ul class="nav navbar-nav"> 
    <li class="dropdown  ">
       <a style="background:#354458" class="dropdown-toggle hidden-xs" data-toggle="dropdown" href="#">
        <span style="background:#354458" class="glyphicon glyphicon-user"></span></a>
        <ul class="dropdown-menu ">
          <li><a style="float:right;font-size:20px " href="#">تسجيل الخروج</a></li>
 
      </li>
       </ul>
       <a style=";font-size:30px;text-align:center;color:black " class = "hidden-lg hidden-md hidden-sm " href="#">تسجيل الخروج</a>
     </li>
   </ul>
 </form>
</div>

   
     </div>

</nav>
</div>-->

<!--
<section class="nav-top">
<nav class="navbar">
  <div class="container-fluid ">
    <div class="navbar-header navbar-right top">
      <button style="background:#f1f4f7;float:left;margin-left:8%" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar top-icon"></span>
        <span class="icon-bar top-icon"></span>
        <span class="icon-bar top-icon"></span>                        
      </button>
      <a class="navbar-brand" href="#">إدراك</a>
    </div>
    <div style="background:#354458;text-align:center;" class="collapse navbar-collapse top1"  id="myNavbar">
      <ul style="float:right!important;" class="nav navbar-nav">
        <li> <a  href="#">الجداول &nbsp;</a></li>
        <li><a href="#">الغيابات</a></li>
        <li ><a href="#">الدرجات</a></li>
        <li><a href="#">جدول الاختبارات النهائية</a></li>
        <li><a href="#">الجداول</a></li>
        <li> <a href="#">التسجيل</a></li>

            <a style=";font-size:30px;color:black " class = "hidden-lg hidden-md hidden-sm " href="#">تسجيل الخروج</a>

</li>
</ul>
     <input class="hidden-xs" style="width:20%;margin-top:0.7%" type="text" name="search" placeholder="البحث ..">


    <ul  class="nav navbar-nav "> 

    <li  class="dropdown  ">
       <a style="background:#354458" class="dropdown-toggle hidden-xs" data-toggle="dropdown" href="#">
        <span style="background:#354458;margin-top:1%" class="glyphicon glyphicon-user hidden-xs"></span></a>
        <ul class="dropdown-menu ">
          <li><a style="float:right;font-size:20px " href="#">تسجيل الخروج</a></li>
</li>
       <a style=";font-size:30px;color:black " class = "hidden-lg hidden-md hidden-sm " href="#">تسجيل الخروج</a>

</ul>
      
</li>
      </ul>
    </div>
  </div>
</div>
</nav>
</section>
-->


<nav class="navbar navbar-expand-lg navbar-dark">

  <a class="navbar-brand brandLogo" href="#">إدراك</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="collapsibleNavbar">


    <ul class="navbar-nav ">

      <li class="nav-item ">
        <a class="nav-link navLinks" href="#">التسجيل</a>
      </li>

      <li class="nav-item">
        <a class="nav-link navLinks" href="#">الجداول</a>
      </li>

      <li class="nav-item">
        <a class="nav-link navLinks" href="#">جداول الإختبارات النهائية</a>
      </li>   

      <li class="nav-item">
        <a class="nav-link navLinks" href="#">الدرجات</a>
      </li> 

      <li class="nav-item">
        <a class="nav-link navLinks" href="#">الغياب</a>
      </li>  

    </ul>


    <ul class="navbar-nav mr-auto">
      <li class="nav-item">

      <input class="form-control searchBox " type="text" size="25" placeholder="البحث ...">
     

  </li>
 
  <!-- Dropdown -->

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <span class="fa fa-user userIcon"></span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item signOut" href="#">تسجيل الخروج</a>
      </div>
    </li>

  </ul>
  </div>  

</nav>

</body>
