<!-- 3) CEP: valida_cep($cep, $opcao) deve ter 2 comportamentos:

- se a opção passada no parâmetro 2 for 1, deve retornar o CEP passado no parâmetro 1 'formatado', isto é, retornar 5 dígitos numéricos seguido de um '-', seguido de mais 3 dígitos numéricos.

- se a opção passada no parâmetro 2 for 0, deve retornar true ou false se o CEP passado no parâmetro for válido ou inválido, respectivamente. Nesta opção deve ser tratada a quantidade de dígitos e se são dígitos numéricos. -->

<?php

function valida_cep($cep, $opcao)
{
	$cep = trim($cep);
	if ($opcao == 0)
	{
		$rightCep = ereg("^[0-9]{5}-[0-9]{3}$", $cep);
		if (!$rightCep)
		{
			echo "CEP correto";
			return true;
		}
		else
		{
			echo "CEP inválido";
			return false;
		}
	}
	else
	if ($opcao == 1)
	{
		$part0 = substr($cep, 0, 5);
		$part1 = substr($cep, 5);
		echo $part0 . "-" . $part1;
		return $part0 . "-" . $part1;
	}
	else
	{
		echo "Você está fazendo algo errado.";
	}
}

valida_cep("05763470", 1); // Mask

// valida_cep("05763-470", 0); // Sem mask + isNaN

?>