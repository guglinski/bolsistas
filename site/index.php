<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./styles/styles.css">
        <title>Trainee Manager</title>
    </head>
    <body>
        <div id="topo">
            <div id="logo">
                <a href="./index.php"><img id="banner" src="./images/banner.png" alt="" title=""></a>
            </div>
            <div id="search">
                
            </div>
        </div>
        <div id="menu">
            <div id="menuNav">
                <div class="linkMenu"><a href="?page=home">Home</a></div>
                <div class="linkMenu"><a href="?page=bolsistas">Bolsista</a></div>
                <div class="linkMenu"><a href="?page=projetos">Projeto</a></div>
                <div class="linkMenu"><a href="?page=contato">Contato</a></div>
            </div>
        </div>
        <div id="bigBox">
            <div id="content">
                <?php
                    $page = filter_input(INPUT_GET, "page");
                    
                    if ($page == "" || $page == "home") {
                    	//include "./index.php";
                    } else if ($page == "bolsitas") {
                        include "./bolsistas.php";
                    } else if ($page == "projetos") {
                        include "./projetos.php";
                    } else if ($page == "contato") {
                        include "./contato.php";
                    } else if ($page == "esqueceuSenha") {
                        include "./esqueceuSenha.php";    
		    }else if($page == "cadastroBolsista"){
                        include "./cadastro.php";    
		    }else if($page == "alterarDadosBolsista"){
                        include "alterarDadosBolsista.php";    
                    }else if($page == "editarBolsista"){
                        include "editarBolsista.php";
                    }else if($page == "deletarBolsista"){
                        include "";
                    }
                ?>
            </div>
            <div id="login">
                <form name="login" action="login.php" method="POST" enctype="multipart/form-data">
                    Login:<br><input type="text" name="login" value="" class="item" />
                    <div class="invisibleSeparator"></div>
                    Senha:<input type="password" name="password" value="" class="item" />
                    <div class="invisibleSeparator"></div>
                    <input type="submit" value="Entrar" name="entrar" class="smallRightItem" />
                </form>
                <div class="clear"></div>
                <div class="invisibleSeparator"></div>
                <div class="right"><a href="?page=cadastroBolsista">Cadastro<br></a></div>
                <div class="right"><a href="?page=alterarDadosBolsista">Alterar Dados<br></a></div>
            </div>
        </div>
        <div id="line">
            
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>
