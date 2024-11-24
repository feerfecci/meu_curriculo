$(function(){
    $(".aba-home").show();
    $(".aba-formacoes").hide();
    $(".aba-experiencias").hide();

    $(".aba").on("click",function (){
        let idAba = $(this).attr("id");
        console.log(idAba);
        $(this).parent().find(".selected").removeClass("selected");
        $(this).addClass("selected");
        $(".conteudo").hide();
        $("."+idAba).show();
    });


})
