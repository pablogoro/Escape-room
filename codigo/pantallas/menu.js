$('.secciones article').hide();
$('.secciones article:first').show();


$('ul.stextos li a').click(function() {
    $('.secciones article').hide();
    var activeSec = $(this).attr('href');
    $(activeSec).show();
    return false;
});