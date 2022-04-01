<?php
    class alterar{
        public function exe ($texto, $linha, $file)
        {
            $linha = $_GET['linha'];
            $texto = $_GET['novoTexto'] . "\n";
            $file[$linha-1] = $texto;
            file_put_contents('log.txt',$file);
            header('Location: index.php?');
        }
        
    }

?>











        