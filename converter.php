<?php 

	$dir = "./videos/"; // diretório para o arquivo
	$dirFinal = "./videos/convert/"; // diretório para arquivos convertidos
	$file = "arquivo.rmvb"  // nome do arquivo
	$fileName = explode(".", $file); // fileName[0] recebe nome do arquivo e fileName[1] recebe a extensão

	if(! is_dir($dirFinal)){ // se o diretório não existe
		mkdir($dirFinal); // cria diretório
	}

	// se o arquivo .rmvb existe
	if (is_file($dir . $file)){
		// convertendo arquivo
		shell_exec("ffmpeg -i " . $dir . $file . " -vcodec mpeg4 -sameq -acodec aac -ab " . $dirFinal . $fileName[0] . ".mp4");
	}

	// verificando existência do arquivo convertido
	if (is_file($dirFinal . $fileName[0] . ".mp4")) {
		echo "Arquivo convertido: " . $dirFinal . $fileName[0] . ".mp4";
	}

?>