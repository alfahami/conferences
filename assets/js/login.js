/* Inpired by Jee Dribbble Shot ( http://dribbble.com/shots/770815-Login ) */ 
/* coded by alireza attari ( @alireza_attari ) */ 

/*Dropdown Menu*/
$('.dropdowned').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdowned').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdowned .dropdown-menu li').click(function () {
        $(this).parents('.dropdowned').find('span').text($(this).text());
        $(this).parents('.dropdowned').find('input').attr('value', $(this).attr('id'));
    });
/*End Dropdown Menu*/


$('.dropdown-menu li').click(function () {
  var input = '<strong>' + $(this).parents('.dropdowned').find('input').val() + '</strong>',
      msg = '<span class="msg">';
  //$('.msg').html(msg + input + '</span>');
}); 

