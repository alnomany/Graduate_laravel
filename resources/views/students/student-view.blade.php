
@extends('layout.app-main')

@section('content')
<!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-view">
                <!-- User Card & Plan Starts -->
                <div class="row">
                    <!-- User Card starts-->
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="card user-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                        <div class="user-avatar-section">
                                            <div class="d-flex justify-content-start">
                                                <img class="img-fluid rounded" src="../../../app-assets/images/portrait/small/user-29.png" height="104" width="104" alt="User avatar" />
                                                <div class="d-flex flex-column ml-1">
                                                    <div class="user-info mb-1">
                                                        <h4 class="mb-0">{{ $student_user->student_name }}</h4>
                                                        <span class="card-text">{{ }}</span>
                                                    </div>
                                                   {{--
                                                    <div class="d-flex flex-wrap">
                                                        <a href="./app-user-edit.html" class="btn btn-primary">Edit</a>
                                                        <button class="btn btn-outline-danger ml-1">Delete</button>
                                                    </div>
                                                   --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center user-total-numbers">
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-primary">
                                                    <i data-feather="activity" class="text-primary"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">x</h5>
                                                    <small>x</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="color-box bg-light-success">
                                                    <i data-feather="trending-up" class="text-success"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">x</h5>
                                                    <small>x</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                        <div class="user-info-wrapper">
                                            <div class="d-flex flex-wrap">
                                                <div class="user-info-title">
                                                    <i data-feather="user" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">Username</span>
                                                </div>
                                                <p class="card-text mb-0">eleanor.aguilar</p>
                                            </div>


                                            <div class="d-flex flex-wrap my-50">
                                                <div class="user-info-title">
                                                    <i data-feather="flag" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                                                </div>
                                                <p class="card-text mb-0">England</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card Ends-->


                </div>
                <!-- User Card & Plan Ends -->


{{--
                <!-- User  Starts-->
                <div class="row invoice-list-wrapper">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-datatable table-responsive">
                                <table class="invoice-list-table table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th><i data-feather="trending-up"></i></th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th class="text-truncate">#</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th class="cell-fit">#</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User  Ends-->
--}}
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
