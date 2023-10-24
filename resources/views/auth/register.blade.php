
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>BISE Multan - Online Verification System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="ArchitectUI HTML Bootstrap 5 Dashboard Template">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="{{url('public/admin/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/ionicons-npm/css/ionicons.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/linearicons-master/dist/web-font/style.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css')}}">
        <link href="{{url('public/admin//styles/css/base.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 g-0 row">
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                
                                <img src="{{url('public/admin/images/biselogo.png')}}" alt="..." class="img-thumbnail">
                               

                                <h1>BISE MULTAN</h1>
                                <h4>
                                    <div >Welcome To Online Verification System,</div>
                                    <span>It only takes a
                                        <span class="text-success">few seconds</span> to create your account</span>
                                </h4>
                                <div>
                                    <form class="" method="POST" action="{{ route('registeraccount') }}">
                                    @csrf
                                        <div class="">
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="exampleEmail" class="form-label">
                                                        <span class="text-danger">*</span>Official Email
                                                    </label>
                                                    <input name="email" value="{{ old('email') }}" id="exampleEmail"
                                                            placeholder="Enter Your Official Email here..." type="text" class="form-control  @error('email') is-invalid @enderror">

                                                            @error('email')
                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>  
                                                            @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="mt-4 d-flex align-items-center">
                                            <h5 class="mb-0">Already have an account?
                                                <a href="{{route('login')}}" class="text-primary">Sign in</a>
                                            </h5>
                                            <div class="ms-auto">
                                                <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xs-none col-lg-5">
                            <div class="slider-light">
                                <div class="slick-slider slick-initialized">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{url('public/admin/images/originals/citynights.jpg')}}');"></div>
                                            <div class="slider-content">
                                                <h3>Bise Multan </h3>
                                                <p>
                                                    Board Of Intermediate and Secondary Education Multan, introducing Online Verification System
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
