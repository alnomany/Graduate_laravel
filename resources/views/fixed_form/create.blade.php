
@extends('layout.app-main')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Create New Fixed Forms </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Create New Fixed Forms</a>
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">

                                {!! Form::open(['route' => 'fixedform.store', 'files'=> true , 'id' => 'form']) !!}

                                @include('fixed_form.fields')

                                {!! Form::close() !!}



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
@push('fixed-form-validation')


<script>

$(document).ready(function () {
    $('#form').validate({
        rules: {
            student_number:{
                required:true,
            },

            p_name:{
                required:true,
            },
            p_rn:{
                required:true,
            },
            fm0:{
                min:0,
                max:10,
            }
            ,
            fm1:{
                min:0,
                max:10,
            }
            ,
            fm2:{
                min:0,
                max:10,
            }
            ,
            fm3:{
                min:0,
                max:10,
            }
            ,
            fm4:{
                min:0,
                max:10,
            }
            ,
            fm5:{
                min:0,
                max:10,
            },
            fm6:{
                min:0,
                max:10,
            }
            ,
            rest_type: {
                required: {
                depends: function(elem) {
                return $("#tooth_number").val() >= 11
                }
                },
            }

        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>
@endpush
