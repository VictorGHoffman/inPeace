function getEstado(){
    const estado = $('#estado').val()
    console.log(estado);
    $.post('../php_action/get_cidade.php',{estado:estado},(data)=>{
        console.log(data);
        $('#cidade').html("");
        $('#cidade').append(data);
    })
}