
$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    var pg = urlParams.get('p');       
    $("nav ul li a").each(function (i, data) {
        var link = $(data).attr('href').replace('/pessoal/php-dropbox-files/?p=', '');                               
        if (pg == link) {
            $(data).parent().addClass('active');            
        }
    });
});

$(document).on('click', '.bnt-info', function (e) {
    e.preventDefault();
    var id = $(this).data('id');    
    $('#modal-info .modal-body').html('');
    $.get("ajax/arquivos-info-modal", {id:id}, function (data) {
        if(data){
            $('#modal-info .modal-body').html(data);
        }
    });    
});