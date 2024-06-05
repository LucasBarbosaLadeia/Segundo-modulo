<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <header class="header">
   <nav>
    <ul>
        <li>
            <a href="index.php?pagina=Home">
                Home
            </a>
        </li>        
        
    </ul>
   </nav> 
  </header>
  <main>
    <div class="porra">
        <div class="seila">
            <img src="imagens/capa parabellum.jpeg">
        </div>
    </div>
  <div class="destaques">
  <h1>Destaques</h1>
  </div>
  <div class="grid">
    <a href="paginas/jogos.php">
    <div class="coluna">
            <div class="imagemficha">
        <img src="imagens/rqxtpu6s.png" alt="Survivor"></div><div class="fichatexto">Grátis</div>
        </div>
        </a>
        <a href="survivortela.html">
    <div class="coluna">
        <div class="imagemficha">
            <img src="imagens/889jkb3f.png"></div><div class="fichatexto">Grátis</div>
    </div></a>
    
<div class="coluna">
    <div class="imagemficha">
        <img src="imagens/rqxtpu6s.png"></div><div class="fichatexto">Grátis</div>
</div>
    </div>
    <div class="grid">
        <a href="survivortela.html">
            <div class="coluna">
                <div class="imagemficha">
                    <img src="imagens/889jkb3f.png"></div><div class="fichatexto">Grátis</div>
            </div>
            </a>
        <div class="coluna">
            <div class="imagemficha">
                <img src="imagens/889jkb3f.png"></div><div class="fichatexto">Grátis</div>
        </div>
        
    <div class="coluna">
        <div class="imagemficha">
            <img src="imagens/rqxtpu6s.png"></div><div class="fichatexto">Grátis</div>
    </div>
        </div>
        <?php
         $pagina = $_GET["pagina"] ?? "home";

         $pagina = "paginas/{$pagina}.php";
         
         if (file_exists($pagina)) {
             include $pagina;
         } else {
             include "paginas/erro.php";
         }
        ?>
  </main>
</body>
</html>