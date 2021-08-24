<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="GameTic">
  <meta name="description" content="Account Trideng">      
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="imgs.favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GameTic</title>
  
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
       <div id="container">
<!--Main Menu-->
       <nav id=menu>
           <h1 id="logo">  <img src="img/logo-2.png" style="width: 100px;height: 60px;">GameTic</h1>
          <nav class="menu">  <ul class="menu-all">
               
            <li class="menu-item"><a href="#">
                <i style="font-size: 36px;" class="fa fa-home"></i></a>
              </li>
              
<!--Users-->
               
               
                    <li class="menu-item"> 
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn"> الحساب</button>
                             
                             <div id="myDropdown" class="dropdown-content">
                                 
                         <p class="p-user" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">إنشاء حساب</p>
                               <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/sinup-avtar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container02">
      
          <input id="email-ent" type="text" placeholder="ادخل الايميل" name="email" required>
          <input id="un-ent" type="text" placeholder="ادخل اسم المستخدم" name="uname" required>
        <div id="rd" >
            <label for="man"  class="rd1" >ذكر</label> 
    <input type="radio" id="man" name="sex"  class="rd" checked="">
            <label for="wemon" class="rd1">أنثى</label>
      <input type="radio" id="wemon" name="sex" class="rd" >
            </div>
      <input id="pw-ent"type="password" placeholder="ادخل كلمة المرور" name="psw" required>
      <input id="re-pw-ent"type="password" placeholder="اعد ادخال كلمة المرور" name="psw2" required>
      
    </div>

    <div class="container01" style="background-color:#f1f1f1">
        
       
        <div class="rols"> بضغطك على انشاء الحساب فأنت تقبل<a href="#" class="log-link">الشروط والاحكام</a></div>
       <a href="#"><button type="submit" class="sin-button">إنشاء الحساب</button></a> 
           
      <button type="button" onclick="document.getElementById('id01').style.display='none' " class="cancelbtn">إلغاء</button>
      
        
              
    </div>
  </form>
                          </div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>    
                                 
                                 
                <p class="p-user" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">تسجيل الدخول</p>
                               <div id="id02" class="modal">
  
  <form class="modal-content animate" action="/signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container01">
      
      <input id="un-ent" type="text" placeholder="ادخل اسم المستخدم" name="uname" required>

   
      <input id="pw-ent"type="password" placeholder="ادخل كلمة المرور" name="psw" required>
        
      
    </div>

    <div class="container01" style="background-color:#f1f1f1">
        <label id="check-login"><span class="remember">
        <input type="checkbox" checked="checked" name="remember"> تذكرني
      </span></label>
       <a href="#"><button type="submit" class="log-button">تسجيل الدخول</button></a> 
           
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">إلغاء</button>
      <span class="psw">نسيت <a href="#" class="log-link">كلمة المرور؟</a></span>
        
              
    </div>
  </form>
                          </div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script> 
                                 
                                         </div>
                            
  
                            
                            
                            
                            
                        </div>
                                                  <script>
                            /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById('myDropdown').classList.toggle('show');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName('dropdown-content');
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      
    }
  }
}
</script>
              </li>
             
                        
                    
              
               
                <li class="menu-item"><a href="#" style="color: #29529c">
               سلة المشتريات  <i style="font-size: 36px;" class="fa fa-shopping-cart"></i></a></li>
             
               
               </ul> </nav>
 <!--Search-->          
                <div class="fsearch" >   
             <i class="fa fa-search"></i>
                  
                  <input class="search" type="text" placeholder="Search.."; action="action_page.php">
                 </div>
           </nav>
           
           
