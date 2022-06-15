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
                                            <h5 class="m-b-10">Edit Accomodations</h5>
                                            <span class="text-danger" id="error_msg"></span>
                                            <span class="text-success" id="success_msg"></span>
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
                                            <li class="breadcrumb-item"><a href="#!">Edit Accomodations</a>
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
                                    <form class="form" enctype="multipart/form-data">
                                      @csrf
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="hidden" name="pid" value="{{$data->id}}">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Enter name" value="{{$data->name}}">
                                                        <span class="text-danger field_error" id="name_error"></span>
                                                    </div>
                                                </div>
                                                @php $i=1; @endphp
                                                @foreach($data->image as $image)
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Image{{$i}}</label>
                                                    <div class="form-group">
                                                        <img src="{{$image->link}}" alt="Not Found!"
                                                            style="width:100px;height:100px;">
                                                        <input type="file" class="form-control" name="image[]" multiple>
                                                        <span class="text-danger field_error" id="image_error"></span>
                                                    </div>
                                                </div>
                                                @php $i++; @endphp
                                                @endforeach
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Address</label>
                                                        <input type="text" class="form-control" name="address"
                                                            placeholder="Enter Address" value="{{$data->address}}">
                                                        <span class="text-danger field_error" id="address_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Rent</label>
                                                        <input type="text" class="form-control" name="rent"
                                                            placeholder="Enter Rent" value="{{$data->rent}}">
                                                        <span class="text-danger field_error" id="rent_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Distance</label>
                                                        <input type="text" class="form-control" name="distance"
                                                            placeholder="Enter Distance" value="{{$data->distance}}">
                                                        <span class="text-danger field_error"
                                                            id="distance_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                  @php $ff = explode(',',$data->features) @endphp
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Features</label>
                                                        <div class="row">
                                                            <div class="col-md-3"> <input type="text"
                                                                    class="form-control" name="feature[]"
                                                                    placeholder="Enter Feature 1" value="{{isset($ff[0]) ? $ff[0] : ''}}"></div>
                                                            <div class="col-md-3"> <input type="text"
                                                                    class="form-control" name="feature[]"
                                                                    placeholder="Enter Feature 2" value="{{isset($ff[1]) ? $ff[1] : ''}}"></div>
                                                            <div class="col-md-3"> <input type="text"
                                                                    class="form-control" name="feature[]"
                                                                    placeholder="Enter Feature 3" value="{{isset($ff[2]) ? $ff[2] : ''}}"></div>
                                                            <div class="col-md-3"> <input type="text"
                                                                    class="form-control" name="feature[]"
                                                                    placeholder="Enter Feature 4" value="{{isset($ff[3]) ? $ff[3] : ''}}"></div>
                                                        </div>
                                                        <span class="text-danger field_error" id="feature_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Description</label>
                                                    <textarea rows="10" id="editor1" name="description" placeholder="Add Accomodations">{{$data->description}}</textarea>
                                                    <span class="text-danger field_error" id="description_error"></span>
                                                </div>
                                                <div class="col-md-12 d-flex justify-content-end p-0 py-4">
                                                    <button type="submit"
                                                        class="btn btn-success waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                  url: "{{ url('updateAccomodation') }}",
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
                              window.location.href = "{{ url('/accomodations') }}";
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
