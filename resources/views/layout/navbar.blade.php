 <nav>
     <div class="logo">
         <img   src="{{ asset('logo.png') }}" alt="">
     </div>
     <ul id="menuList">
         <li> <a href="" class="menu-item">Home</a>
             <div class="info-bar">
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>

             </div>
         </li>
         <li> <a href="" class="menu-item">About</a>
             <div class="info-bar">
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>

             </div>
         </li>
         <li><a href="">Services</a>
             <div class="info-bar">
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>

             </div>
         </li>
         <li><a href="">Product</a>
             <div class="info-bar">
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>

             </div>
         </li>
         <li><a href="">Contact</a>
             <div class="info-bar">
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>
                 <ul>
                     <li><a href="">link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>
                     <li><a href="">link link bla bla bla</a></li>

                 </ul>

             </div>
         </li>
        <li><a style="display:block,color: white" href=""><i class="fa-solid fa-language"></i></a></li>
     </ul>
     <div class="menu-icon" onclick="toggleMenu()">
         <i  class="fa-solid fa-bars"></i>
     </div>
 </nav>

 @yield('content')

 <footer class="text-center text-lg-start text-white mb-0"
     style="background: linear-gradient(to right,#2042be ,#0d2471)">
     <div class="container p-4 pb-0">
         <div class="row">
             <!-- About Us -->
             <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                 <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
                 <p>
                     Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                     consectetur adipisicing elit.
                 </p>
             </div>

             <hr class="w-100 clearfix d-md-none" />

             <!-- Products -->
             <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                 <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                 <p><a class="text-white" href="#">MDBootstrap</a></p>
                 <p><a class="text-white" href="#">MDWordPress</a></p>
                 <p><a class="text-white" href="#">BrandFlow</a></p>
                 <p><a class="text-white" href="#">Bootstrap Angular</a></p>
             </div>

             <hr class="w-100 clearfix d-md-none" />

             <!-- Useful Links -->
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                 <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                 <p><a class="text-white" href="#">Solutions</a></p>
                 <p><a class="text-white" href="#">Become an Affiliate</a></p>
                 <p><a class="text-white" href="#">Shipping Rates</a></p>
                 <p><a class="text-white" href="#">Help</a></p>
             </div>

             <hr class="w-100 clearfix d-md-none" />

             <!-- Contact Us -->
             <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                 <h6 class="mb-4 font-weight-bold">Contact Us</h6>
                 <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                 <p><i class="fas fa-envelope mr-3"></i> evo@gmail.com</p>
                 <p><i class="fas fa-phone mr-3"></i> + 00 00 00 00 00</p>
                 <p><i class="fas fa-print mr-3"></i> + 00 00 00 00</p>
             </div>
         </div>

         <hr class="my-3">

         <div class="p-3 pt-0">
             <div class="row d-flex align-items-center">
                 <!-- Copyright -->
                 <div class="col-md-7 col-lg-8 text-center text-md-start">
                     <div class="p-3">
                         © 2024 Copyright: <a class="text-white" href="#">EVO.com</a>
                     </div>
                 </div>

                 <!-- Social Media Links -->
                 <div class="col-md-5 col-lg-4 text-center text-md-end">
                     <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                             class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                             class="fab fa-twitter"></i></a>
                     <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                             class="fab fa-google"></i></a>
                     <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                             class="fab fa-instagram"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
