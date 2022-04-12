<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    

    @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
        <link href="/style/main.css" rel="stylesheet" />
        {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/> --}}
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" width="100" class="my-4" alt="" />
          </div>

          <div class="list-group list-group-flush">
            <a
              href="/"
              class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}"
              >Admin Dashboard</a
            >

            <a
              href="{{ route('product.index') }}"
              class="list-group-item list-group-item-action {{ request()->is('admin/product') ? 'active' : '' }} "
              >Product</a
            >

            <a
              href="/"
              class="list-group-item list-group-item-action {{ request()->is('admin/product-gallery*') ? 'active' : '' }} "
              >Gallery Product</a
            >
            
            <a
              href="{{ route('category.index') }}"
              class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}"
              >Categories</a
            >
            <a
              href=""
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href="/"
              class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}"
              >Users</a
            >

            <a href="" class="list-group-item list-group-item-action"
              >Sign Out</a
            >
          </div>

        </div>

        <!-- page content -->
            <div id="page-content-wrapper">
                <nav
                    class="
                        navbar navbar-expand-lg navbar-light navbar-store
                        fixed-top
                    "
                    data-aos="fade-down"
                    >
                        <div class="container-fluid">
                            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                            </button>
                            <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            >
                            <span class="navbar-toggler-icon"> </span>
                            </button>
                    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- dekstop menu -->
                                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a
                                    href="#"
                                    class="nav-link"
                                    id="navbarDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    >
                                    <img
                                        src="/images/user_pc.png"
                                        alt=""
                                        class="rounded-circle mr-2 profile-picture"
                                    />
                                    Hi, adzan
                                    </a>
                                    <div class="dropdown-menu">
                               
                                    <div class="dropdown-divider"></div>
                                        <a href="/" class="dropdown-item">Logout</a>      
                                    </div>
                                </li>
                    
                                
                                </ul>
                    
                                <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    Hi,Angga
                                    </a>
                                </li>
                              
                                </ul>
                            </div>
                        </div>

                        
                </nav>

                <!-- section content -->
                @yield('content')

            </div>


      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script> --}}
    <script>
      AOS.init();
    </script>
     <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
   </script>
    <script>
      $('#menu-toggle').click(function(e) {
        e.preventDefault();
        $('#wrapper').toggleClass('toggled');
      });
    </script>
    @stack('addon-script')
  </body>
</html>
