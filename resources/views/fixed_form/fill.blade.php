
@extends('layout.app-main')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Editing existing Fixed Forms </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"> Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Editing existing Fixed Forms</a>
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
                    <div class="col-12">
                        <div class="card">
                            @if (\Session::has('success'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body" >

                                @include('fixed_form.fill_fields')


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
@push('footer-fill-scripts')

<script>
$('#student-number').on('change', function () {
    var stunum = this.value;
    $("#student-name").html('');
    $.ajax({
        url: "{{url('fixedform/fetch-name')}}",
        type: "POST",
        data: {
            stunum: stunum,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function (result) {

            $.each(result.studentnames, function (key, value) {
                $("#student-name").append('<option value="' + value
                    .student_name + '">' + value.student_name + '</option>');


            });


        }
    });
    //
    function SelectedValue(e) {
        document.getElementById("myText").value = e.target.value
    }

});
//change name in edit pation
$('#pation-number-edit').on('change', function () {
    var pationnum = this.value;
  //  var selected_option_value = $(this).find(":selected").val();

    $.ajax({
        url: "{{url('fixedform/fetch-name-pation-edit')}}",
        type: "POST",
        data: {
            pationnum: pationnum,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function (result) {
            document.getElementById("pation-name-edit").value = result[0].p_name;

        }
    });

});
$('#student-number-edit').on('change', function () {
    var studentnum = this.value;
  //  var selected_option_value = $(this).find(":selected").val();

    $.ajax({
        url: "{{url('fixedform/fetch-name-student-edit')}}",
        type: "POST",
        data: {
            studentnum: studentnum,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function (result) {


            document.getElementById("student-name-edit").value = result[0].student_name;




        }
    });

});



$('#student-number').on('change', function () {

    var stunum = this.value;
    var studentnumber = $('#student-number').val();

    $.ajax({
        url: "{{url('fixedform/fetch-prn')}}",
        type: "POST",
        data: {
            stunum: stunum,
            studentnumber:studentnumber,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function (result) {


            $.each(result.prnlist, function (key, value) {

                $("#PRN").append('<option value="' + value
                    .p_rn + '">' + value.p_rn + " / "+ value.p_name +'</option>');
            });

            getMoreRecord();


        }
    });


});
$('#PRN').on('change', function () {
    getMoreRecord();
});


function getMoreRecord(page) {

    var studentnumber = $('#student-number').val();
    var student_name = $('#student_name').val();
    var prn = $('#PRN').val();
    $.ajax({
      type: "GET",
      data: {
        'studentnumber':studentnumber,
        'student_name':student_name,
        'prn':prn,
      },
      url: "{{ route('fixedform.get-more-record') }}" + "?page=" + page,
      success:function(data) {
        $('#fill_data').html(data);

      }
    });
  }
</script>
@endpush
