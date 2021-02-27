
$(document).ready(function () {
    $('#ajaxSubmit').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var ajaxurl = $('#BASE_URL').val()+'/course/create';
        $.ajax({
            url: ajaxurl,
            method: 'post',
            data: {
                "_token": $('input[name=_token]').val(),
                course_name: $('#course_name').val(),
                course_duration: $('#course_duration').val(),
                course_fee: $('#course_fee').val(),
            },
            success: function (result) {
                if (result.errors) {
                    // console.log('errors', result);
                    $('.alert-danger').html('');
                    jQuery.each(result.errors, function (key, value) {
                        $('.alert-danger').show();
                        $('.alert-danger').append('<P>' + value + '</P>');
                    });
                } else {
                    console.log('inside this ');
                    $('#addcourse').modal('hide');
                    jQuery('.alert-danger').hide();
                    $('#open').hide();
                    window.location.reload();
                }
            }
        });
    });
});
