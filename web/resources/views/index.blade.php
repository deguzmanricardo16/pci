@extends('layouts.main')
@section('content')
    <div id="wrapper">
    @include('layouts.sidebar')
        <div class="content-page">

            <div class="content">

                <div class="topbar">
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <!-- language-->
                            <li class="list-inline-item hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a></form>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5></div><a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a> <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a> <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a> <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a></div>
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect"><i class="mdi mdi-menu"></i></button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div>
                <!-- Top Bar End -->
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">PCI</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">

                            <!--end col-->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>12,345,678</h3>
                                                <h6 class="text-lightdark">Total Students</h6><span class="text-muted"><small>Last 6 Month</small></span></div>
                                            <!-- <div class="col-4 text-center">
                                                <h5><i class="mdi mdi-airplane-takeoff mr-2 text-danger font-20"></i> 80%</h5>
                                                <h6 class="text-lightdark">Export</h6><span class="text-muted"><small>2018 to 2019</small></span></div> -->
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                    <!-- <div class="card-body p-0 mb-n5">
                                        <div class="mb-0 area-chart-map" id="morris-area-chart"></div>
                                    </div> -->
                                    <div class="card mb-0 bg-map">
                                        <div class="card-body">
                                            <div id="test" class="dash-map"></div>
                                        </div>
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body new-user">
                                        <h5 class="header-title mb-4 mt-0">Score Lists</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Score</th>
                                                        <th class="border-top-0">Date</th>
                                                        <!-- <th class="border-top-0">Country</th> -->
                                                        <!-- <th class="border-top-0">Reviews</th> -->
                                                        <!-- <th class="border-top-0">Socials</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($data as $d)
                                                    <tr>
                                                      <td>{{ $d->score }}</td>
                                                      <td>{{ $d->created_at->diffForHumans() }}</td>
                                                        <!-- <td><img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="30"></td> -->
                                                        <!-- <td><a href="javascript:void(0);">Ruby T. Curd</a></td> -->
                                                        <!-- <td><img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag"></td> -->
                                                        <!-- <td><i class="mdi mdi-star text-warning"></i> <i class="mdi mdi-star text-warning"></i> <i class="mdi mdi-star text-warning"></i> <i class="mdi mdi-star-half text-warning"></i> <i class="mdi mdi-star-outline text-warning"></i></td> -->
                                                        <!-- <td>
                                                            <ul class="list-unstyled list-inline mb-0">
                                                                <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                            </ul>
                                                        </td> -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                    </div>

                </div>

            </div>

            <footer class="footer">© 2019 PCI.</footer>
        </div>

    </div>

@endsection
