<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodedMindset</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="/assets/css/styles.css" rel="stylesheet">
     <link href="/assets/css/hover.css" rel="stylesheet">

         {{-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">

</head>

<body>

<?php //include("includes/navigation.php"); ?>


{{-- modal loin here --}}
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              <h4> Login <span class="glyphicon glyphicon-remove" data-dismiss="modal"></span>  </h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname" style="font-size:large"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="psw" style="font-size:large"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label style="font-size:large"><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" id="modal_loginBtn" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal" style="font-size:large"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <p style="font-size:large">Not a member? <a href="#register_section" style="font-size:large">Register now</a></p>
              <p style="font-size:large">Forgot <a href="#" style="font-size:large">Password?</a></p>
            </div>
          </div>
          
        </div>
      </div> 



{{-- modal for forgotten password --}}
<div class="modal fade" id="forgotPasswordModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              <h4> Login <span class="glyphicon glyphicon-remove" data-dismiss="modal"></span>  </h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname" style="font-size:large"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="psw" style="font-size:large"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label style="font-size:large"><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" id="modal_loginBtn" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal" style="font-size:large"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <p style="font-size:large">Not a member? <a href="#register_section" style="font-size:large">Register now</a></p>
              <p style="font-size:large">Forgot <a href="#" style="font-size:large" id="forgotPassword">Password?</a></p>
            </div>
          </div>
          
        </div>
      </div> 
    
     







    <header>
        <div class="logo">LOGO</div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#courses_section">Courses</a></li>
                <li><a href="#footer_section">Contact</a></li>
                <li><a href="#register_section">Register</a></li>
                <li><a id="loginBtn" href="#">Login</a></li>
                <li><a href="#">Upgrade to Pro</a></li>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

        <div class="header_text">
            <h1>Learn Software Development the Easy Way.</h1>
            <p>Everyone has a success story. Your level of accomplishment reflects your level of hardwork. Keep your head up, never give up, soon it becomes your icon</p>  
            {{-- <p>Unveiling your tech potentials.</p> --}}

            <button class="header_text_btn hvr-wobble-to-bottom-right"><a href="#register_section">Get started</a></button>
        </div>

    </header>

    







<div class="outer_main_container"> 
    

        <div class="container">
            <div id="register_row" class="row">
                <div class="col-sm-6">
                    <img style="width:100%;" src="/assets/images/register_section/coded_animated.gif" alt="animated">
                </div>

                <div class="col-sm-6">

                                <div id="register_section" class="reg_head">
                                    <h3>
                                        register
                                    </h3>
                                    <span></span>
                                </div>
                                <div class="register_form">
                                    <form action="/signup" method="POST" class="register-wthree">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1 d-md-flex align-items-end justify-content-end px-md-0">
                                                    <label class="mb-0">
                                                        <span class="fas fa-user"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        First name
                                                    </label>
                                                    <input class="form-control" type="text" placeholder="Johnson" name="fname" required="">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>
                                                        Last name
                                                    </label>
                                                    <input class="form-control" type="text" placeholder="Kc" name="lname" required="">
                                                </div>
    
                                            </div>
    
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1 d-md-flex align-items-end justify-content-end px-md-0">
                                                    <label class="mb-0">
                                                        <span class="fas fa-user"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-11">
                                                    <label>
                                                        Username
                                                    </label>
                                                    <input class="form-control" type="text" placeholder="username" name="username" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1 d-md-flex align-items-end justify-content-end px-md-0">
                                                    <label class="mb-0">
                                                        <span class="fas fa-envelope-open"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-11">
                                                    <label>
                                                        Email
                                                    </label>
                                                    <input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1 d-md-flex align-items-end justify-content-end px-md-0">
                                                    <label class="mb-0">
                                                        <span class="fas fa-lock"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-11">
                                                    <label>
                                                        password
                                                    </label>
                                                    <input type="password" class="form-control" placeholder="*******" name="password" id="password1" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1 d-md-flex align-items-end justify-content-end px-md-0">
                                                    <label class="mb-0">
                                                        <span class="fas fa-lock"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-11">
                                                    <label>
                                                        confirm password
                                                    </label>
                                                    <input type="password" class="form-control" placeholder="*******" name="Password" id="password2" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-lg-5 mt-3">
                                            <div class="offset-1"></div>
                                            <br>
                                            <div class="col-md-11">
                                                <button type="submit" id="register_button" class="btn btn-agile btn-block w-100">register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--  //register form grid ends here -->
                           
    
                     


                </div>
            </div>
        </div>





    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


               <!--  post foreach here -->
            <div class="row">

                <ul class="list-group">
                   

                     

                    <!-- First Blog Post -->
                        <!-- <div class="well each_index_blog"> -->

                    <div id="courses_section" class="course_head">
                            <h3>
                               Courses
                            </h3>
                            <span></span>
                        </div>
          
                         <li class="well each_index_blog list-group-item">

                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img style="width:100%" src="/assets/images/main_content_posts/coded_img_html_intro.jpg" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h3 id="post_title"><a href=""> Post title </a></h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, sed tempora, asperiores velit et eveniet magnam impedit, 
                                            sequi excepturi aperiam voluptate dicta iste. Iure repudiandae pariatur similique repellendus sit quam.</p>
                                        <small>Wrtten on 02-01-2019 by Ugo Raphael </small>
                                    </div>
                                </div>
                            </li>

                            <li class="well each_index_blog list-group-item">

                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img style="width:100%" src="/assets/images/main_content_posts/coded_img_html_intro.jpg" alt="">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h3 id="post_title"><a href=""> Post title </a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, sed tempora, asperiores velit et eveniet magnam impedit, 
                                                sequi excepturi aperiam voluptate dicta iste. Iure repudiandae pariatur similique repellendus sit quam.</p>
                                            <small>Wrtten on 02-01-2019 by Ugo Raphael </small>
                                        </div>
                                    </div>
                                </li>

                                <li class="well each_index_blog list-group-item">

                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <img style="width:100%" src="/assets/images/main_content_posts/coded_img_html_intro.jpg" alt="">
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <h3 id="post_title"><a href=""> Post title </a></h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, sed tempora, asperiores velit et eveniet magnam impedit, 
                                                    sequi excepturi aperiam voluptate dicta iste. Iure repudiandae pariatur similique repellendus sit quam.</p>
                                                <small>Wrtten on 02-01-2019 by Ugo Raphael </small>
                                            </div>
                                        </div>
                                    </li>


                          
                               
                    
                            <!-- </div> -->
                        
           
                
                   
                    </ul>

                </div>



                <hr>




               
                 <ul class="pager">
                     <li class='previous'><a href='#'>Previous</a></li>

                </ul>



            </div> <!-- col-md-8 -->







            <!-- Blog Sidebar Widgets Column -->
          
        





<div class="col-md-4 sidebarx">

            <!-- Blog Search Well -->
           <div class="well sidebar">
                

                    {{-- <form class="rtl">
                        <input type="text" name="search">
                      </form> --}}


                <form class="example" action="">
                    <input id="search_input" type="text" name="search" style="display:none;">
                    <button type="button" id="search_btn" style="display:none;"><i class="fa fa-search"></i></button>
                   <a id="search_btn2" class="btn btn-success pull-right" href="javascript:;"><i class="fa fa-search"></i></a>
                </form>

        
                {{-- for holdin keypress values, as used in js below --}}
                <span id="search_keypress" style="visibility:hidden"></span>
              

            </div>




            <!-- Blog Categories Well -->
           





            <!-- Side Widget Well -->
            <div class="well widget">
                <h4>ADVERTS</h4>
                <p>Contact us</p>
            </div>


    <div class="well widget">
        
                <!-- First Blog Post -->
                    <!-- <div class="well each_index_blog"> -->
      
                     <li class="well each_index_blog list-group-item">
                        <!-- <div class="well"> -->
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:100%" src="/assets/images/economic-style-smal-image2.jpg" alt="">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3 id="post_title"><a href="#"> Post title </a></h3>
                                    <p>Some content</p>
                                    <small>Written on 01-02-1999 by Ugo RALPH </small>
                                </div>
                            </div>
                
                        <!-- </div> -->
                     </li>
       
            
               
           

           
        
        

    </div>








        </div>



        </div>
        <!-- /.row -->








 <hr>

 </div>
 <!--container end -->


 {{-- contents for about us --}}

 <div class="container">

    <div class="row">
        <div class="col-sm-12">
            <div id="about_section" class="abt_head">
                <h3 class="text-center">
                    About Us
                </h3>
                <span></span>
            </div>

            <div class="reg_contents">
                <p>Codedmindset offers practice development layouts, 
                    instructional videos, and a customized learning dashboard that enable students to learn in and outside of the classroom, at their very own pace. 
                    We handle computer programming for example php, python, javascript and its frameworks, html, css, and that's just the beginning. </p>
            </div>

        </div>
    </div>    

 </div>



{{-- contents for about us --}}

<div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div id="partner_section" class="partner_head">
                    <h3 class="text-center">
                        Our Partners
                    </h3>
                    <span></span>
                </div>
    
                <div class="partner_contents">
                    <p> IMG LOGO OF PARTNERS HERE </p>
                    </div>
    
            </div>
        </div>    
    
     </div>






        <!-- Footer -->
    
        <footer id="footer_section" style="background-color: white; color: white;">
            <div class="row">

            <div class="footer_inner">

                {{-- <div class="col-lg-12"> --}}
                        <h2>CODEDMINDSET</h2>

                	<div id="footer_nav" class="row">
                		
                		<div class="col-sm-6">
                			
                                <ul id="footer_contacts" class="list-agileits">
                                        <li>
                                            <a href="#home" class="nav-link scroll">
                                                HOME
                                            </a>
                                        </li>
                                        <li class="my-2">
                                            <a href="#register" class="nav-link scroll">
                                                REGISTER
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#partners" class="nav-link scroll ">
                                                PARTNERS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact" class="nav-link scroll">
                                                CONTACT US
                                            </a>
                                        </li>
                                    </ul>
                		</div>

                		
                        
                        <div class="col-sm-6 text-center">
                            <div class="contact_footer">
                                <i class="fas fa-envelope-open"></i> <p>ralphsunny114@gmail.com</p>                       
                            </div>
                        </div>
                		

                	</div>


                    <hr style="background-color:black;">

                    <div class="footer_icon row">
                        <div class="cpy_right col-sm-6">
                            <p>Copyright &copy; 2019 Codemindset Academy. All rights reserved |  Designed by HypeKonxept </p>    
                        </div>
                    
                        <div class="col-sm-6">
                            <ul style="color:#fff;">
                                    <li>
                                        <a href="https://www.facebook.com/codesideacademy/" style="background-color:#3b5998; color:white;">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" style="background-color:#1da1f2; color:white;">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" style="background-color:#db4437; color:white;">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" style="background-color:#007bb5; color:white;">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                {{-- </div> --}}
                <!-- /.col-lg-12 -->

            </div>

            </div>
            <!-- /.row -->
        </footer>
    

   
       
    <!-- /.container -->

    </div><!-- /.outer-main-container -->











    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <script>
        i = 0;
            $(document ).ready(function(){

                //navToggle
                $('.menu-toggle').click(function(){
                    $('nav').toggleClass('active')
                });


        //     if($("#search_input").val() == ""){  
    
        //         $("#searchbtn").click(function(){
        //             $("#main_searchbtn").hide();
        //             $("#search_input").css("width","136%");
        //         $("#searchform").slideToggle("500");
        //         });

               

        // }

        //seaerch input section.
        //now the main search btn will active when typing, while the other anchor btn is display:none
         $("input#search_input").keypress(function(){
                 
                    $("span#search_keypress").text(i += 1);
                    
                    if( $("span#search_keypress").text(i += 1)){

                        $("button#search_btn").css({'display':'block'});
                        $("a#search_btn2").css({'display':'none'});

                    }
   });




            //as doc loads, anchor btn is active
                    $("a#search_btn2").css({'display':'block'});

            //onclick of anchor btn, use animation to toggle the width of input search form
                        $("a#search_btn2").click(function(){
                            $("input#search_input").animate({
                            width: 'toggle'
                            });
                        });



                
          // Add smooth scrolling to all anchor links
          $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });


          // Add smooth scrolling to all tags(with or without an attribute)
          $(".header_text_btn").click(function() {
            $('html,body').animate({
            scrollTop: $("#register_section").offset().top},
            800);
         });


         
         $("#loginBtn").click(function(){
             $("#myModal").modal();
            });


            $("#forgotPassword").click(function(){
             $("#forgotPasswordModal").modal();
            });
            






        });


          
        </script>


<script>
       
        </script>





    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>
