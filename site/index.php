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
                <div class="linkMenu">
                    <ul class="menuDrop">
                        <li><a href="#">Projeto</a>
                            <ul>
                                <li><a href="?page=cadastrarProjeto">Cadastrar Projeto</a></li>
                                <li><a href="?page=projetos">Projetos Ativos</a></li>
                                <li><a href="?page=#">Adicionar Tarefas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="linkMenu"><a href="?page=contato">Contato</a></div>
            </div>
        </div>
        <div id="bigBox">
            <div id="content">
                <?php
                    $page = filter_input(INPUT_GET, "page");
                    
                    if ($page == "" || $page == "home") {
                    	//include "./index.php";
                    }else if ($page == "bolsitas") {
                        include "./user/bolsistas.php";
                    } else if ($page == "projetos") {
                        include "./projetos/projetos.php";
                    } else if ($page == "contato") {
                        include "./others/contato.php";
                    } else if ($page == "esqueceuSenha") {
                        include "./others/esqueceuSenha.php";    
		    }else if($page == "cadastroBolsista"){
                        include "./user/cadastro.php";    
		    }else if($page == "alterarDadosBolsista"){
                        include "./user/alterarDadosBolsista.php";    
                    }else if($page == "editarBolsista"){
                        include "./user/editarBolsista.php";
                    }else if($page == "deletarBolsista"){
                        include "";
                    }else if($page == "editarProjeto"){
                        include "./projetos/editarProjeto.php";
                    }else if($page == "deletarProjeto"){
                        include "./projetos/removerProjetoForm.php";
                    }else if($page == "cadastrarProjeto"){
                        include "./projetos/cadastroProjeto.php";
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
