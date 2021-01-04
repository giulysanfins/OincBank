var today = new Date();
var inp_data_nascimento = document.getElementById('data_nascimento');

$('.data_nascimento').datepicker({
    autoclose: true,
    language: 'pt-BR',
    orientation: 'bottom',
    endDate: today,
});

$('.data_nascimento').mask('00/00/0000');

inp_data_nascimento.addEventListener("focusout", function() {
    let span_nasc = document.getElementById('erro_nascimento');
    if(inp_data_nascimento.value == '')
    {
        span_nasc.classList.remove('d-none');
    } else {
        span_nasc.classList.add('d-none');
    }
});