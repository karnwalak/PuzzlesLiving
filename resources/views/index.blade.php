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
                      <div class="col-md-6">
                        <div class="card bg-c-red total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Listings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card bg-c-blue total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Enquiries</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="col-md-4">
                        <div class="card bg-c-green total-card">
                          <div class="card-block">
                            <div class="text-left">
                              <h4>489</h4>
                              <p class="m-0">Total Comment</p>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                      <!-- Material statustic card end -->
                      <!-- order-visitor start -->
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