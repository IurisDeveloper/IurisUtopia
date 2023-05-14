 <style>
     footer {
         background: transparent linear-gradient(0deg, #3932FA 0%, #9A3AF9 64%, #FA41F9 100%) 0% 0% no-repeat padding-box !important;
         opacity: 100% !important;
         backdrop-filter: blur(19px) !important;
         margin-top: 100px !important;
     }

     #email {
         background: transparent linear-gradient(200deg, #00031B 0%, #3932FA 100%) 0% 0% no-repeat padding-box;
         border: 1px solid #FFFFFF;
         border-radius: 5px;
         opacity: 0.26;
     }

     .newsletter {
         background: transparent linear-gradient(188deg, #FA41F9 0%, #3932FA 100%) 0% 0% no-repeat padding-box;
         border: 1px solid #FFFFFF;
         border-radius: 5px;
         opacity: 0.45;
     }
 </style>

 <!-- footer -->
 <footer>
     <div class="container" style="color:white">
         <div class="col-lg-6">
             <p style="max-width: 75%;float: none;margin: 0 auto;">This website provides general
                 information
                 only and we
                 make
                 no
                 warranties about
                 its accuracy or
                 completeness. Your use of this information is at your own risk. <a
                     style="color: #3932FA !important">Learn More<i class="fa fa-arrow-right"></i></a></p>
             <form style="margin-top: 50px">
                 <input type="text" name="email" id="email" placeholder="Your Email">
                 <button class="newsletter">Newsletter</button>
             </form>
             <img src="img/logo/Group 25.png" style="margin-top: 70px">
             <p>Powered by Etherium</p>
         </div>
         <div class="col-lg-2">
             <h2>Protocol</h2>
             <a style="color:white">
                 <p>Whitepaper</p>
             </a>
             <a style="color:white">
                 <p>Documentations</p>
             </a>
             <a style="color:white">
                 <p>Application</p>
             </a>
             <a style="color:white">
                 <p>Developers</p>
             </a>
         </div>
         <div class="col-lg-2">
             <h2>Community</h2>
             <a style="color:white">
                 <p>Research</p>
             </a>
             <a style="color:white">
                 <p>Press Release</p>
             </a>
             <a style="color:white">
                 <p>Connect with us</p>
             </a>
             <a style="color:white">
                 <p>Community Management</p>
             </a>
             <a style="color:white">
                 <p>Join Discord</p>
             </a>
             <a style="color:blue">
                 <p>Learn more<i class="fa fa-arrow-right"></i>
             </a></p>
         </div>
         <div class="col-lg-2">
             <h2>Privacy</h2>
             <a style="color:white">
                 <p>Article Guidelines</p>
             </a>
             <a style="color:white">
                 <p>Privacy Policy</p>
             </a>
             <a style="color:white">
                 <p>Terms of Use</p>
             </a>
             <a style="color:blue">
                 <p>Learn more<i class="fa fa-arrow-right"></i>
             </a></p>
         </div>
         <!-- social media links -->
         {{-- <div class="social">
             <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
             <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
             <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
             <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
         </div> --}}
         <!-- copy right -->
         {{-- <p class="copy-right">&copy; copyright 2023, All rights are reserved.</p> --}}
     </div>
 </footer>
 <!-- footer end -->

 <!-- Scroll to top -->
 <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

 </div>

 <!-- Javascript files -->
 <!-- jQuery -->
 <script src="{{ asset('js/jquery.js') }}"></script>
 <!-- Bootstrap JS -->
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <!-- WayPoints JS -->
 <script src="{{ asset('js/waypoints.min.js') }}"></script>
 <!-- Include js plugin -->
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 <!-- One Page Nav -->
 <script src="{{ asset('js/jquery.nav.js') }}"></script>
 <!-- Respond JS for IE8 -->
 <script src="{{ asset('js/respond.min.js') }}"></script>
 <!-- HTML5 Support for IE -->
 <script src="{{ asset('js/html5shiv.js') }}"></script>
 <!-- Custom JS -->
 <script src="{{ asset('js/custom.js') }}"></script>
 </body>

 </html>
