<?php

#GENDERS
if ($_COOKIE['lang'] == 'pt') {
	$gndlst = array('M'=>'Masculino','F'=>'Feminino','A'=>'Agênero','O'=>'Outro');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gndlst = array('M'=>'Male','F'=>'Female','A'=>'Agender','O'=>'Other');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gndlst = array('M'=>'Masculino','F'=>'Feminino','A'=>'Agénero','O'=>'Otro');
	}

#CENTURIES
$cenlst = array('10'=>'X','11'=>'XI','12'=>'XII','13'=>'XIII','14'=>'XIV','15'=>'XV','16'=>'XVI','17'=>'XVII','18'=>'XVIII','19'=>'XIX','20'=>'XX','21'=>'XXI');

#FILTERS
if ($_COOKIE['lang'] == 'pt') {
	$fltlst = array('New'=>'Novo','Popular'=>'Popular','Unknown'=>'Desconhecidos');
	}
else if ($_COOKIE['lang'] == 'en') {
	$fltlst = array('New'=>'New','Popular'=>'Popular','Unknown'=>'Unknown');
	}
else if ($_COOKIE['lang'] == 'es') {
	$fltlst = array('New'=>'Nuevo','Popular'=>'Popular','Unknown'=>'Desconocidos');
	}

#COUNTRIES
if ($_COOKIE['lang'] == 'pt') {
	$coulst = array('ARG'=>'Argentina','BOL'=>'Bolívia','BRA'=>'Brasil','CAN'=>'Canadá','CHI'=>'Chile','CZE'=>'Tchéquia','COL'=>'Colômbia','DEN'=>'Dinamarca','ECU'=>'Equador','ENG'=>'Inglaterra','ESP'=>'Espanha','FRA'=>'França','GER'=>'Alemanha','GRE'=>'Grécia','GUY'=>'Guiana',
	'IRL'=>'Irlanda','ITA'=>'Itália','MEX'=>'México','NED'=>'Países Baixos','PER'=>'Peru','POL'=>'Polônia','POR'=>'Portugal','RUS'=>'Rússia','SCO'=>'Escócia','SUI'=>'Suíça','SUR'=>'Suriname','VEN'=>'Venezuela','URU'=>'Uruguai','USA'=>'Estados Unidos','WAL'=>'País de Gales');
	}
else if ($_COOKIE['lang'] == 'en') {
	$coulst = array('ARG'=>'Argentina','BOL'=>'Bolivia','BRA'=>'Brazil','CAN'=>'Canada','CHI'=>'Chile','CZE'=>'Czechia','COL'=>'Colombia','DEN'=>'Denmak','ECU'=>'Ecuador','ENG'=>'England','ESP'=>'Spain','FRA'=>'France','GER'=>'Germany','GRE'=>'Greece','GUY'=>'Guyana',
	'IRL'=>'Ireland','ITA'=>'Italy','MEX'=>'Mexico','NED'=>'Netherlands','PER'=>'Perú','POL'=>'Poland','POR'=>'Portugal','RUS'=>'Russia','SCO'=>'Scotland','SUI'=>'Switzerland','SUR'=>'Suriname','VEN'=>'Venezuela','URU'=>'Uruguay','USA'=>'United States','WAL'=>'Wales');
	}
else if ($_COOKIE['lang'] == 'es') {
	$coulst = array('ARG'=>'Argentina','BOL'=>'Bolivia','BRA'=>'Brasil','CAN'=>'Canadá','CHI'=>'Chile','CZE'=>'Chequia','COL'=>'Colombia','DEN'=>'Dinamarca','ECU'=>'Ecuador','ENG'=>'Inglaterra','ESP'=>'España','FRA'=>'Francia','GER'=>'Alemania','GRE'=>'Grecia','GUY'=>'Guayana',
	'IRL'=>'Irlanda','ITA'=>'Italia','MEX'=>'Mexico','NED'=>'Países Bajos','PER'=>'Peru','POL'=>'Polonia','POR'=>'Portugal','RUS'=>'Rusia','SCO'=>'Escocia','SUI'=>'Suiza','SUR'=>'Surinam','VEN'=>'Venezuela','URU'=>'Uruguay','USA'=>'Estados Unidos','WAL'=>'Gales');
	}

