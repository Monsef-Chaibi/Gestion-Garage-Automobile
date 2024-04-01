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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <li class="menu-item">
              <a href="{{route('AdminDash')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Gestion</span>
            </li>
            <li class="menu-item ">
                <a href="{{route('ClientDash')}}" class="menu-link">
                 <i class="fa-solid fa-user w-[2rem]"></i>
                  <div data-i18n="Analytics">Client</div>
                </a>
            </li>
            <li class="menu-item active">
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
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold py-3 mb-0"> <!-- mb-0 to remove the bottom margin -->
                        <span class="text-muted fw-light">Table /</span> Gestion Des Voitures
                    </h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createVehicleModal">
                        Create New Vehicle
                    </button>
                </div>

            <div class="card mt-4">
                <h5 class="card-header">Table Clients</h5>
                <div class="table-responsive text-nowrap"  id='vehicletable'>
                    <div class="lds-roller tableloader" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <table class="table tablecontent">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Fuel Type</th>
                                <th>Registration</th>
                                <th>Client</th> <!-- Assuming you want to show which client the vehicle belongs to -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        @if(!empty($vehicle->photos))
                                            @php
                                            $photos = json_decode($vehicle->photos, true);
                                            @endphp

                                            @foreach($photos as $photo)
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up">
                                                <!-- Update here: Wrap the image in an anchor tag -->
                                                <a href="#imageModal" data-bs-toggle="modal" data-img-src="{{ asset($photo) }}">
                                                    <img src="{{ asset($photo) }}" alt="Vehicle photo" class="rounded-circle">
                                                </a>
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </td>
                                <td>{{ $vehicle->make }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->fuelType }}</td>
                                <td>{{ $vehicle->registration }}</td>
                                <td>{{ $vehicle->client->username }}</td> <!-- Assuming you have a relationship to a client model -->
                                <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item editVehicleBtn" href="javascript:void(0);"
                                        data-vehicle-id="{{ $vehicle->id }}"
                                        >
                                       <i class="bx bx-edit-alt me-2"></i> Edit
                                     </a>

                                     <a class="dropdown-item deleteVehicleBtn" href="javascript:void(0);" data-vehicle-id="{{ $vehicle->id }}">
                                        <i class="bx bx-trash me-2"></i> Delete
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

<!-- Create Vehicle Modal -->
<div class="modal fade mt-[7%]" id="createVehicleModal" tabindex="-1" aria-labelledby="createVehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="lds-roller" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createVehicleModalLabel">Create New Vehicle</h5>
          <!-- Close button -->
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-bs-dismiss="modal">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            <span class="sr-only">Close</span>
          </button>
        </div>
        <form id="createVehicleForm" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="vehicleMake" class="form-label">Make</label>
              <input type="text" class="form-control" id="vehicleMake" name="make" required>
            </div>
            <div class="mb-3">
              <label for="vehicleModel" class="form-label">Model</label>
              <input type="text" class="form-control" id="vehicleModel" name="model" required>
            </div>
            <div class="mb-3">
              <label for="fuelType" class="form-label">Fuel Type</label>
              <select class="form-select" id="fuelType" name="fuelType" required>
                <option value="">Select Fuel Type</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="Electric">Electric</option>
                <option value="Hybrid">Hybrid</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="registration" class="form-label">Registration</label>
              <input type="text" class="form-control" id="registration" name="registration" required>
            </div>
            <!-- Photos input will require custom handling, especially if you plan to upload files -->
            <div class="mb-3">
              <label for="clientID" class="form-label">Client</label>
              <select class="form-select" id="clientID" name="clientID" required>
                <option value="" class="hidden">Choose One</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
                <label for="vehiclePhotos" class="form-label">Vehicle Photos</label>
                <input type="file" class="form-control" id="vehiclePhotos" name="photos[]" multiple required>
                <small class="form-text text-muted">You can select multiple photos.</small>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create Vehicle</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <!-- The image will be dynamically inserted here -->
          <img src="" id="modalImage" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageModal = document.getElementById('imageModal');
        imageModal.addEventListener('show.bs.modal', function (event) {
            // Get the image URL from the clicked link's data-img-src attribute
            let imageUrl = event.relatedTarget.getAttribute('data-img-src');
            // Set the modal's image source to the imageUrl
            document.getElementById('modalImage').src = imageUrl;
        });
    });
