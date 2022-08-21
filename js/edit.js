function edit_element(elemento){
    if(elemento.is(':disabled')){
        elemento.prop('disabled',false);
        elemento.css('border','solid 1px');
        elemento.css('border-radius','5px');
    }else{
        elemento.prop('disabled',true);
        elemento.css('border','none');
        return elemento.val();
    }
}

function edit(id) {
    const nome = $('#area_nome');
    const cpf = $('#area_cpf');
    const email = $('#area_email');
    const data = $('#area_data');
    const tel = $('#area_tel');
    const log = $('#area_log');

    let n_nome = $.trim(edit_element(nome));
    var n_cpf = edit_element(cpf);
    var n_email = edit_element(email);
    var n_data = edit_element(data);
    var n_tel = edit_element(tel);
    var n_log = edit_element(log);
    $.post('../php_action/update.php',{id:id, nome:n_nome, cpf:n_cpf, email:n_email, data:n_data, tel:n_tel, log:n_log});
}