<!--hero img-->
           <div id="hero">
           <img style="height: 600px" width="100%" src="img/hero.png " >
           </div>
 <!--الحسابات-->
           <section id="account">
               <h1 class="h-acc">حسابات الالعاب</h1>
              
             <div class="row"> 
                 <!--========الصف الاول=======-->
                  <div class="col-0">
                   <a href="#">
                   <img src="img/gen-acc1.jfif"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب فنيتي </p>
                       
                       <p class="des-acc" > الرانك 10 غير مربوط بسيرفر</p>
                       <hr>
                       <p class="acc-price";>90 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
                 <div class="col-0">
                   <a href="#">
                   <img src="img/gen-acc2.jfif"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p"> حساب الرانك 56 </p>
                       
                       <p class="des-acc" >سيرفر اوربي 6 شخصيات 5 نجوم</p>
                       <hr>
                       <p class="acc-price";>900 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
                       
                      
                 <div class="col-0">
                   <a href="#">
                   <img src="img/logo-2.png"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب في ***** مميز </p>
                       
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
                 
                <div class="col-0">
                   <a href="#">
                   <img src="img/logo-2.png"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب في ***** مميز </p>
                       
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
                 <!--========الصف الثاني=======-->
                 <h1 class="h-acc">حسابات كود</h1>
                 <div class="col-0">
                   <a href="#">
                   <img src="img/logo-2.png"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب في ***** مميز </p>
                       
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
               <div class="col-0">
                   <a href="#">
                   <img src="img/logo-2.png"  class="acc-img">
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب في ***** مميز </p>
                       
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
            
                 
                 <div class="col-0">
                   <a href="#">
                   <img src="img/logo-2.png"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                       
                      <p class="acc-p">حساب في ***** مميز </p>
                       
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
                 
                <div class="col-0">
                   <a href="#">
                   <img src="img/insta-acc.png"  alt="حساب" class="acc-img" >
                   <footer style="height: 50px;"class="acc-footer ">
                      
                      <p class="acc-p">حساب في ***** مميز </p>
                    
                       <p class="des-acc" >الوصف: حساب يمتلك 1500 متابع</p>
                       <hr>
                       <p class="acc-price";>150 ريال<i class="fa fa-cart-plus"></i></p>
                   </footer></a>
                   </div>
              
                  
               
               
                       
              
                 
               </div>
               
           </section>
           
 <!--video
           
           <section id="video">
               <h1>طريقة الشراء من الموقع</h1>
               <div class="row">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/izzhuzHhvog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
           </section>
    -->
        <iframe src="https://mega.nz/embed/sDYFGIxB#ThAf891QB9C_3TIpEkupx5QvnrNnlznKVdxJ9OsB-Gk" width="640" height="360" frameborder="0" allowfullscreen></iframe>   
<!--contact-->
         <!--  
           <section id="contact">
               <h1>شاركنا رائيك في الخدمة</h1>
               <div class="row">
                <div class="col-2">
                   <form action="#" method="post">
                       <input id="name" class="input" name="name" type="text"
                              placeholder"الاسم" size="30">
                       <br>
                       <input id="email" class="input" name="Email" type="text"
                              value="البريد الالكتروني" size="30">
                       <br>
                       
                       <textarea id="message" class="input" name="message" rows="8"
                                 col="50"></textarea><br>
                       <input id="submit" type="submit" value="ارسال">
                       
                    </form>
                    
                    
                    
                    
                   </div>
                   <div class="col-2"></div>   
               </div>
           </section>
           -->
 <!--adv-->        
         <section id="adv">
               <h1>: ما يميزنا عن غيرنا  </h1>
               <div class="row">
<!--Support Col-->
                   <div class="col-4">
                   
                   <img class="adv-img" src="img/sup.png" alt="دعم فني مميز">

                      <p class="adv-text">دعم فني مميز </p>
                   </div>
<!--Special Offer Col-->
                    <div class="col-4">
                   
                   <img class="adv-img" src="img/best-sell.png" alt="أسعار مميزة">

                      <p class="adv-text">أسعار مميزة </p>
                   </div>
 <!--Fast service Col-->
                   <div class="col-4">
                   
                   <img class="adv-img" src="img/fast-del.png" alt="خدمة سريعة">

                      <p class="adv-text">خدمة سريعة </p>
                   </div>
             
             </div>
              </section>
 <!--footer-->        
           <section id="wsfooter">
               <div class="row0" >
<!--من نحن-->
                   <div class="col-5">
                       <header class="FH">
                            من نحن 
                       </header>
                     <p>متجر مختص في بيع حسابات الالعاب .</p>
                   </div>
                   
<!--روابط مهمة-->
                   <div class="col-5">
                   <header class="FH">
                       روابط مهمة
                       </header>
                       <a href="#" class="ws-link">طريقة الشراء من المتجر</a>
                       <a href="#" class="ws-link">الشروط والاحكام</a>
                   </div>
                  
<!--حساباتنا-->
                   <div class="col-5">
                   <header class="FH">
                         تابعنا على مواقع التواصل الاجتماعي                    
                       </header>
                       <a href="https://www.instagram.com/game.tic/" target="_blank" ><i style="font-size: 28px;" class="fa fa-instagram"></i></a>
                       <a href="https://twitter.com/Gametic14" target="_blank" ><i style="font-size: 28px;" class="fa fa-twitter"></i></a>
                       <a href="https://wa.me/message/SSZL7D6PGNJDK1" target="_blank" ><i style="font-size: 28px;" class="fa fa-whatsapp"></i></a>

                   </div>
             
               
             
               
               </div>
              
               
               
               
           </section>
           
           <section id="gs">
           <p>GameTic جميع الحقوق محفوظة لمتجر </p>
           </section>
           
           
           
           
           
           
           
          
        </div>
            
 <!--Script -->
       
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="js/script.js"> </script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
             </body>
</html>