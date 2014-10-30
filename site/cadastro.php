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
                <a href="./index.php"><img id="banner" src="banner.png"></a>
            </div>
            <div id="search">
                
            </div>
        </div>
        <div id="menu">
            <div id="menuNav">
                <div class="linkMenu"><a href="./index.php">Home</a></div>
                <div class="linkMenu"><a href="./bolsistas.php">Bolsista</a></div>
                <div class="linkMenu"><a href="./projetos.php">Projeto</a></div>
                <div class="linkMenu"><a href="./contato.php">Contato</a></div>
            </div>
        </div>
        <div id="bigBox">
            <div id="content">
                
                <form name="cadastroBolsista">
                    <table>
                        <tr>
                            <td><label>Nome:</label></td>
                            <td><input type="text" name="nomeBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>Salário:</label></td>
                            <td><input type="text" name="salarioBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>E-mail</label></td>
                            <td><input type="text" name="emailBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>Telefone:</label></td>
                            <td><input type="text" name="telefoneBolsista" value=""/></td>
                        </tr>
                    </table>
                    <input type="submit" value="Cadastrar" name="cadastrarBolsista"/>
                    <input type="reset" value="Reset" name="resetCampos"/>
                </form>
                
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
                <div class="right"><a href="./cadastro.php">Cadastro<br></a></div>
                <div class="right"><a href="./esqueceuSenha.php">Esqueceu sua senha?</a></div>
            </div>
        </div>
        <div id="line">
            
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>
