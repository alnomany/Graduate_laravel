
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
                        <h2 class="content-header-title float-left mb-0">Editing existing Removable Forms </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"> Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Editing existing Removable Forms</a>
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

                                @include('rem_form.fill_fields')


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
@push('footer-fill-rem-scripts')
<script>
    //fetch-name

    $('#student-number-rem').on('change', function () {

      var stunum = this.value;
      $("#student-name-rem").html('');
      $.ajax({
          url: "{{url('remform/fetch-name-rem')}}",
          type: "POST",
          data: {
              stunum: stunum,
              _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function (result) {

              $.each(result.studentnames, function (key, value) {
                  $("#student-name-rem").append('<option value="' + value
                      .student_name + '">' + value.student_name + '</option>');


              });


          }
      });
  });
      //

      $('#student-number-rem').on('change', function () {

          var stunum = this.value;
          var studentnumber = $('#student-number-rem').val();
          $("#PRN-REM").html('');


          $.ajax({
              url: "{{url('remform/fetch-prn-rem')}}",
              type: "POST",
              data: {
                  stunum: stunum,
                  studentnumber:studentnumber,
                  _token: '{{csrf_token()}}'
              },
              dataType: 'json',
              success: function (result) {


                  $.each(result.prnlist, function (key, value) {

                      $("#PRN-REM").append('<option value="' + value
                          .p_rn + '">' + value.p_rn + " / "+ value.p_name +'</option>');
                  });
                  getMoreRecord();









              }
          });
      });
      $('#PRN-REM').on('change', function () {
        getMoreRecord();
    });
      function getMoreRecord(page) {

          var studentnumber = $('#student-number-rem').val();
          var student_name = $('#student_name-rem').val();
          var prn = $('#PRN-REM').val();
          $.ajax({
            type: "GET",
            data: {
              'studentnumber':studentnumber,
              'student_name':student_name,
              'prn':prn,
            },
            url: "{{ route('remform.get-more-record') }}" + "?page=" + page,
            success:function(data) {
              $('#fill_data').html(data);

            }
          });
        }



  </script>


@endpush
