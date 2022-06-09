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
                          <span class="text-danger mx-4" id="derror_msg"></span>
                          <span class="text-success mx-4" id="dsuccess_msg"></span>
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12 p-0 d-flex justify-content-end pb-4">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    Add New
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Testimonials</h5>
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
                                                                <th>Name</th>
                                                                <th>Title</th>
                                                                <th>Image</th>
                                                                <th>Description</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @php $i=1; @endphp
                                                          @foreach($testimonials as $testimonial)
                                                            <tr>
                                                                <th>{{$i++}}</th>
                                                                <td>{{$testimonial->name}}</td>
                                                                <td>{{$testimonial->title}}</td>
                                                                <td><a target="_blank" href="{{$testimonial->link}}">View</a></td>
                                                                <td>{{$testimonial->description}}</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                    <button type="button"  class="btn btn-danger btn-sm btnDelete" value="{{$testimonial->id}}">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    <a type="button" href="{{url('edittestimonial/'.$testimonial->id)}}" class="btn btn-inverse btn-sm ml-2">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form class="form">
              @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add a new testimonial</h5>
                        <button type="button" class="close" data-dismiss="editmodal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <span class="text-danger field_error" id="image_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Name">
                                    <span class="text-danger field_error" id="name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Title">
                                    <span class="text-danger field_error" id="title_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea rows="5" class="form-control" name="description" placeholder="About page content"></textarea>
                                    <span class="text-danger field_error" id="description_error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <span class="text-success mx-5" id="success_msg"></span>
                    <span class="text-danger mx-5" id="error_msg"></span>
                </div>
            </form>
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
                  url: "{{ url('addtestimonial') }}",
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
          $('.btnDelete').click(function(){
            var id = $(this).val();
            $.ajax({
                url: "{{ url('deletetestimonial') }}",
                type: "POST",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    if (data.status == 'success') {
                        $('#dsuccess_msg').html(data.message);
                        setTimeout(function() {
                            window.location.href = "{{ url('/testimonials') }}";
                        }, 2000);
                    } else {
                        $('#derror_msg').html(data.error);
                    }
                }
            });
          })
      });
  </script>
</body>

</html>
