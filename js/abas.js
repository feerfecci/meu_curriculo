$(function(){
    // $(".aba-home").show();
    // $(".aba-formacoes").hide();
    // $(".aba-experiencias").hide();
    $(".tab-control > :not(:first)").hide();

    $(".aba").on("click",function (){
        let idAba = $(this).attr("id");
        $(".abas").removeClass("selected");
        $(this).addClass("selected");
        $(".conteudo").hide();
        $("."+idAba).show();
    });
})
