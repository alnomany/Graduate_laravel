

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
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

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
        $(document).on("change", ".tooth_number", function() {
            var tooth_number = this.value;
             //   $("input").attr('disabled','disabled');
            if (tooth_number != "N.A.") {
                $(".fm0").val("");

                $(".fm0_sig").val("");
                $(".fm0_date").val("");



                $("#rest_type").val($("#rest_type option:first").val());
                 $("#rest_type").prop('disabled', false);
                $('.fm0').attr('readonly', true);

                $('.fm1').attr('readonly', false);
                $('.fm2').attr('readonly', false);
                $('.fm3').attr('readonly', false);
                $('.fm4').attr('readonly', false);
                $('.fm5').attr('readonly', false);
                $('.fm6').attr('readonly', false);







                                        }
                else {
                    $("#rest_type").val($("#rest_type option:first").val());

                $("#rest_type").prop('disabled', true);

                $('.fm0').attr('readonly', false);



                //treatmeant
                //null before
                $(".fm1").val("");
                $(".fm1_sig").val("");
                $(".fm1_date").val("");

                $(".fm2").val("");
                $(".fm2_sig").val("");
                $(".fm2_date").val("");

                $(".fm3").val("");
                $(".fm3_sig").val("");
                $(".fm3_date").val("");

                $(".fm4").val("");
                $(".fm4_sig").val("");
                $(".fm4_date").val("");

                $(".fm5").val("");
                $(".fm5_sig").val("");
                $(".fm5_date").val("");

                $(".fm6").val("");
                $(".fm6_sig").val("");
                $(".fm6_date").val("");

                $(".Average").val("");

                //
                $('.fm1').attr('readonly', true);
                $('.fm2').attr('readonly', true);
                $('.fm3').attr('readonly', true);
                $('.fm4').attr('readonly', true);
                $('.fm5').attr('readonly', true);
                $('.fm6').attr('readonly', true);
                    }





        });



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
        $number=(sum / nums);
        $number=$number.toFixed(2);
//Math.floor(
        $(".Average").val($number);

    });
    $(document).on("change", ".fm1", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm1_date").value = current_date;
       // alert(date);

        $(".fm1_sig").val(str);


    });
    $(document).on("change", ".fm2", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm2_date").value = current_date;

        $(".fm2_sig").val(str);


    });
    $(document).on("change", ".fm8", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm8_date").value = current_date;


        $(".fm8_sig").val(str);


    });
    $(document).on("change", ".fm3", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm3_date").value = current_date;
        $(".fm3_sig").val(str);
    });
    $(document).on("change", ".fm4", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm4_date").value = current_date;
        $(".fm4_sig").val(str);
    });
    $(document).on("change", ".fm5", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm5_date").value = current_date;
        $(".fm5_sig").val(str);
    });
    $(document).on("change", ".fm6", function() {
        var str = $("#sig_name").val();
       // alert(date);
        $(".fm6_sig").val(str);
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours() + ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("fm6_date").value = current_date;
    });
    //note sig
    $(document).on("change", ".note", function() {
        var str = $("#sig_name").val();
       // alert(date);
        $(".note_sign").val(str);
    });

    $(document).on("change", ".rm7", function() {
        var str = $("#sig_name").val();
        var date = new Date();
        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
        document.getElementById("rm7_date").value = current_date;
        $(".rm7_sig").val(str);
    });
    $(document).on("change", ".rm8", function() {
        var str = $("#sig_name").val();
          $(".rm8_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm8_date").value = current_date;
    });
    $(document).on("change", ".rm9", function() {
        var str = $("#sig_name").val();
          $(".rm9_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm9_date").value = current_date;
    });
    $(document).on("change", ".rm10", function() {
        var str = $("#sig_name").val();
          $(".rm10_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm10_date").value = current_date;
    });
    $(document).on("change", ".rm11", function() {
        var str = $("#sig_name").val();
          $(".rm11_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm11_date").value = current_date;
    });
    $(document).on("change", ".rm12", function() {
        var str = $("#sig_name").val();
          $(".rm12_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm12_date").value = current_date;
    });
    $(document).on("change", ".rm13", function() {
        var str = $("#sig_name").val();
          $(".rm13_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("rm13_date").value = current_date;
    });
    $(document).on("change", ".fm0", function() {
        var str = $("#sig_name").val();
          $(".fm0_sig").val(str);
          var date = new Date();
          var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate() + "  " +date.getHours()+ ":" +date.getMinutes()+ ":" +date.getSeconds();
          document.getElementById("fm0_date").value = current_date;
    });
    window.onscroll = function() {myFunction()};

var navbar = document.getElementById("breadcrumbs-top");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}





</script>
