
@extends('layout.app-main')

@section('content')
<!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Fixed Form</h2>
                        <!-- <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Table Bootstrap
                                </li>
                            </ol>
                            -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

<!-- Basic Tables start -->
<div class="row" id="basic-table">
<div class="col-12">
    <div class="card">
        <!--
        <div class="card-header">
            <h4 class="card-title">Table Basic</h4>
        </div>
        <div class="card-body">
            <p class="card-text">
                Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
            </p>
        </div>
        -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Patient</th>
                        <th>tooth number</th>
                        <th>procedure</th>
                        <th>FM1</th>
                        <th>FM2</th>
                        <th>FM3</th>
                        <th>FM4</th>
                        <th>FM5</th>
                        <th>FM6</th>
                        <th>avg</th>


                        <th>Note</th>



                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['prnlist'] as $value)
                    <tr>
                        <td>

                            <span class="font-weight-bold">{{ $value->student_name }}<br><br> {{  $value->student_number }}</span>
                        </td>
                        <td>{{ $value->p_name }}<br><br> {{  $value->p_rn }}</td>
                        <td>{{ $value->tooth_number }}</td>
                        <td>{{ $value->rest_type }}</td>


                        <td>{{ $value->fm1 }}<br><br> {{  $value->fm1_sig }}</td>
                        <td>{{ $value->fm2 }}<br><br> {{  $value->fm2_sig }}</td>
                        <td>{{ $value->fm3 }} <br><br> {{  $value->fm3_sig }}</td>
                        <td>{{ $value->fm4}}<br><br> {{  $value->fm4_sig }}</td>
                        <td>{{ $value->fm5}}<br><br> {{  $value->fm5_sig }}</td>
                        <td>{{ $value->fm6}}<br><br> {{  $value->fm6_sig }}</td>
                        <td>{{ $value->avg}}<br></td>
                        <td>{{ $value->note}}</td>





                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="edit-2" class="mr-50"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="trash" class="mr-50"></i>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Basic Tables end -->
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@endsection
