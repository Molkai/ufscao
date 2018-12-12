function saving(elem){
    $(elem).text('Salvando...');
    $(elem).removeClass('btn-add');
    $(elem).css('background-color', '#449ca2');
    $(elem).attr('disabled', true);
};