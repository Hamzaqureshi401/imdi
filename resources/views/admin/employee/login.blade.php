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

                <div class="h-100 bg-plum-plate bg-animation">

                    <div class="d-flex h-100 justify-content-center align-items-center">

                        <div class="mx-auto app-login-box col-md-8">

                            <div class="app-logo-inverse mx-auto mb-3"></div>

                            <div class="modal-dialog w-100 mx-auto">

                                <div class="modal-content">

                                    <div class="modal-body">

                                        <div class="h5 modal-title text-center">

                                            <h4 class="mt-2">

                                                <div>Welcome To Online Verification System</div>

                                                <span>Please sign in to your account below.</span>

                                                

                                            </h4>

                                            @if (session('success'))

                                            <div class="alert alert-success alert-dismissible fade show" role="alert">

                                                    

                                            {{ session('success') }}

                                                </div>

                                            @endif

                                        </div>

                                        <form class="" method="POST" action="{{ route('login') }}">

                                            @csrf

                                            <div class="">

                                                <div class="col-md-12">

                                                    <div class="position-relative mb-3">

                                                        <input name="email" value="{{ old('email') }}" id="exampleEmail"

                                                            placeholder="" type="text" class="form-control  @error('email') is-invalid @enderror">



                                                            @error('email')

                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>  

                                                            @enderror

                                                    </div>

                                                </div>

                                                <div class="col-md-12">

                                                    <div class="position-relative mb-3">

                                                        <input name="password" id="examplePassword"

                                                            placeholder="" type="password" class="form-control @error('password') is-invalid @enderror">

                                                            @error('password')

                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>

                                                            @enderror

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="position-relative form-check mb-3">

                                                <input name="check" {{ old('remember') ? 'checked' : '' }} id="exampleCheck" type="checkbox" class="form-check-input">

                                                <label for="exampleCheck" class="form-label form-check-label">Keep me logged in</label>

                                            </div>

                                      

                                        

                                        <div class="modal-footer clearfix">
                                        <div class="float-start">

                                            <a href="{{route('createaccount')}}" class="btn btn-info btn-lg">Employee Login </a>

                                        </div>

                                        <div class="float-start">

                                                <a href="{{route('createaccount')}}" class="btn btn-dark btn-lg">Create New Account </a>

                                            </div>

                                               

                                            <div class="float-end">

                                                <input type="submit" name="submit" class="btn btn-dark btn-lg"  value="Login to Account">

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

    </body>

</html>