</script>


<!-- Edit Vehicle Modal -->
<div class="modal fade" id="editVehicleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="lds-roller editmodaleloader" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Vehicle</h5>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-bs-dismiss="modal">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            <span class="sr-only">Close</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editVehicleForm">
            <input type="hidden" id="editVehicleId" name="id">
            <div class="mb-3">
              <label for="editMake" class="form-label">Make</label>
              <input type="text" class="form-control" id="editMake" name="make">
            </div>
            <div class="mb-3">
              <label for="editModel" class="form-label">Model</label>
              <input type="text" class="form-control" id="editModel" name="model">
            </div>
            <div class="mb-3">
                <label for="editFuelType" class="form-label">Fuel Type</label>
                <select class="form-select" id="editFuelType" name="fuelType" required>
                  <option value="">Select Fuel Type</option>
                  <option value="Petrol">Petrol</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Electric">Electric</option>
                  <option value="Hybrid">Hybrid</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="editRegistration" class="form-label">Registration</label>
              <input type="text" class="form-control" id="editRegistration" name="registration">
            </div>
            <div class="mb-3">
                <label for="editClientID" class="form-label">Client</label>
                <select class="form-select" id="editClientID" name="clientID" required>
                  <option value="" class="hidden">Choose One</option>
                  @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->username }}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="editPhotos" class="form-label">Vehicle Photos</label>
              <input type="file" class="form-control" id="editPhotos" name="photos[]" multiple>
              <div id="editPhotosPreview" class="mt-2"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



<!-- Creat Vehicle Script -->
<script>
    document.getElementById('createVehicleForm').addEventListener('submit', function(e) {
        e.preventDefault();
        var loader = document.getElementById('loader');
        var modalContent = document.querySelector('#createVehicleModal .modal-content');
        var formData = new FormData(this);
        loader.style.display = 'block';
        modalContent.classList.add('blur-effect'); // Add blur effect
        fetch('{{ route("vehicles.store") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json', // Ensure Laravel knows to respond with JSON
            },
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    // Log or display the validation errors
                    console.error('Validation errors:', errorData.errors);
                    throw new Error('Validation failed');
                });
            }
            return response.json();
        })
        .then(data => {
            iziToast.success({
                title: 'Success',
                message: data.success,
                position: 'topRight',
                timeout: 1500,
                onClosed: function() {
                    window.location.reload();
                }
            });
        })
        .catch(error => {
            console.error('Error:', error);
            iziToast.error({
                title: 'Error',
                message: 'There was an issue with your request.'+error,
                position: 'topRight',
                timeout: 1500,
            });
        });
    });
    </script>




