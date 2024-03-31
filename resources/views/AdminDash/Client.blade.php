<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Client - Dashboard</title>
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Favicon -->


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('Dash/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('Dash/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('Dash/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('Dash/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('Dash/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('Dash/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('Dash/vendor/js/helpers.js') }}"></script>

    <!-- Config scripts -->
    <script src="{{ asset('Dash/js/config.js') }}"></script>
</head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">

              </span>
              <span class=" demo menu-text fw-bolder ms-2">Home</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Gestion</span>
            </li>
            <li class="menu-item ">
                <a href="index.html" class="menu-link">
                 <i class="fa-solid fa-user w-[2rem]"></i>
                  <div data-i18n="Analytics">Client</div>
                </a>
            </li>
            <li class="menu-item ">
                <a href="index.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Voiture</div>
                </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('Dash/img/avatars/1.png') }}" alt="" class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-center row">
                        <div class="col-sm-7">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                            <p class="mb-4">
                              You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                              your profile.
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                          </div>
                        </div>
                        <div class="col-sm-5 text-center align-items-right text-sm-right">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img
                                src="{{ asset('Dash/img/illustrations/man-with-laptop-light.png') }}"
                                style="height:180px !important"
                                alt="View Badge User"
                                data-app-dark-img="{{ asset('Dash/img/illustrations/man-with-laptop-dark.png') }}"
                                data-app-light-img="{{ asset('Dash/img/illustrations/man-with-laptop-light.png') }}"
                              />
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
               </div>
            <div class="flex flex-wrap -m-2 justify-center"> <!-- Centered cards within the container -->

                <!-- Card 1 (Profits) -->
                <div class="w-[25%] p-2">
                  <div class="card">
                    <div class="card-body flex items-center">
                      <img src="{{ asset('Dash/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded w-14 h-14 mr-4" />
                      <div>
                        <span class="block text-sm font-semibold text-gray-600 mb-2">Profits</span> <!-- Label -->
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 2 (Sales) -->
                <div class="w-[25%] p-2">
                  <div class="card">
                    <div class="card-body flex items-center">
                      <img src="{{ asset('Dash/img/icons/unicons/wallet.png')}}" alt="wallet" class="rounded w-14 h-14 mr-4" />
                      <div>
                        <span class="block text-sm font-semibold text-gray-600 mb-2">Sales</span> <!-- Label -->
                        <h3 class="card-title mb-2">$8,540</h3>
                        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -46.82%</small>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 3 (Payments) -->
                <div class="w-[25%] p-2">
                  <div class="card">
                    <div class="card-body flex items-center">
                      <img src="{{ asset('Dash/img/icons/unicons/paypal.png')}}" alt="paypal" class="rounded w-14 h-14 mr-4" />
                      <div>
                        <span class="block text-sm font-semibold text-gray-600 mb-2">Payments</span> <!-- Label -->
                        <h3 class="card-title mb-2">$15,732</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +88.45%</small>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 4 (Transactions) -->
                <div class="w-[25%] p-2">
                  <div class="card">
                    <div class="card-body flex items-center">
                      <img src="{{ asset('Dash/img/icons/unicons/cc-primary.png')}}" alt="cc primary" class="rounded w-14 h-14 mr-4" />
                      <div>
                        <span class="block text-sm font-semibold text-gray-600 mb-2">Transactions</span> <!-- Label -->
                        <h3 class="card-title mb-2">$23,784</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +154.30%</small>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

    <!-- / Layout wrapper -->



<!-- Core JS -->
<script src="{{ asset('Dash/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('Dash/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('Dash/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('Dash/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('Dash/vendor/js/menu.js') }}"></script>
<!-- Vendors JS -->
<script src="{{ asset('Dash/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('Dash/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('Dash/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
