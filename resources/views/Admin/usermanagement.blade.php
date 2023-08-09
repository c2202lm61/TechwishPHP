<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.snow.css') }} " rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->





                </li><!-- End Notification Nav -->



                </li><!-- End Messages Nav -->



            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user_management') }}">
                    <i class="bi bi-person"></i>
                    <span>PROFILE USER MANAGERMENT</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.html">
                    <i class="bi bi-dash-circle"></i>
                    <span>Error 404</span>
                </a>
            </li><!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->
    <section class="dashboard section">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">



                <div class="card-body">
                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#">1</a></th>
                                <td>Duong dep trai</td>
                                <td><a href="#" class="text-primary">0868284726</a>
                                </td>
                                <td>duongngo533@gmail.com</td>
                                <td><span class="badge bg-success">duongquadeptrai</span></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <form class="email-signup" action="{{ route('register') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="u-form-group">
                      <input type="name" for="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                       placeholder="User Name" name="name" class="name-input"/>
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
              
                    <div class="u-form-group">
                      <input  for="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone"
                       placeholder="Phone" name="phone" class="name-input"/>
                      <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>
              
                    <div class="u-form-group">
                      <input type="email" :value="old('email')" required autocomplete="username" for="email" id="email" name = "email"placeholder="Email"/>
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
              
                    <div class="u-form-group">
                      <input type="password" name="password" placeholder="Password"  type="password"
                      name="password" id="password"
                      required autocomplete="new-password" />
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
              
                    <div class="u-form-group">
                      <input for="password_confirmation" :value="__('Confirm Password')" type="password" placeholder="Confirm Password"
                      id="password_confirmation" class="block mt-1 w-full"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password"/>
                    </div>
              
                    <div class="u-form-group">
                      <button>{{ __('Register') }}</button>
                    </div>
                  </form>
            </div>
        </div>
    </section>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ url('assets/vendor/chart.js/chart.umd.js') }} "></script>
    <script src="{{ url('assets/vendor/echarts/echarts.min.js') }} "></script>
    <script src="{{ url('assets/vendor/quill/quill.min.js') }} "></script>
    <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js') }} "></script>
    <script src="{{ url('assets/vendor/tinymce/tinymce.min.js') }} "></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
