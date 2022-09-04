

    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>

    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-number-input.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script>


        function valueGetDate(){
            var d = new Date();

            var month = d.getMonth()+1;
            alert(month);

        }
        function valueChangedFM()
        {
            if($('.fm1_sig').is(":checked"))
            alert('show');
                $(".name").hide();
        //    else
          //      $(".name").show();
        }

    $(document).on("change", ".fm", function() {

        var sum = 0;
        var nums = 0;


        $(".fm").each(function(){

            var val = $(this).val();
           if(val) {

            sum += +$(this).val();
            nums++;
           }
        });
//Math.floor(
        $(".Average").val(sum / nums);

    });
    $(document).on("change", ".fm1", function() {
        var str = $("#fm1_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);


        $(".fm1_sig").val(str);
        $(".date-fm1").val(date);


    });
    $(document).on("change", ".fm2", function() {
        var str = $("#fm2_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);


        $(".fm2_sig").val(str);
        $(".date-fm2").val(date);


    });
    $(document).on("change", ".fm3", function() {
        var str = $("#fm3_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);
        $(".fm3_sig").val(str);
        $(".date-fm3").val(date);
    });
    $(document).on("change", ".fm4", function() {
        var str = $("#fm3_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);
        $(".fm4_sig").val(str);
        $(".date-fm4").val(date);
    });
    $(document).on("change", ".fm5", function() {
        var str = $("#fm3_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);
        $(".fm5_sig").val(str);
        $(".date-fm5").val(date);
    });
    $(document).on("change", ".fm6", function() {
        var str = $("#fm3_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);
        $(".fm6_sig").val(str);
        $(".date-fm6").val(date);
    });
    $(document).on("change", ".fm0", function() {
        var str = $("#fm3_name").val();
        var date =new Date().toLocaleDateString();
       // alert(date);
        $(".fm0_sig").val(str);
        $(".date-fm0").val(date);
    });
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
                $('#student-name').html('<option value="">-- Select name --</option>');
                $.each(result.studentnames, function (key, value) {
                    $("#student-name").append('<option value="' + value
                        .student_name + '">' + value.student_name + '</option>');
                });

            }
        });

    });
    $('#pation-number-create').on('change', function () {
        var pationnum = this.value;
        $("#pation-name-create").html('');
        $.ajax({
            url: "{{url('fixedform/fetch-name-pation-create')}}",
            type: "POST",
            data: {
                pationnum: pationnum,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                $('#pation-name-create').html('<option value="">-- Patient Name chose--</option>');
                $.each(result.pationnames, function (key, value) {
                    $("#pation-name-create").append('<option value="' + value
                        .p_name + '">' + value.p_name + '</option>');
                });

            }
        });

    });

</script>
