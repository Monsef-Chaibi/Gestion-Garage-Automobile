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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

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
            <li class="menu-item ">
              <a href="{{route('AdminDash')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Gestion</span>
            </li>
            <li class="menu-item active">
                <a href="{{route('ClientDash')}}" class="menu-link">
                 <i class="fa-solid fa-user w-[2rem]"></i>
                  <div data-i18n="Analytics">Client</div>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{route('VoitureDash')}}" class="menu-link">
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
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                  <!-- Search -->
                  <div class="navbar-nav align-items-center">
                      <div class="nav-item d-flex align-items-center">
                        <i class="bx bx-search fs-4 lh-0"></i>
                        <input
                          type="text"
                          id="vehicleSearchInput"
                          class="form-control border-0 shadow-none"
                          placeholder="Search..."
                          aria-label="Search..."
                        />
                        <!-- Results will be displayed in this div -->
                        <div id="searchResultsContainer" class="search-results"></div>
                      </div>
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
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> Gestion Des Clients</h4>
            <div class="card">
                <h5 class="card-header">Table Clients</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($users as $user)
                          <tr>
                            <td><strong>{{ $user->username }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phoneNumber }}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editUserModal"
                                    data-user-id="{{ $user->id }}"
                                    data-username="{{ $user->username }}"
                                    data-email="{{ $user->email }}"
                                    data-address="{{ $user->address }}"
                                    data-phone="{{ $user->phoneNumber }}">
                                   <i class="bx bx-edit-alt me-1"></i> Edit
                                 </a>
                                 <a class="dropdown-item delete-link" href="javascript:void(0);" data-user-id="{{ $user->id }}">
                                    <i class="bx bx-trash me-1"></i> Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
            </div>


        </div>
      </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade mt-[7%]" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="lds-roller" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
        <!-- Close button -->
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-bs-dismiss="modal">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            <span class="sr-only">Close</span>
        </button>
        </div>
        <form id="editUserForm">
          <div class="modal-body">
            <input type="hidden" id="editUserId" name="userId">
            <div class="mb-3">
              <label for="editUsername" class="form-label">Username</label>
              <input type="text" class="form-control" id="editUsername" name="username">
            </div>
            <div class="mb-3">
              <label for="editEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editEmail" name="email">
            </div>
            <div class="mb-3">
              <label for="editAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="editAddress" name="address">
            </div>
            <div class="mb-3">
              <label for="editPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="editPhone" name="phoneNumber">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var editUserModal = document.getElementById('editUserModal');
      var closeButton = document.querySelector('[data-modal-hide="editUserModal"]'); // Assuming this is how you've set up your close button

      // Event listener for opening the modal and filling in the data
      editUserModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-user-id');
        var username = button.getAttribute('data-username');
        var email = button.getAttribute('data-email');
        var address = button.getAttribute('data-address');
        var phone = button.getAttribute('data-phone');

        // Populate the form fields
        document.getElementById('editUserId').value = userId;
        document.getElementById('editUsername').value = username;
        document.getElementById('editEmail').value = email;
        document.getElementById('editAddress').value = address;
        document.getElementById('editPhone').value = phone;
      });

      var editUserForm = document.getElementById('editUserForm');
      var loader = document.getElementById('loader');
      var modalContent = document.querySelector('#editUserModal .modal-content');
        editUserForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        loader.style.display = 'block';
        modalContent.classList.add('blur-effect'); // Add blur effect
        var formData = new FormData(editUserForm);

        // AJAX request
        fetch('{{ route("user.update") }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                loader.style.display = 'none'; // Hide the loader
                modalContent.classList.remove('blur-effect'); // Remove blur effect
                // Display error messages with timeout and reload page on close
                iziToast.error({
                    title: 'Error',
                    message: data.error,
                    position: 'topRight',
                    timeout: 2500, // Auto close after 2.5 seconds
                    onClosed: function() {
                        window.location.reload(); // Reload page when toast is closed
                    }
                });
            } else if (data.success) {
                // Display success message with timeout and reload page on close
                iziToast.success({
                    title: 'Success',
                    message: data.success,
                    position: 'topRight',
                    timeout: 1500, // Auto close after 2.5 seconds
                    onClosed: function() {
                        window.location.reload(); // Reload page when toast is closed
                    }
                });
            }
        })
        .catch(error => {
            // Handle any other errors
            loader.style.display = 'none'; // Hide the loader
            modalContent.classList.remove('blur-effect'); // Remove blur effect
            console.error('Error:', error);
            iziToast.error({
                title: 'Error',
                message: 'Unexpected error occurred.',
                position: 'topRight',
                timeout: 2500, // Auto close after 2.5 seconds
            });
        });
    });




    var deleteLinks = document.querySelectorAll('.delete-link');

  deleteLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      var userId = this.getAttribute('data-user-id'); // Get the user ID

      // Show SweetAlert2 confirmation dialog
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // User confirmed the deletion, send the request
          fetch('users/' + userId, {

            method: 'DELETE', // or 'POST', depending on your backend setup
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {

            iziToast.success({
                    title: 'Success',
                    message: data.success,
                    position: 'topRight',
                    timeout: 1500, // Auto close after 2.5 seconds
                    onClosed: function() {
                        window.location.reload(); // Reload page when toast is closed
                    }
                });
            // Optionally, refresh the page or update the UI to reflect the deletion
          })
          .catch((error) => {
            console.error('Error:', error);
            Swal.fire(
              'Error',
              'There was an issue deleting your item.',
              'error'
            );
          });
        }
      })
    });
  });
    });
    </script>



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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>
