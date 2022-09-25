@extends('layout.app-main')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="container">
            {{--
            <div class="row justify-content-center">
                --}}
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-8 col-md-12 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Welcome 🎉                                     {{ Auth::user()->name }}
                                    </h5>
                                    <p class="card-text font-small-3">Chose One</p>
                                    <div class="row">
                                        <a href="{{ route('create') }}">
                                            <button type="button" class="btn btn-primary">Create Fixed Form</button>
                                        </a>

                                        <a href="{{ route('fill') }}">
                                            <button type="button" class="btn btn-primary">Edit Fixed Form</button>
                                        </a>

                                        <a href="{{ route('fill.export') }}">

                                            <button type="button" class="btn btn-primary">Full Fixed Report</button>
                                            <img src="../../../app-assets/images/illustration/badge.sv" class="congratulation-medal" alt="" />
                                        </a>
                                        <a href="{{ route('fill.export.student') }}">
                                                <button type="button" class="btn btn-primary">Single Student Fixed Report</button>

                                        </a>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <a href="{{ route('remform.create') }}">

                                        <button type="button" class="btn btn-primary pink">Create Removable Form</button>
                                        </a>
                                        <a href="{{ route('remform.fill') }}">
                                            <button type="button" class="btn btn-primary pink">Edit Removable Form</button>
                                        </a>

                                        <a href="{{ route('fill.export.rem') }}">

                                            <button type="button" class="btn btn-primary pink">Full Removable Report</button>
                                            </a>
                                            <a href="{{route('fill.remform.export.student')}}">
                                                <button type="button" class="btn  btn-primary pink">Single Student Removable Report</button>
                                            </a>

                                    </div>




                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->


                    </div>
                </section>
                {{--
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            --}}
        </div>
    </div>
</div>
 {{--  </div>--}}
@endsection

