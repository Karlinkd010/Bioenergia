$(document).ready(function () {


    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $('#Model_login').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);// Button that triggered the modal
        
    });

    $("#btncerrar").click(function (e) {
        e.preventDefault();
        location.href ="http://localhost/Bioenergia.com";
    });    
});

