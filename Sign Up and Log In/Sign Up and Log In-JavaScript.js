$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

$(function () {
    
    'use strict';
    
    $('.field-wrap input[type="text"]').on('focusout', function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-data')
        } else {
            $(this).parent().removeClass('has-data')
        }
    })
})

$(function () {
    
    'use strict';
    
    $('.field-wrap input[type="email"]').on('focusout', function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-data')
        } else {
            $(this).parent().removeClass('has-data')
        }
    })
})

$(function () {
    
    'use strict';
    
    $('.field-wrap input[type="password"]').on('focusout', function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-data')
        } else {
            $(this).parent().removeClass('has-data')
        }
    })
})