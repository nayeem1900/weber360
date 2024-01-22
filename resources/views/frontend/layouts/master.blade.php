
<!DOCTYPE html>
<html>
<head>
    <title>weber360.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css"href="{{asset('public/frontend/css/customized.css')}}">
    <link rel="stylesheet"type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>


    <style type="text/css">

        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .dropdown-menu li{
                position: relative;
            }
            .dropdown-menu .submenu{
                display: none;
                position: absolute;
                left:100%; top:-7px;
            }
            .dropdown-menu .submenu-left{
                right:100%; left:auto;
            }

            .dropdown-menu > li:hover{ background-color: #f1f1f1 }
            .dropdown-menu > li:hover > .submenu{
                display: block;
            }
        }
        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu{
                margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
            }

        }
        /* ============ small devices .end// ============ */

    </style>




      <script type="text/javascript">
//	window.addEventListener("resize", function() {
//		"use strict"; window.location.reload();
//	});


          document.addEventListener("DOMContentLoaded", function(){


              /////// Prevent closing from click inside dropdown
              document.querySelectorAll('.dropdown-menu').forEach(function(element){
                  element.addEventListener('click', function (e) {
                      e.stopPropagation();
                  });
              })



              // make it as accordion for smaller screens
              if (window.innerWidth < 992) {

                  // close all inner dropdowns when parent is closed
                  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                      everydropdown.addEventListener('hidden.bs.dropdown', function () {
                          // after dropdown is hidden, then find all submenus
                          this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                              // hide every submenu as well
                              everysubmenu.style.display = 'none';
                          });
                      })
                  });

                  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
                      element.addEventListener('click', function (e) {

                          let nextEl = this.nextElementSibling;
                          if(nextEl && nextEl.classList.contains('submenu')) {
                              // prevent opening link if link needs to open dropdown
                              e.preventDefault();
                              console.log(nextEl);
                              if(nextEl.style.display == 'block'){
                                  nextEl.style.display = 'none';
                              } else {
                                  nextEl.style.display = 'block';
                              }

                          }
                      });
                  })
              }
              // end if innerWidth

          });
      // DOMContentLoaded  end





  </script>


</head>
{{--website body--}}
<section class="body">
    <div class="container">
        <!--    <div class="col-md-12">-->
        <body>
        <div class="container">
            @include('frontend.layouts.header')
        </div>
        <div class="container">
            @yield('content')
        </div> </br>
        <div class="container">
            @include('frontend.layouts.footer')
        </div>
        <script src="{{asset('public/frontend/js/proper.js')}}" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>


        <script src="{{asset('public/frontend/js/bootstrap.js')}}" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script src="{{asset('public/backend/js/handlebars.min-v4.7.6.js')}}"></script>
        </body>

        <!--  </div>-->




    </div>

</section>

</html>