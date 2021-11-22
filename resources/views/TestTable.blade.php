<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Section Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Manager
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dash">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="nc-icon nc-single-copy-04"></i>Book</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/bookCreate"><i class="nc-icon nc-minimal-right"></i>Create</a>
                </li>
                {{-- <li>
                    <a href="/bookEdit/{id}"><i class="nc-icon nc-minimal-right"></i>Edit</a>
                </li> --}}
                <li>
                    <a href="/bookShow"><i class="nc-icon nc-minimal-right"></i>Show</a>
                </li>
            </ul>
        </li>

        <li>
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="nc-icon nc-box-2"></i>Orders</a>
          <ul class="collapse list-unstyled" id="homeSubmenu2">
              <li>
                  <a href="/orderShow"><i class="nc-icon nc-minimal-right"></i>show</a>
              </li>
             
          </ul>
      </li>

        <li>
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="nc-icon nc-layout-11"></i>Sections</a>
          <ul class="collapse list-unstyled" id="homeSubmenu1">
              <li>
                  <a href="/sectionCreate"><i class="nc-icon nc-minimal-right"></i>Create</a>
              </li>
              {{-- <li>
                  <a href="sectionEdit/{id}"><i class="nc-icon nc-minimal-right"></i>Edit</a>
              </li> --}}
              <li>
                  <a href="/section/show"><i class="nc-icon nc-minimal-right"></i>Show</a>
              </li>
          </ul>
      </li>
          
       
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Book Section Dashboard </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <form action="{{ route('autocomplete1') }}" method="GET">
                  @csrf
                <input type="text" value="" class="form-control"  name="search" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">

          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Show Sections</h5>
                @include('flash-message')
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                   Section Name
                    </th>
                    <th>
                      Edit Section
                    </th>
                    <th>
                      Delete Section
                    </th>
                  </thead>
                    <tbody>@if ($sections)
              @foreach ($sections as $section)
                      <tr>
                        
                <td> <h6 class="mt-0">{{$section->name}}</h6></td>
                 <td><a href="{{ url('sectionEdit/'.$section->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Edit</a></td>
                 <td><a href="{{ url('sectionDelete/'.$section->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Delete</a></td>

             
                      </tr> @endforeach
              @else
              There is No book to show..
              @endif
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
 
    <!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</body>

</html>
