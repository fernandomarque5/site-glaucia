<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/agendamentos/screen1440.css">
    <link rel="stylesheet" href="estilos/agendamentos/screen1024.css">
    <link rel="stylesheet" href="estilos/agendamentos/screen768.css">
    <link rel="stylesheet" href="estilos/agendamentos/screen651.css">
    <link rel="stylesheet" href="estilos/agendamentos/screen431.css">
    <link rel="stylesheet" href="estilos/agendamentos/screen320.css">
    <link rel="stylesheet" href="agendamentos.css">
    <style>
        
        div{
            background-color:burlywood;
            color:white;
            width:600px;
            height: 100px;
            box-shadow: 0px 0px 2px black;
            text-align: center;
            font: 38pt arial;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            line-height: 20px;
            font-weight: bolder;
            border-radius: 20px;

        }
        p{
            height: 50vh;
            background-color: blue;
        }
        #voltarhome{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -55%);
            text-decoration: none;
            border: 1px solid black;
            box-shadow: 0px 0px 2px black;
            width: 80px;
            text-align: center;
            background-color: wheat;
            color: black;
            
        }
        

    </style>
</head>
<body>
<header>
        
        <a href="home.html"><img id="logoGl" src="imagens/logo2-site-gl.png" alt="logo-karala"> </a>
        <img onclick="iconeMenuIndor()"  id="iconeMenu" src="imagens/menubar.png" alt="">
        <img onclick="iconeMenuOutdor()"  id="iconeMenu2" src="imagens/menubar.png" alt="">
 
        <nav id="navIndor">
         <a id="navAgendamentosIndor" href="index.html">Home</a>
         <a id="navProcedimentosIndor" href="#">Procedimentos</a>
         </nav>
 
     </header>
     <nav id="navOutdor">
         <a id="navAgendamentosOutdor" href="index.html">Home</a>
         <a id="navProcedimentosOutdor" href="#">Procedimentos</a>
     </nav>

    
    <!--a Super TAG PHP é formda por < ? php ? > tudo que tiver entre a abertura e fechamento da tag, sera considerada como função PHP"-->

    <div>
        <?php
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];
           $idade = $_GET["idade"];
           $prod_facial = $_GET["facial"];
           $prod_corporal = $_GET["corporal"];
           $data = $_GET["data"];
           $horario = $_GET["horario"];

        echo " <h1> Seu Agendamento foi Concluido </h1> ";
        ?>
    </div>
    <br>
    <a id="voltarhome" href="home.html">Voltar</a>    
</body>
</html>