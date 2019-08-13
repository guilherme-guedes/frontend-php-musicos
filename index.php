<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <nav>
            <ul>
                <li class="home-icon"><i class="fas fa-guitar"></i></li>
                <li><a href="/">Buscar</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="toggleOn-icon"><i class="fas fa-power-off"></i></li>
            </ul>
        </nav>
        <main>
            <?php 
                if(isset($contentFile))
                    include_once("templates/".$contentFile);
                else
                    include_once("templates/home.html");
            ?>        
        </main>
        <footer>
            <div>
                <p>Desenvolvido por Guilherme Guedes</p>
            </div>
        </footer>
    </div>
</body>
</html>