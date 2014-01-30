jQuery(document).ready(function($) {

    var randomnumber = Math.floor(Math.random()*2636)

    $('#footer').css({
        'background-position-x': '-' + randomnumber + 'px'
    });
    
});