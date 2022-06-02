$(window).on("scroll", function() {
    if($(window).scrollTop() > 300) {
        $(".main-header").addClass("active-header");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".main-header").removeClass("active-header");
    }
});

$('document').ready(function(){
$('#payment_form').on('change', function() {
    var updtated_ship_prices = $('input[name=payment_method]:checked', '.payment-form-row').val();
if (updtated_ship_prices== 'Visa'){
document.getElementById('border_visa').style.border = '2px solid #308214';
 document.getElementById('border_pay').style.border = 'unset';
}
else if(updtated_ship_prices== 'pay_pal'){
document.getElementById('border_pay').style.border = '2px solid #308214';
document.getElementById('border_visa').style.border = 'unset';
}
});
});

tinymce.init({selector:'textarea'});


