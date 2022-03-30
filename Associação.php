<?php

require 'Produto.php';
require 'Fabricante.php';

$celular = new Produto("que o celular é bão pacas" , 10 , 850);
$celular->setFabricante = "Caio Enterprise";

$caioEnterprise = new Fabricante("Caio Enterprise", "Rua Agnaldo Fonseca", "Identidade: 00.000.000");

echo "A descrição do produto é {$celular->getDescricao()} e seu fabricante é {$caioEnterprise->getNome()}";