$(function() {
    
    'use strict';
    
    $('.divs input[type="text"]').on('focusout', function () {
        if ($(this).val() != ''){
            $(this).parent().addClass('has-data');
        } else {
            $(this).parent().removeClass('has-data');
        }
    })
    
})

$(function() {
    
    'use strict';
    
    $('.divs input[type="email"]').on('focusout', function () {
        if ($(this).val() != ''){
            $(this).parent().addClass('has-data');
        } else {
            $(this).parent().removeClass('has-data');
        }
    })
    
})

$(function() {
    
    'use strict';
    
    $('.divs input[type="password"]').on('focusout', function () {
        if ($(this).val() != ''){
            $(this).parent().addClass('has-data');
        } else {
            $(this).parent().removeClass('has-data');
        }
    })
    
})