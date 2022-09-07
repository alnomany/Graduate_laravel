

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
</script>
