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
