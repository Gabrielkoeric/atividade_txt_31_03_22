<?php
    class cadastrar{
        public function exe ($file, $texto)
        {
        $file = fopen('log.txt', 'a');
        $texto = $_GET['texto'] . "\n";
        fwrite($file, $texto);
        fclose($file);
        header('Location: index.php?');
        }
        
    }

?>