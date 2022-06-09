<!DOCTYPE html>
<html lang="en">

<head>
  <title>Puzzles Admin</title>
  @include('headtags')
</head>

<body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
    <div class="loader-track">
      <div class="preloader-wrapper">
        <div class="spinner-layer spinner-blue">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>

        <div class="spinner-layer spinner-yellow">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>

        <div class="spinner-layer spinner-green">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      @include('navbar')

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
         @include('sidebar')
          <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Dashboard</h5>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
              <!-- Main-body start -->
              <div class="main-body">
                <div class="page-wrapper">
                  <!-- Page-body start -->
                  <div class="page-body">
                    <div class="row">
                      <!-- Material statustic card start -->
                      <div class="col-md-4">
                        <div class="card bg-c-red total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Listings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card bg-c-blue total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Enquiries</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card bg-c-green total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Comment</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Material statustic card end -->
                      <!-- order-visitor start -->


                      <!-- order-visitor end -->

                      <!--  sale analytics start -->
                      <div class="col-xl-12 col-md-12">
                        <div class="card table-card">
                          <div class="card-header">
                            <h5>Member’s performance</h5>
                            <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-block">
                            <div class="table-responsive">
                              <table class="table table-hover m-b-0 without-header">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                          <h6>Shirley Hoe</h6>
                                          <p class="text-muted m-b-0">Sales executive , NY</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <h6 class="f-w-700">$78.001<i class="fas fa-level-down-alt text-c-red m-l-10"></i>
                                      </h6>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                          <h6>James Alexander</h6>
                                          <p class="text-muted m-b-0">Sales executive , EL</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i>
                                      </h6>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                          <h6>Shirley Hoe</h6>
                                          <p class="text-muted m-b-0">Sales executive , NY</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i>
                                      </h6>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                          <h6>Nick Xander</h6>
                                          <p class="text-muted m-b-0">Sales executive , EL</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i>
                                      </h6>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                          </div>
                        </div>
                      </div>

                      <!--  sale analytics end -->
                    </div>
                  </div>
                  <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Warning Section Ends -->

  <!-- Required Jquery -->
  @include('scripts')
</body>

</html>