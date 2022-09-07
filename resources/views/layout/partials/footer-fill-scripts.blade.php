
    <script>
        //fetch-name

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
                        .p_rn + '">' + value.p_rn + value.p_name +'</option>');
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
    /*
    $('#PRN').on('change', function () {
        var prnnumber = this.value;
        $.ajax({
            url: "{{url('fixedform/fetch-tooth')}}",
            type: "POST",
            data: {
                prnnumber: prnnumber,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {

                $.each(result.toothnumbers, function (key, value) {
                    $("#tooth_number").append('<option value="' + value
                        .tooth_number + '">' + value.tooth_number + '</option>');
                });



            }
        });

    });
*/
    ///////////////////////////fetch pach number
</script>
