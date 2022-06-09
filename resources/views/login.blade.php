<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    @include('headtags')
</head>

<body themebg-pattern="theme1">
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

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" id="form">
                      @csrf
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png" style="width:200px">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control">
                                    <span class="form-bar text-danger" id="email_error"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control">
                                    <span class="form-bar text-danger" id="password_error"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12 text-center">
                                         <button type="submit"
                                                class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
                                                in</button>
                                                <span class="text-success" id="success_msg"></span>
                                                <span class="text-danger" id="error_msg">{{Session::get('error')}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    @include('scripts')
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
              e.preventDefault();
                $.ajax({
                    url: "{{ url('login') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 'success') {
                            $('#success_msg').html(data.message);
                            setTimeout(function() {
                                window.location.href = "{{ url('/dashboard') }}";
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
