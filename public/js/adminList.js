$(document).ready(function () {
    $('.slideDown').click(function () { 
        $('.moreInfo div').slideDown();
        $('.manageMember').css('display','flex');
    });
    $('.slideUp').click(function () { 
        $('.moreInfo div').slideUp();
    });
});



$(document).ready(function () {
    $(".moreInfo").click(function () {  
        $('.moreInfo div').slideToggle();
        $('.manageMember').css('display','flex');
        
    });
});