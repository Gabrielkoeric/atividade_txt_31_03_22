<?php

    require_once 'class/cadastrar.class.php';
    require_once 'class/alterar.class.php';
    require_once 'class/remover.class.php';

    $file = file ("log.txt");

    if (isset($_GET['cadastrar']) && isset($_GET['texto'])) {
        $cadastrar = new cadastrar();
        $texto = $_GET['texto'] . "\n";
        $cadastrar = $cadastrar->exe($file, $_GET['texto']);
    }

    if ( isset($_GET['alterar']) && isset($_GET['novoTexto']) && isset($_GET['linha']) ) {
        $alterar = new alterar();
        $texto = $_GET['novotexto'] . "\n";
        $linha = $_GET['linha'] . "\n";
        $alterar = $alterar->exe( $_GET['novotexto'], $_GET['linha'], $file);
    }

    if (isset($_GET['remover']) && isset($_GET['linha'])) {
        $remover = new remover();
        $linha = $_GET['linha'] . "\n";
        $linha = $remover->exe( $_GET['linha'], $file); 
    }

?>

Listagem de linhas <br><br>
<?php
    $cont = 0;
    foreach($file as $line) {
        $cont ++;
        echo $line. "<br>";
    }
?><br><br>

Cadastro de linhas <br><br>
<form method="get">
    <input type="text" name="texto" placeholder="Texto">
    <input type="submit" name="cadastrar" value="salvar">
</form>

Alteração de linhas <br><br>
<form method="get">
    <input type="integer" name="linha" placeholder="Linha a alterar">
    <input type="integer" name="novoTexto" placeholder="Novo texto">
    <input type="submit" name="alterar" value="alterar">
</form>

Remoção de linhas <br><br>
<form method="get">
    <input type="integer" name="linha" placeholder="Linha a remover">
    <input type="submit" name="remover" value="remover">
</form>