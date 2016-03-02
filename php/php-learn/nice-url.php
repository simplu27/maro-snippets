<?php

$produse = array();

$produse[] = array(
	"nume" => "Produsul Unu",
	"pret" => 240,
	"cod" => "p101",
	"img" => "produs-1.jpg"
	);

$produse[] = array(
	"nume" => "Produsul Doi",
	"pret" => 890,
	"cod" => "p102",
	"img" => "produs-2.jpg"
	);

$produse[] = array(
	"nume" => "Produsul Trei",
	"pret" => 743,
	"cod" => "p103",
	"img" => "produs-3.jpg"
	);

$produse[] = array(
	"nume" => "Nume lung pentru produsul Patru",
	"pret" => 743,
	"cod" => "p104",
	"img" => "produs-4.jpg"
	);


foreach ($produse as $key => $value) {
	$produse[$key]['url'] = strtolower(str_replace(" ", "-", $produse[$key]['nume']));
	$produse[$key]['complex_url'] = $produse[$key]['cod'] . "-" . $produse[$key]['url'];
}

echo "<pre>";
	var_dump($produse);
echo "<pre>";

// Return:

/*
array (size=4)
  0 => 
    array (size=6)
      'nume' => string 'Produsul Unu' (length=12)
      'pret' => int 240
      'cod' => string 'p101' (length=4)
      'img' => string 'produs-1.jpg' (length=12)
      'url' => string 'produsul-unu' (length=12)
      'complex_url' => string 'p101-produsul-unu' (length=17)
  1 => 
    array (size=6)
      'nume' => string 'Produsul Doi' (length=12)
      'pret' => int 890
      'cod' => string 'p102' (length=4)
      'img' => string 'produs-2.jpg' (length=12)
      'url' => string 'produsul-doi' (length=12)
      'complex_url' => string 'p102-produsul-doi' (length=17)
  2 => 
    array (size=6)
      'nume' => string 'Produsul Trei' (length=13)
      'pret' => int 743
      'cod' => string 'p103' (length=4)
      'img' => string 'produs-3.jpg' (length=12)
      'url' => string 'produsul-trei' (length=13)
      'complex_url' => string 'p103-produsul-trei' (length=18)
  3 => 
    array (size=6)
      'nume' => string 'Nume lung pentru produsul Patru' (length=31)
      'pret' => int 743
      'cod' => string 'p104' (length=4)
      'img' => string 'produs-4.jpg' (length=12)
      'url' => string 'nume-lung-pentru-produsul-patru' (length=31)
      'complex_url' => string 'p104-nume-lung-pentru-produsul-patru' (length=36)
*/