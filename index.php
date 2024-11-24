<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/jquery-3.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="css/decoration.css">
</head>
<header>

    <!-- <a href="index.php">Home</a>
    <a href="formacoes.php">Formações</a>
    <a href="experiencias.php">Expêriencias</a> -->
</header>

<style>
    .selected {
        background-color: #4e4e4e;
        color: var(--cor-primaria);
    }
</style>

<main>

    <body>
        <div class=".tab-control">
            <ul class="abas">
                <li class="aba selected" id="aba-home">Home</li>
                <li class="aba" id="aba-formacoes">Formações</li>
                <li class="aba" id="aba-experiencias">Expêriencias</li>
            </ul>

            <section class=" row conteudo aba-home " style="">
                <?php include 'components/home.php' ?>
            </section>

            <section class="conteudo aba-formacoes">
                <?php include 'formacoes.php' ?>
            </section>

            <section class="conteudo aba-experiencias">
                <?php include 'experiencias.php' ?>
            </section>


        </div>
    </body>

</main>
<footer>

</footer>
<script src="js/abas.js"></script>

</html>