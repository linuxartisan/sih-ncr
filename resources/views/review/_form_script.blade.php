<script type="text/javascript">

    $(document).ready(function() {

        // search box display condition
        $('.select2').select2({
            minimumResultsForSearch: 5
        });

        $('.select2').on('change', function() {  // when the value changes
            $(this).valid(); // trigger validation on this element
        });

        var $componentForm = $('#component-form').validate({

            errorClass: "parsley-error",
            validClass: "parsley-success",

            // Rules for form validation
            rules: {
                component_id: {
                    required: true,
                },

                rating: {
                    required: true,
                    maxlength: 255
                }
            },

            // Messages for form validation
            messages: {
                name: {
                    required: 'Please enter the product name'
                },
            },

            // Do not change code below
            highlight: function(element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass("select2-hidden-accessible")) {
                    // $(element.form).find("span[aria-labelledby=select2-"+ elem.attr("id") +"-container]")
                    //     .addClass(errorClass).removeClass(validClass);

                    // for multiple select2
                    $(element).next().find(".select2-selection")
                        .addClass(errorClass).removeClass(validClass);
                } else {
                    elem.addClass(errorClass).removeClass(validClass);
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass("select2-hidden-accessible")) {
                    // $(element.form).find("span[aria-labelledby=select2-"+ elem.attr("id") +"-container]")
                    //     .removeClass(errorClass).addClass(validClass);

                    // for multiple select2
                    $(element).next().find(".select2-selection")
                        .removeClass(errorClass).addClass(validClass);
                } else {
                    elem.removeClass(errorClass).addClass(validClass);
                }
            },

            submitHandler: function(form) { $('#btnSave').prop("disabled", true); form.submit(); },

            errorPlacement: function(error, element) {
                if(element.hasClass('select2-hidden-accessible')) {
                    error.insertAfter(element.next('span'));
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $('#btnSave').dblclick(function(e){
            e.preventDefault();
        });
    });

</script>