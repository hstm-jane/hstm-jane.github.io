$(function() {


    $('.stepper').activateStepper({
        // linearStepsNavigation: true, //allow navigation by clicking on the next and previous steps on linear steppers
        // autoFocusInput: true, //since 2.1.1, stepper can auto focus on first input of each step
        autoFormCreation: true, //control the auto generation of a form around the stepper (in case you want to disable it)
        showFeedbackLoader: false //set if a loading screen will appear while feedbacks functions are running
    });
    // $('.stepper').activateStepper();
    $('[data-toggle="tooltip"]').tooltip();

    // prototype only to simulate an ajax request
        $.mockjax({
            url: "emails.action",
            response: function(settings) {
                var email = settings.data.email,
                    emails = ["me@email.com", "email@email.com"];
                this.responseText = "true";
                if ($.inArray(email, emails) !== -1) {
                    console.log('inarray');
                    this.responseText = "false";
                }
                console.log(this.responseText);
            },
            responseTime: 500
        });


    $('.stepper').closest('form').validate({
        rules: {
            // firstname: "required",
            // lastname: "required",

            password: {
                required: true,
                minlength: 4
            },
            password_confirm: {
                required: true,
                minlength: 4,
                equalTo: "#password"
            },
            // email: {
            //     required: true,
            //     email: true,
            //     remote: "emails.action"
            // },
            // terms: "required"
        },
        messages: {
            // firstname: "Enter your firstname",
            // lastname: "Enter your lastname",
            password: {
                required: "Provide a password",
                minlength: jQuery.validator.format("Enter at least {0} characters")
            },
            password_confirm: {
                required: "Repeat your password",
                minlength: jQuery.validator.format("Enter at least {0} characters"),
                equalTo: "Enter the same password as above"
            },
            // email: {
            //     required: "Please enter a valid email address",
            //     minlength: "Please enter a valid email address",
            //     remote: jQuery.validator.format("{0} is already in use. <a href='#'>Return to login</a>")
            // },
            // terms: " "
        },
        errorElement: "label",
        errorPlacement: function(error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else if (element.hasClass("date-pick")) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).parents(".form-group").addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents(".form-group").removeClass("has-error");
        }
    });





});
