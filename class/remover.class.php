<?php
    class remover{
        public function exe ($linha, $file)
        {
            $linha = $_GET['linha'];
            unset($file[$linha-1]);
            file_put_contents('log.txt',$file);
            header('Location: index.php?');
        }
        
    }

?>










