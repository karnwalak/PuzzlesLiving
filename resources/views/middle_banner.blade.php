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
                      <h5 class="m-b-10">Middle Banners</h5>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.php"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Middle Banners</a>
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
                      <div class="col-md-12 p-0 d-flex justify-content-end pb-4">
                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">
                          Add New
                        </button>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h5>Middle Banners</h5>
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
                      <div class="card-block table-border-style">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>1</th>
                                <td>1</td>
                                <td>Otto</td>
                                <td>
                                  <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a new slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter position">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Position</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter position">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Warning Section Ends -->

  <!-- Required Jquery -->
  @include('scripts')
</body>

</html>