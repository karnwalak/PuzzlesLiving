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
                                            <h5 class="m-b-10">About Page Content</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">About Page Content</a>
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
                                    <form id="form">
                                      @csrf
                                        <div class="page-body">
                                            <div class="row">
                                                <input type="hidden" name="pid" value="{{isset($data[0]->id) ? $data[0]->id : ''}}">
                                                <h4>About Us</h4>
                                                <textarea rows="10" id="editor1" name="description">{{isset($data[0]->id) ? $data[0]->description : ''}}</textarea>
                                                <span class="text-danger" id="description_error"></span>
                                                <h4>Why Us</h4>
                                                <textarea rows="10" id="editor2" name="why_us">{{isset($data[0]->id) ? $data[0]->why_us : ''}}</textarea>
                                                <span class="text-danger" id="why_us_error"></span>
                                                <span class="text-danger" id="error_msg"></span>
                                                <span class="text-success" id="success_msg"></span>
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
            $('#form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ url('addaboutpage') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 'success') {
                            $('#success_msg').html(data.message);
                            // setTimeout(function() {
                            //     window.location.href = "{{ url('/dashboard') }}";
                            // }, 2000);
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
    <script>
      CKEDITOR.replace('editor1');
      CKEDITOR.replace('editor2');
    </script>
</body>

</html>
