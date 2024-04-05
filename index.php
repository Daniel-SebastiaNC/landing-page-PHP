<?php include('config.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/style.css">
    
    <!--<link rel="stylesheet" href="estilo/font-awesome.min.css">-->
</head>
<body>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;
            case 'serviços':
                echo '<target target="serviços"/>';
                break;
        }
    ?>
    <header>
        <div class="center">
            <div class="left logo"><a href="">LogoMarca</a></div>
            <nav class="desktop right ">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>serviços">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
            <div class="btn-menu-mobile">
                    
                    </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>Home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Serviços">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        
    </header>
    
    <?php 
        if (file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        } else {
            if($url != 'depoimentos' && $url != 'serviços'){
                $pagina404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
            
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404) echo 'class=" fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/script.js"></script>
    <?php 
        if ($url == 'contato'){ ?>
            <script src="<?php echo INCLUDE_PATH;?>js/outraParteMap.js"></script>
            <script src="<?php echo INCLUDE_PATH;?>js/map.js"></script>
    <?php } ?>
    
</body>
</html>