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
                                            <h5 class="m-b-10">Testimonials</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Testimonials</a>
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
                                <div class="card">
                                  <div class="card-header">
                                    <h5>Testimonials</h5>
                                    <span class="text-danger mx-4" id="error_msg"></span>
                                    <span class="text-success mx-4" id="success_msg"></span>
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
                                              <form class="form">
                                                @csrf
                                              <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                      <input type="hidden" name="pid" value="{{$testimonial->id}}">
                                                        <label for="exampleInputEmail1">Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                        <span class="text-danger field_error" id="image_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control" value="{{$testimonial->name}}" name="name" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Enter Name">
                                                        <span class="text-danger field_error" id="name_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" class="form-control" value="{{$testimonial->title}}" name="title" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Enter Title">
                                                        <span class="text-danger field_error" id="title_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea rows="5" class="form-control" name="description" placeholder="About page content">{{$testimonial->description}}</textarea>
                                                        <span class="text-danger field_error" id="description_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                  <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </form>
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
    <script>
      $(document).ready(function() {
          $('.form').submit(function(e) {
            e.preventDefault();
              $.ajax({
                  url: "{{ url('updatetestimonial') }}",
                  type: "POST",
                  data: new FormData(this),
                  contentType: false,
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success: function(data) {
                      if (data.status == 'success') {
                          $('#success_msg').html(data.message);
                          setTimeout(function() {
                              window.location.href = "{{ url('/testimonials') }}";
                          }, 2000);
                      } else {
                          $('#error_msg').html(data.error);
                          $.each(data.errors, function(key, value) {
                              $('#' + key + '_error').html(value);
                          });
                      }
                  }
              });
          });
      });
  </script>
</body>

</html>
