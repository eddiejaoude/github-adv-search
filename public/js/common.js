$(document).ready(function() {
    // form interaction
    $('form.box input').focusin( function() {
        $(this).addClass('active');
    });
    $('form.box input').focusout( function() {
        $(this).removeClass('active');
    });

    // result table
    $('table#results tbody tr').hover(
    function() {
        $(this).addClass('hover');
    },
    function() {
        $(this).removeClass('hover');
    });
    
});
