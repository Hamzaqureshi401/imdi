<!doctype html>

<html lang="en">

    <head>

         <style>
        .abc {
            background-color: #ffffff;
        }
        
        </style>
            
        
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
    
 <!-- Set the background color to white -->

    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="abc">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">

                        <!-- Display the logo with specified dimensions before the form -->
                 <center>    <div style=" background: url('{{ asset('public/admin/images/logo.png') }}');background-repeat: no-repeat;background-size: 200px 50px;width: 200px;height: 50px;display: flex;align-items: center;justify-content: center;"></div></center>

                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">

                                        <div class="h5 modal-title text-center">

                                            <h3>

                                          
                                                <strong>
                                                    <div style="color: #E42B2B;">IMDI Warehouse Management System</div>
                                                </strong>
                                          


                                            

                                                

                                            </h3>

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

                                                            placeholder="Enter Your Email" type="text" class="form-control  @error('email') is-invalid @enderror">



                                                            @error('email')

                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>  

                                                            @enderror

                                                    </div>

                                                </div>

                                                <div class="col-md-12">

                                                    <div class="position-relative mb-3">

                                                        <input name="password" id="examplePassword"

                                                            placeholder="Enter Your Password" type="password" class="form-control @error('password') is-invalid @enderror">

                                                            @error('password')

                                                            <em id="firstname-error" class="error invalid-feedback">{{$message}}</em>

                                                            @enderror

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="position-relative form-check mb-3">

                                                <input name="remember"  {{ old('remember') ? 'checked' : '' }} id="remember" type="checkbox" class="form-check-input">

                                                <label for="exampleCheck" class="form-label form-check-label">Keep me logged in</label>

                                            </div>
                                            <div class="position-relative form-check mb-3">

                                               
                                            </div>

                                      

                                        

                                        <div class="modal-footer clearfix">
                                        

                                        
                                               

                                            <div class="float-end">

                                                <input type="submit" name="submit" class="btn btn-success btn-lg" style="background-color: #E42B2B; color: white;" value="Login to Account">


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