$(function () {
    $(".acordeao").click(function () {
        // Alterna a classe 'active' no acordeão clicado
        $(this).toggleClass("active"); 

        // Alterna a classe 'show' no elemento seguinte (o painel)
        $(this).next().toggleClass("show"); 
    });
});