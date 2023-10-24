
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{{env('APP_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="ArchitectUI HTML Bootstrap 5 Dashboard Template">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="{{url('public/admin/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/ionicons-npm/css/ionicons.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/linearicons-master/dist/web-font/style.css')}}">
        <link rel="stylesheet" href="{{url('public/admin/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css')}}">
        <link href="{{url('public/admin/styles/css/base.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 g-0 row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{url('public/admin/images/originals/citynights.jpg')}}');"></div>
                                            <div class="slider-content">
                                                <h3>BISE MULTAN</h3>
                                                <p>
                                                    Board Of Intermediate and Secondary Education Multan  Online Verification System
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-8 col-lg-6">
                              
                                <img src="{{url('public/admin/images/biselogo.png')}}" alt="..." class="img-thumbnail">
                               

                                <h1>BISE MULTAN</h1>
                                <h4>
                                    <div>Forgot your Password?</div>
                                    <span>Use the Registered Email to recover it.</span>
                                </h4>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div>
                                    <form class="" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                        <div class="">
                                            <div class="col-md-12">
                                                <div class="position-relative mb-3">
                                                    <label for="exampleEmail" class="form-label">Email</label>
                                                    <input name="email" id="exampleEmail"
                                                        placeholder="Email here..." value="{{ old('email') }}"  type="email" class="form-control">
                                                        @error('email')
                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>  
                                                            @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex align-items-center">
                                            <h6 class="mb-0">
                                                <a href="{{route('login')}}" class="text-primary">Sign in existing account</a>
                                            </h6>
                                            <div class="ms-auto">
                                                <button type="submit" class="btn btn-primary btn-lg">Recover Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- plugin dependencies -->
        <script type="text/javascript" src="./vendors/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="./vendors/slick-carousel/slick/slick.min.js"></script>
        <!-- custome.js -->
        <script type="text/javascript" src="./js/carousel-slider.js"></script>
    </body>
</html>
