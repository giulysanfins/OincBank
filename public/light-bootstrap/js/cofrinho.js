var today = new Date();
var day1 = today.setDate(today.getDate() + 1);
var tomorrow = new Date(day1);
var inp_data_encerramento = document.getElementById('data_encerramento');


$('.data_encerramento').datepicker({
    autoclose: true,
    language: 'pt-BR',
    orientation: 'bottom',
    startDate: tomorrow,
});

$('.data_encerramento').mask('00/00/0000');

inp_data_encerramento.addEventListener("focusout", function() {
    let span_ence = document.getElementById('erro_encerramento');
    if(inp_data_encerramento.value == '')
    {
        span_ence.classList.remove('d-none');
    } else {
        span_ence.classList.add('d-none');
    }
});