#GENRES
if ($_COOKIE['lang'] == 'pt') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comédia','Detective'=>'Investigação','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Terror','Journalism'=>'Jornalismo',
	'Parody'=>'Paródia','Philosophy'=>'Filosofia','Play'=>'Peça','Rhapsody'=>'Rapsódia','Romance'=>'Romance','Sociology'=>'Sociologia','Tale'=>'Conto','Tragedy'=>'Tragédia',
	'Poetry'=>'Poesia');
	}
else if ($_COOKIE['lang'] == 'en') {
	$gnrlst = array('Chronicle'=>'Chronicle','Comedy'=>'Comedy','Detective'=>'Detective','Epic'=>'Epic','Fantasy'=>'Fantasy','Horror'=>'Horror','Journalism'=>'Journalism',
	'Parody'=>'Parody','Philosophy'=>'Philosophy','Play'=>'Play','Rhapsody'=>'Rhapsody','Romance'=>'Romance','Sociology'=>'Sociology','Tale'=>'Tale',
	'Tragedy'=>'Tragedy','Poetry'=>'Poetry');
	}
else if ($_COOKIE['lang'] == 'es') {
	$gnrlst = array('Chronicle'=>'Crônica','Comedy'=>'Comedia','Detective'=>'Investigación','Epic'=>'Épico','Fantasy'=>'Fantasia','Horror'=>'Horror','Journalism'=>'Jornalismo',
	'Parody'=>'Parodia','Philosophy'=>'Filosofía','Play'=>'Pieza','Rhapsody'=>'Rapsodia','Romance'=>'Romance','Sociology'=>'Sociología','Tale'=>'Conto',
	'Tragedy'=>'Tragédia','Poetry'=>'Poesía');
	}

#LITERARY SCHOOLS
if ($_COOKIE['lang'] == 'pt') {
	$ltslst = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impressionismo','Indianism'=>'Indianismo',
	'Mannerism'=>'Maneirismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
	'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
	}
else if ($_COOKIE['lang'] == 'en') {
	$ltslst = array('Arcadism'=>'Arcadism','Baroque'=>'Baroque','Futurism'=>'Futurism','Iluminism'=>'Enlightment','Impressionism'=>'Impressionism','Indianism'=>'Indianism',
	'Mannerism'=>'Mannerism','Modernism'=>'Modernism','Naturalism'=>'Naturalism','Parnassianism'=>'Parnassianism','Pre-Modernism'=>'Pre-Modernism','Romanticism'=>'Romanticism',
	'Realism'=>'Realism','Symbolism'=>'Symbolism','Troubadorism'=>'Troubadorism');
	}
else if ($_COOKIE['lang'] == 'es') {
	$ltslst = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impresionismo','Indianism'=>'Indianismo',
	'Mannerism'=>'Manierismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
	'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
	}

#ACADEMIES
if ($_COOKIE['lang'] == 'pt') {
	$acalst = array('ABL'=>'Academia Brasileira de Letras');
	}
else if ($_COOKIE['lang'] == 'en') {
	$acalst = array('ABL'=>'Brazilian Academy of Letters');
	}
else if ($_COOKIE['lang'] == 'es') {
	$acalst = array('ABL'=>'Academia Brasileña de Letras');
	}

#LICENSES
if ($_COOKIE['lang'] == 'pt') {
	$liclst = array('PD'=>'Domínio Público','CR'=>'Todos os direitos reservados');
	}
else if ($_COOKIE['lang'] == 'en') {
	$liclst = array('PD'=>'Public Domain','CR'=>'All rights reserved');
	}
else if ($_COOKIE['lang'] == 'es') {
	$liclst = array('PD'=>'Dominio Publico','CR'=>'Todos los derechos reservados');
	}
?>