<!DOCTYPE html>
<html>
   <head>
    <base href="/public">

      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>ShoeBox</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area" style="background-color: white;">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 40%; padding: 20px;">
                  
                     <div class="img-box">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box" style="color: black;">
                        <h1>
                           {{$product->title}}
                        </h1>
                           @if($product->discount_price!=null)
                        <h3>
                           ${{$product->discount_price}}
                        </h3>
                        <h3 style="text-decoration: line-through;">
                           ${{$product->price}}
                        </h3>
                        @else
                        <h3>
                           ${{$product->price}}
                        </h3>
                        @endif
                        <h6>Product Brand: {{$product->category}}</h6>
                        <h6>Product Description: {{$product->description}}</h6>
                        <h4>Available Quantity: {{$product->quantity}}</h4>
                     </div>
                  </div>
               </div>


      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <!-- <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         </p>
      </div> -->

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>