$(document).ready(function(){

    var req = true;

    // Same checkbox
    var same = {
        s_address: 'x_address',
        s_city: 'x_city',
        s_state: 'x_state',
        s_zip: 'x_zip',
    }
    $('#same').on('click', function(e){
        if ($(this).prop('checked')){
            $.each(same, function(i, name){
                $('[name='+i+']').val($('[name='+name+']').val());
            });
        } else {
            $.each(same, function(i, name){
                $('[name='+i+']').val('');
            });
        }
    });

    // Shipping info same by default
    $('#same').click();

    // What happens after we submit the form
    var form_submit_options = {
        success: function(data, status, jqXhr){
            API.respond(jqXhr.responseText);
        },
        error: function(a, b, c){
            console.error('a',a,'b',b,'c',c);
        }
    }

    // Validation
    $(".formPaymentElement form").validate({
        rules: {
            'x_card_num': {
                required: req,
            },
            'x_card_code': {
                required: req,
            },
            'x_exp_date': {
                required: req,
            },
            'x_first_name': {
                required: req,
            },
            'x_last_name': {
                required: req,
            },
            'x_address': {
                required: req,
            },
            'x_country': {
                required: req,
            },
            'x_city': {
                required: req,
            },
            'x_state': {
                required: req,
            },
            'x_zip': {
                required: req,
            },
            'agree': {
                required: req,
            },
            's_address': {
                required: req,
            },
            's_city': {
                required: req,
            },
            's_state': {
                required: req,
            },
            's_zip': {
                required: req,
            },
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            }
        }
    });
});

