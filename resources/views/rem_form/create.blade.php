
@extends('layout.app-main')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top sticky" id="breadcrumbs-top" >
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Create New Removable Forms </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Create New Removable Forms</a>
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
                            <div class="card-header pink" >
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body pink" >
                                {!! Form::open(['route' => 'remform.store', 'files'=> true , 'id' => 'form']) !!}

                                @include('rem_form.fields')

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

@push('remove-form-validation')


<script>
    
$(document).ready(function () {
    $('#form').validate({ 
        rules: {
            student_number:{
                required:true,
            },
            arch_type:{
                required:true,
            },
            
        
            p_name:{
                required:true,
            },
            p_rn:{
                required:true,
            },
   
            rest_type:{
                required:true,
            }
            ,
            rm1:{
                min:0,
                max:10,
            }
            ,
            rm2:{
                min:0,
                max:10,
            }
            ,
            rm3:{
                min:0,
                max:10,
            }
            ,
            rm4:{
                min:0,
                max:10,
            }
            ,
            rm5:{
                min:0,
                max:10,
            },
            rm6:{
                min:0,
                max:10,
            },
            rm7:{
                min:0,
                max:10,
            }
            ,
            rm8:{
                min:0,
                max:10,
            },
            rm9:{
                min:0,
                max:10,
            },
            rm10:{
                min:0,
                max:10,
            },
            rm11:{
                min:0,
                max:10,
            },
            rm12:{
                min:0,
                max:10,
            },
            rm13:{
                min:0,
                max:10,
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