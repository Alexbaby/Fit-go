/*add course popup */ 

$(document).on('click', '.addcourse', function(e){
    console.log('inside scriipt');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var type = "POST";
    var ajaxurl = $('#BASE_URL').val()+'/schedule/booking-form';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: {},
        dataType: 'json',
        success: function (data) {
            if(data.status == 'success'){
                $('#booking-form-div').html(data.html);
                $('#bookingFormModal').modal('toggle');
                
                _initializeSelect2();

                _initializeDatepicker();

                $("#token-form").validate({
                 errorClass: 'text-danger',
                rules: {
                    date: {
                        required: true
                    },
                    schedule_id: {
                        required: true
                    },
                    patient_name: {
                        required: true,
                        maxlength: 50
                    },
                    patient_age: {
                        required: true,
                        digits: true
                    },
                    patient_place: {
                        required: true,
                        maxlength: 50
                    },
                    patient_phone: 'customphone',
                },
                messages: {
                        date: {
                            required: "Please select a date",
                        },
                        schedule_id: {
                            required: "Please select a schedule",
                        },
                        patient_name: {
                            required: "Please enter name",
                        },
                        patient_age: {
                            required: "Please enter enter age",
                        },
                        patient_phone: {
                            required: "Please enter phone",
                        },
                        patient_place: {
                            required: "Please enter place",
                        },
                    },
                    errorPlacement: function(error, element) {
                        if (element.hasClass('select2')) {
                            error.appendTo(element.parent());
                        }
                        else {
                            error.insertAfter(element);
                        }
                    }
                });
            }
        },
        error: function (data) {
            console.log(data);
        }
    });
});