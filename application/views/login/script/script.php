<script>
    $(document).ready(function () {
        login()
    })
    function login() {
        $('#login_form').validate({
            errorClass: 'error',
            validClass: 'valid',
            rules: {
                username: { required: true, minlength: 3, maxlength: 100},
                password: { required: true }
            },
            messages: {
                username: { required: "Please enter your username or email address", minlength: 'Please enter at least 3 characters' },
                password: { required: "Please enter your password" }
            },
            submitHandler: function () {
                var userdata = $('#login_form').serializeArray();
                // var formdata = new FormData($('#login_form')[0]);
                // console.log(formdata);
                $.post("login/auth", userdata, function (data) {
                    if (data.status == 'success') {
                        alert(data.message)
                        location.href = '<?php echo base_url() ?>home';
                    } else {
                        alert(data.message)
                    }
                }, "json");
            }
        }); 
    }
</script>