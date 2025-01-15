<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/jquery-3.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="css/decoration.css">
    <link rel="stylesheet" href="css/topbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/formacoes.css">
    <link rel="stylesheet" href="css/experiencias.css">
</head>

<style>
    .selected {
        background-color: #4e4e4e;
        color: var(--cor-primaria);
    }
</style>

<main>

    <body>
        <div class=".tab-control">

            <?php
            include 'components/header.php'
            ?>

            <section class=" column " style="">
                <?php include 'components/home.php' ?>
            </section>

            <section class="conteudo aba-formacoes">
                <?php include 'components/formacoes.php' ?>
            </section>

            <section class="conteudo aba-experiencias">
                <?php include 'components/experiencias.php' ?>
            </section>


        </div>
    </body>

</main>
<footer>

</footer>
<script src="js/abas.js"></script>
<script src="js/expensable.js"></script>

</html>