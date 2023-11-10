<div class="app-header header-shadow bg-night-sky header-text-light">

                <div class="app-header__logo">

                    <a href="/"><div class="logo-src" style=" height:35px; width:180px;  background-repeat: no-repeat; background-size: cover;"></div></a>

                    <div class="header__pane ms-auto">

                        <div>

                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">

                                <span class="hamburger-box">

                                    <span class="hamburger-inner"></span>

                                </span>

                            </button>

                        </div>

                    </div>

                </div>

                <div class="app-header__mobile-menu">

                    <div>

                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">

                            <span class="hamburger-box">

                                <span class="hamburger-inner"></span>

                            </span>

                        </button>

                    </div>

                </div>

                <div class="app-header__menu">

                    <span>

                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">

                            <span class="btn-icon-wrapper">

                                <i class="fa fa-ellipsis-v fa-w-6"></i>

                            </span>

                        </button>

                    </span>

                </div>

                <div class="app-header__content">

                   

                    <div class="app-header-right">

                       

                        <div class="header-btn-lg pe-0">

                            <div class="widget-content p-0">

                                <div class="widget-content-wrapper">
                                <div class="d-inline-block dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-dark">
                                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            Welcome! <strong><?php echo e(Auth::user()->name); ?>  </strong>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();

document.getElementById('logout-form').submit();" class="nav-link">
                                                       
                                                         Logout
                                                        
                                                    </a>
                                                </li>
                                               <!--  <li>
                                                   
                                                </li> -->
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    

                                    

                                  

                                </div>

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div><?php /**PATH C:\xampp\htdocs\imdi\resources\views/layouts/admin/topmenu.blade.php ENDPATH**/ ?>