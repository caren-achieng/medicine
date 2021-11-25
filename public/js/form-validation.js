$(function(){
    $("form[id = 'self_registration']").validate({
        rules: {
            id: {
                required: true,
                minlength: 8,
                maxlength: 9
            },
            title: {
                required: true,
            },
            fname: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            mname: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            lname: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            age: {
                required: true,
                value: '<70'
            },
            postaddress: {
                minlength: 5,
                maxlength: 9
            },
            pcode: {
                required:true,
            },
            town: {
                minlength: 3,
                maxlength: 20
            },
            religion: {
                required: true,
            },
            residence: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            tel: {

                required: true,
                minlength: 10,
                maxlength: 10,
            },
            mobile: {

                required: true,
                minlength: 10,
                maxlength: 10,
            },
            email: {
                email: true,
                required: true,
                minlength: 11,
                maxlength: 50,
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 255
            },
            confirmpass: {
                required: true,
                equalTo: 'password'
            },
            gender: {
                required: true,
            },
            kra: {

                required: true,
                minlength: 11,
                maxlength: 11,
            },
            nhif: {

                required: true,
                minlength: 20,
                maxlength: 20,
            },
            nssf: {

                required: true,
                minlength: 20,
                maxlength: 20,
            },
            department: {
                required: true,
            }
        },

        messages: {
            id: {
                required: "Field is required",
                minlength: "Minimum length 8 characters",
                maxlength: "Maximum length 9 characters"
            },
            title: {
                required: "Field is required",
            },
            fname: {
                required: "Field is required",
                minlength: "Minimum length 3 characters",
                maxlength: "Maximum length 20 characters"
            },
            mname: {
                required: "Field is required",
                minlength: 3,
                maxlength: "Maximum length 20 characters"
            },
            lname: {
                required: "Field is required",
                minlength: "Minimum length 3 characters",
                maxlength: "Maximum length 20 characters"
            },
            age: {
                required: "Field is required",
                value: 'Invalid age. Cannot be more than 70 years'
            },
            postaddress: {
                minlength: "Minimum length 5 characters",
                maxlength: "Maximum length 9 characters"
            },
            pcode: {
                required: "Field is required",
            },
            town: {
                minlength: "Minimum length 3 characters",
                maxlength: "Maximum length 20 characters"
            },
            religion: {
                required: "Field is required",
            },
            residence: {
                required: "Field is required",
                minlength: "Minimum length 3 characters",
                maxlength: "Maximum length 50 characters",
            },
            tel: {

                required: "Field is required",
                minlength: "Minimum length 10 characters",
                maxlength: "Maximum length 10 characters",
            },
            mobile: {

                required: "Field is required",
                minlength: "Minimum length 10 characters",
                maxlength: "Maximum length 10 characters",
            },
            email: {
                email: "Invalid email",
                required: "Field is required",
                minlength: "Minimum length 11 characters",
                maxlength: "Maximum length 50 characters",
            },
            password: {
                required: "Field is required",
                minlength: "Minimum length 8 characters",
                maxlength: "Maximum length 255 characters"
            },
            confirmpass: {
                required: "Field is required",
                equalTo: 'password'
            },
            gender: {
                required: "Field is required",
            },
            kra: {

                required: "Field is required",
                minlength: "Minimum length 11 characters",
                maxlength: "Maximum length 11 characters",
            },
            nhif: {

                required: "Field is required",
                minlength: "Minimum length 20 characters",
                maxlength: "Maximum length 20 characters",
            },
            nssf: {

                required: "Field is required",
                minlength: "Minimum length 20 characters",
                maxlength: "Maximum length 20 characters",
            },
            department: {
                required: true,
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
