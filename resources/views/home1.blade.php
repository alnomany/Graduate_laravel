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
                                    <h5>Welcome 🎉                                     {{ $name }}
                                    </h5>
                                    <p class="card-text font-small-3">Chose One</p>
                                    <div class="row">


                                        <a href="{{ route('fill.export.Excel.student.mail.by',$id) }}">
                                                <button type="button" class="btn btn-primary">Single Student Fixed Report</button>

                                        </a>

                                        <a href="{{route('fill.remform.export.student')}}">
                                            <button type="button" class="btn  btn-primary pink">Single Student Removable Report</button>
                                        </a>
                                    </div>
                                    <br>





                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->


                    </div>
                </section>

        </div>
    </div>
</div>
 {{--  </div>--}}
@endsection

