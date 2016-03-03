<?php
// lista-produse.php [Array de proba]
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
$produse[] = array(
	"nume" => "Numele meu e Five",
	"pret" => 1334,
	"cod" => "p105",
	"img" => "produs-5.jpg"
	);
$produse[] = array(
	"nume" => "Six este numarul 6",
	"pret" => 787,
	"cod" => "p106",
	"img" => "produs-6.jpg"
	);

/*
Adauga in fiecare array doua pozitii:
Arrayul va arata astfel:
 0 => 
    array (size=6)
      'nume' => string 'Produsul Unu' (length=12)
      'pret' => int 240
      'cod' => string 'p101' (length=4)
      'img' => string 'produs-1.jpg' (length=12)
      'url' => string 'produsul-unu' (length=12)
      'complex_url' => string 'p101-produsul-unu' (length=17)
*/

foreach ($produse as $key => $value) {
	// Transforma titlul in nice-url
	// Apoi, adauga, la fiecare produs, url-ul
	$produse[$key]['url'] = strtolower(str_replace(" ", "-", $produse[$key]['nume']));
	// Complex url: foloseste si codul unic in link
	$produse[$key]['complex_url'] = $produse[$key]['cod'] . "-" . $produse[$key]['url'];
	// Adauga o descriere, doar de proba
	$produse[$key]['descriere-produs'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo animi consequatur error ab eum eius exercitationem suscipit. Incidunt culpa saepe, a perspiciatis voluptatum laboriosam placeat.';
}