<!-- Edit Vehicle Script-->
<script>
    fetch('/vehicle-info/10') // Use an actual ID that exists in your database
  .then(response => response.json())
  .catch(error => console.error('Error:', error));

    $(document).ready(function() {
      // Function to load vehicle details into the modal
      function loadVehicleDetails(id) {
        // Fetch vehicle details from the server
        $.get('/vehicle-info/' + id, function(data) {
          $('#editVehicleId').val(data.id);
          $('#editMake').val(data.make);
          $('#editModel').val(data.model);
          $('#editRegistration').val(data.registration);
          $('#editFuelType').val(data.fuelType);
            $('#editClientID').val(data.clientId);

          // Handle the client selection
          $('#editClient').val(data.clientId);

          let imagesHtml = '';
            data.photos.forEach(function(photo, index) {
            // Start a new flex container for every fourth photo (0, 4, 8, ...)
            if (index % 4 === 0) imagesHtml += `<div class="flex flex-wrap -mx-1">`; // Adjusted margin for closer spacing

            imagesHtml += `
                <div  id="photo_${id}_${index}" class="flex flex-col items-center p-1 w-1/4"> <!-- Adjusted width for 4 images per row -->
                <img src="${photo.url}" class="img-thumbnail w-[100px] h-[100px] max-w-[100px]  mx-auto"> <!-- Center image in the allocated space -->
                <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removePhoto(${id}, ${index})">Remove</button>
                </div>`;

            // Close the flex container after every fourth photo or the last photo
            if ((index + 1) % 4 === 0 || index === data.photos.length - 1) imagesHtml += `</div>`;
            });
            $('#editPhotosPreview').html(imagesHtml);


        });
      }
      let photoRemoved = false;
      // Function to remove a photo
      window.removePhoto = function(vehicleId, index) {
        console.log("Removing photo with ID:", index, " for vehicle:", vehicleId);

        $.ajax({
            url: `/delete-photo/${vehicleId}/${index}`,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(result) {
                // Remove the div containing the photo
                $('#photo_' + vehicleId + '_' + index).remove();
                photoRemoved = true;
                iziToast.success({
                    title: 'Success',
                    message: 'Photo removed successfully.', // Adjust the message as needed
                    position: 'topRight',
                    timeout: 1500
                });


            },
            error: function(error) {
                console.error("Error removing photo: ", error);
                iziToast.error({
                    title: 'Error',
                    message: 'Could not remove the photo.', // Adjust the message as needed
                    position: 'topRight',
                    timeout: 1500
                });
            }
        });
    };

    $('#editVehicleModal').on('hidden.bs.modal', function() {
        if (photoRemoved) {
            window.location.reload();
            photoRemoved = false; // Reset the flag
        }
    });


      // When the edit button is clicked
      $(document).on('click', '.editVehicleBtn', function() {
        var vehicleId = $(this).data('vehicle-id'); // Correctly reference the data attribute
        loadVehicleDetails(vehicleId);
        $('#editVehicleModal').modal('show');
      });

      $('#editVehicleForm').submit(function(e) {
            e.preventDefault();
            var loaderUpdate = document.querySelector('.editmodaleloader');
            var modalUpdate = document.querySelector('#editVehicleModal .modal-content');
            // Assuming you have an input field with the vehicle ID.
            // For example, if your vehicle ID is stored in a hidden input within the form:
            var vehicleId = $('#editVehicleId').val(); // Ensure this ID is correct.
            var formData = new FormData(this);
            loaderUpdate.style.display = 'block';
            modalUpdate.classList.add('blur-effect'); // Add blur effect
            // Dynamically set the URL to include the vehicle ID.
            var url = '/update-vehicle/' + vehicleId;

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false, // Important for files, don't specify content type.
                processData: false, // Important for files, don't process data into a string.
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included.
                },
                success: function(data) {
                   iziToast.success({
                    title: 'Success',
                    message: 'Data has been successfully updated',
                    position: 'topRight',
                    timeout: 1500, // Auto close after 2.5 seconds
                    onClosed: function() {
                        window.location.reload(); // Reload page when toast is closed
                    }
                });
                },
                error: function(error) {
                    loaderUpdate.style.display = 'none'; // Hide the loader
                    modalUpdate.classList.remove('blur-effect'); // Remove blur effect
                    iziToast.error({
                        title: 'Error',
                        message: 'Unexpected error occurred.',
                        position: 'topRight',
                        timeout: 2500, // Auto close after 2.5 seconds
                    });
                }
            });
        });

    });


  </script>




<!-- Delete Vehicle Script-->

<script>
    $(document).ready(function() {
  $('.deleteVehicleBtn').click(function(e) {
    e.preventDefault();

    const vehicleId = $(this).data('vehicle-id');
    const deleteUrl = `/Vehicle/Delete/${vehicleId}`; // Adjust this URL as needed
    var loadertable = document.querySelector('.tableloader');
    var modalContenttable = document.querySelector('#vehicletable .tablecontent');
    // SweetAlert confirmation dialog


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
        loadertable.style.display = 'block';
    modalContenttable.classList.add('blur-effect'); // Add blur effect
        // User confirmed the deletion
        $.ajax({
          url: deleteUrl,
          type: 'DELETE', // Make sure this matches the method expected by your route
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is sent; adjust if your setup differs
          },
          success: function(result) {
            iziToast.success({
                    title: 'Success',
                    message: 'The vehicle has been deleted.',
                    position: 'topRight',
                    timeout: 1500, // Auto close after 2.5 seconds
                    onClosed: function() {
                        window.location.reload(); // Reload page when toast is closed
                    }
                });
          },
          error: function(xhr, ajaxOptions, thrownError) {
            // Handle failure
            loadertable.style.display = 'none'; // Hide the loader
            modalContenttable.classList.remove('blur-effect'); // Remove blur effect
            Swal.fire(
              'Failed!',
              'Failed to delete the vehicle. Please try again.',
              'error'
            );
          }
        });
      }
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
