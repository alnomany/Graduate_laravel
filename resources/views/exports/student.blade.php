
    @extends('layout.app-main')

    @section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"> </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Student Report</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    <form method="get" action="{{ route('fill.export.Excel.student') }}">

                                    <div class="row">

                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <label for="Student Number">Student Number</label>

                                                <select id="student-number" class="select2 form-control form-control-lg" name="student_number">
                                                    <option value="null">Select student number </option>

                                                    @foreach ($students_users as $student)

                                                    <option value="{{ $student->student_number }}"  >{{ $student->student_number }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>





                                        <div class="form-group col-sm-6 col-6">

                                                <label for="Student Name">Student Name</label>
                                                <select id="student-name" class="select2 form-control form-control-lg" name="student_name">

                                                </select>
                                        </div>

                                    </div>




                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary">


                                    </div>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection

