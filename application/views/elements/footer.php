
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
<!--            <strong><a href="https://digitalflake.com/" class="hide">DigitalFlake</a></strong>-->
            <strong>Copyright &copy; 2019-<?php echo date("Y");?> <a href="#">DigitalFlake Solution pvt ltd</a>.</strong> All rights reserved.
        </div>
        <strong>D</strong>
    </footer>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>


    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
    <script>
      function validate_call_condition(){
            swal({
                title: "Logout",
                text: "",
                icon: "warning",
                buttons: [
                    'Cancel',
                    'confirm'
                ],
            }).then(function(isConfirm) {
                if (isConfirm) {
                    exotel_call();
                }
            });
        }

        function exotel_call(){
            var exotel_call = new FormData();
            exotel_call.append("id", ' ');

            $.ajax({
                type: "POST",
                url: "<?php echo base_url("student/api_logout"); ?>",
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                data: exotel_call,
                crossDomain: true,
                success: function (res) {
                    location.reload();     
                }
            });
            location.reload();
        }
    </script>
	
  </body>
</html>