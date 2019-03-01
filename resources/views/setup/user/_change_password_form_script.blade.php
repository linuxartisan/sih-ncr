<script type="text/javascript">

    $(document).ready(function() {

        var $userForm = $('#user-change-password-form').validate({

            errorClass: "parsley-error",
            validClass: "parsley-success",

            // Rules for form validation
            rules: {
                old_password: {
                    required: true,
                    maxlength: 255
                },
                new_password: {
                    required: true,
                    minlength: 6,
                    maxlength: 255
                },
                repeat_password: {
                    required: true,
                    equalTo: "#new_password"
                }
            },

            // Messages for form validation
            messages: {
                old_password: {
                    required: 'Please enter old password'
                },
                new_password: {
                    required: 'Please enter new password'
                }
            },

            // Do not change code below
            highlight: function(element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass(errorClass).addClass(validClass);
            },

            submitHandler: function(form) { $('#btnSave').prop("disabled", true); form.submit(); },

            errorPlacement: function(error, element) {
                    error.insertAfter(element);
            }
        });

        $('#btnSave').dblclick(function(e){
            e.preventDefault();
        });
    });

</script>