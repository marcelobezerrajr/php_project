<?php 
    $paginas = ['Home'=>'Minha página home aqui!','Sobre'=>'Estou na página sobre','Contato'=>'<form><input type="text" placeholder="Seu nome..." /></form>', 
            'FAQ'=>'perguntas frequentes', 'loja'=>'conteúdo loja']; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Site dinâmico</title> 
    <style type="text/css"> 
        *{ 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        } 
        header{ 
            background-color: cadetblue; 
            padding: 8px 10px; 
            text-align: center; 
        } 
        a{ 
            display: incline-block; 
            margin:0 10px; 
            color: white; 
            font-size: 17px; 
        } 
        section{ 
            max-width: 960px; 
            margin: 20px auto; 
            padding:0 2%; 
        } 
        h2{ 
            background-color: cadetblue; 
            color: white;
            padding: 8px 10px; 
        } 
        p{ 
            color: black; 
            margin-top:10px; 
            font-size: 16px; 
        } 
    </style> 
</head> 
<body> 
    <header> 
        <?php 
            foreach ($paginas as $key => $value) { 
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>'; 
            } 
        ?> 
    </header> 
    <section> 
        <h2><?php 
            $pagina = (isset($_GET['page'])) ? $_GET['page'] : 'home'; 
 
            if(!array_key_exists($pagina, $paginas)) { 
                $pagina = 'home'; 
            } 
 
            echo ucfirst($pagina); 
        ?></h2> 
        <p><?php echo $paginas[$pagina]; ?></p> 
    </section> 
</body> 
</html> 
