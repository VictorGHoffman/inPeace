function edit_element(elemento){
    if(elemento.is(':disabled')){
        elemento.prop('disabled',false);
        elemento.css('border','solid 1px');
        elemento.css('border-radius','5px');
        return elemento.val();
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
    const cidade = $('#area_cidade');
    const estado = $('#area_estado');

    const n_nome = $.trim(edit_element(nome));
    const n_cpf = edit_element(cpf);
    const n_email = edit_element(email);
    const n_data = edit_element(data);
    const n_tel = edit_element(tel);
    const n_log = edit_element(log);
    const n_cidade = edit_element(cidade);
    const n_estado = edit_element(estado);

    $.post('../php_action/update.php',{id:id, nome:n_nome, cpf:n_cpf, email:n_email, data:n_data, tel:n_tel, log:n_log, cidade:n_cidade, estado:n_estado});
}