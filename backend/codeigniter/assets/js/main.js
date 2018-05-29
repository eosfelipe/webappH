$('#sandbox-container .input-daterange').datepicker({
    format: "dd-mm-yyyy",
    todayBtn: "linked",
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayHighlight: true
});
$('#datePM .input-daterange').datepicker({
    format: "dd-mm-yyyy",
    todayBtn: "linked",
    language: "es",
    orientation: "bottom auto",
    autoclose: true,
    todayHighlight: true
});
$('.alert').alert();

$('#input-id').fileinput({
        theme: 'fa',
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
