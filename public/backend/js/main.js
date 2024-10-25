$(document).on('click', '.sg--dropdown-toggle', function (e) {
    e.preventDefault();
    e.stopPropagation();

    $('.sg--dropdown').not($(this).closest('.sg--dropdown')).removeClass('show')
    $(this).closest('.sg--dropdown').toggleClass('show')
})

$(document).click(function (e) {
    $('.sg--dropdown').not('.sg--dropdown--relative').removeClass('show')
})









