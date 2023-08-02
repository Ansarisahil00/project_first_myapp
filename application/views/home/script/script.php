<script>
    $(document).ready(function () {
        login()
    })
    function login() {
        $('#contact-form').validate({
            errorClass: 'error',
            validClass: 'valid',
            rules: {
                //  username: { required: true,minlength: 3, maxlength: 100 },
                //  password: { required: true },
                //  email:{required: true},
                //  phone:{required:true,minlength: 10, maxlength: 10, digit:true},
                //  first_name = {required: true},
                //  last_name = {required: true},
                //  temp_address = {required: true},
                //  perma_address = {required: true}
            },
            messages: {
                //  username: { required: "Please enter your username or email address",minlength: 'Please enter at least 3 characters' },
                //  password: { required: "Please enter your password" },
                //  email:{required: "Please enter your email"},
                //  phone:{required:"please enter your number",minlength: 'Please enter 10 digit mobile number',maxlength: 'Mobile number cannot be more than 10',  digit:"Please enter numbers only"},
                //  first_name = {required: "First name cannot be blank"},
                //  last_name = {required: "Last name cannot be blank"},
                //  temp_address = {required: "This cannot be blank"},
                //  perma_address = {required: "This field cannot be blank"}
            },

            
            submitHandler: function () {
                var userdata = $('#contact-form').serializeArray();
                $.post("home/user_contact", userdata, function (data) {
                    if (data.status == 'success') {
                        alert(data.message)
                    } else {
                        alert(data.message)
                    }
                }, "json");
            }
        }); 
    }
</script>