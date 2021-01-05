var today = new Date();
var inp_data_nascimento = document.getElementById('data_nascimento');

$('.data_nascimento').datepicker({
    autoclose: true,
    language: 'pt-BR',
    orientation: 'bottom',
    endDate: today,
});

$('.data_nascimento').mask('00/00/0000');


