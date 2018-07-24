<?php 

$link= "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content=file_get_contents($link);

//Pega o conteúdo bruto e formata scheme = https (protocolo), Host= servidor ou domínio Ex: Google, Path(Caminho do arquivo)

$parse = parse_url($link);
//["path"]=traz em string o caminho
$basename=(basename($parse["path"]));

//abrir arquivo ou criar 
$file = fopen($basename,"w+");

//escrever, gera cópia
fwrite($file,$content);

//fechar
fclose($file);
 ?>

<!-- O igual substitui o echo-->
 <img src="<?=$basename?>">