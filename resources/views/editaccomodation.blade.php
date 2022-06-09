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
                      <h5 class="m-b-10">Edit Accomodation</h5>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.php"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="accomodation.php"> Accomodation</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Edit Accomodation</a>
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
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Rent</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Rent">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Distance</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Distance">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Features</label>
                          <div class="row">
                          <div class="col-md-3"> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Feature 1"></div>
                          <div class="col-md-3"> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Feature 2"></div>
                          <div class="col-md-3"> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Feature 3"></div>
                          <div class="col-md-3"> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Feature 4"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea rows="10" id="editor1" placeholder="Edit Accomodation"></textarea>
                      </div>
                      <div class="col-md-12 d-flex justify-content-end p-0 py-4">
                        <button class="btn btn-success waves-effect waves-light">Submit</button>
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
  <!-- Warning Section Ends -->

  <!-- Required Jquery -->
  @include('scripts')
</body>

</html>