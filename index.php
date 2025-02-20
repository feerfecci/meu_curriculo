<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="css/consts.css">
</head>

<style>
    .selected {
        background-color: #4e4e4e;
        color: var(--cor-primaria);
    }
</style>

<main>

    <body>
        <?php
        include 'components/header.php'
            ?>

        <div class="tab-control">
            <section class="conteudo aba-home column" style="">
                <?php include 'components/home.php' ?>
            </section>

            <section class="conteudo aba-formacoes">
                <?php include 'components/formacoes.php' ?>
            </section>

            <section class="conteudo aba-experiencias column">
                <?php include 'components/experiencias.php' ?>
            </section>

            <section class="conteudo aba-read-me column">
                <?php include 'components/readMe.php' ?>
            </section>


        </div>
    </body>

</main>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/abas.js"></script>
<script src="js/expensable.js"></script>

</html>