<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
for ($i = 0; $i < count($mois); $i++) {
    echo $mois[$i] . '<br>';
}

echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = count($mois)-1; $i >= 0 ; $i --) {
    echo $mois[$i] . '<br>';
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
);

echo '10.Les eleves du college : <br>';
foreach($college as $categories => $classes) {
  echo '<br>' .$categories. ' : ' . '<br>';
    foreach($classes as $id => $nombre){
      foreach($nombre as $nom => $valeur) {
        echo $nom . ' : ' . $valeur . '<br>';
      }
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
$college['troisieme'] = array(
    array('Nom' => 'Parker', 'Prenom' => 'Peter'),
    array('Nom' => 'Ali', 'Prenom' => 'Muhammad'),
    array('Nom' => 'Tyson', 'Prenom' => 'Mike'),
    array('Nom' => 'Bourdier', 'Prenom' => 'Baptiste'),
  );
foreach($college as $categories => $classes) {
  echo '<br>' .$categories. ' : ' . '<br>';
    foreach($classes as $id => $nombre){
      echo '<br>';
      foreach($nombre as $nom => $valeur) {
      echo $nom . ' : '. $valeur . '<br>';
        
    }
  }
}

echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach($videotheque as $list => $film){
  echo '<br><br>';
  foreach($film as $description => $valeurs) {
    if($description == 'acteurs'){
      echo " " . $description . " : ";
      foreach($valeurs as $nom){
        echo $nom . " , ";
      }
    }else {
      echo " " . $description . " : " . $valeurs . '<br>';
    }
  }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque[4] = array(
    'nom' => 'La Ligne Verte',
    'date' => 1999,
    'realisateur' => 'Frank Darabont',
    'acteurs' => array(
      'Tom Hanks', 'David Morse', 'Michael Clark Duncan', 
    ),
    'synopsis' => "Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain, en 1935, en Louisiane, il était chargé de veiller au bon déroulement des exécutions capitales au bloc E (la ligne verte) en s'efforçant d'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes.",
  );
$videotheque[5] = array(
    'nom' => 'Rock',
    'date' => 1996,
    'realisateur' => 'Mickael Bay',
    'acteurs' => array(
      'Ed Harris', 'Sean Connery', 'Nicolas Cage',
    ),
    'synopsis' => "Excédé par l'injustice de son gouvernement, le Général Hummel se rend maître de l'île d'Alcatraz et menace de lancer un gaz mortel sur San Francisco. Deux hommes sont chargés de le contrer : un expert en armes chimiques, Stanley Goodspeed, et John Patrick Mason, l'unique prisonnier à s'être évadé d'Alcatraz. Ils se rendent ensemble sur l'île afin de stopper les projets destructeurs du Général.",
  );
$videotheque[6] = array(
    'nom' => 'Taken',
    'date' => 2008,
    'realisateur' => 'Pierre Morel',
    'acteurs' => array(
      	'liam Neeson', 'Maggie Grace','Famke Janssen',
    ),
    'synopsis' => "Ancien agent secret résidant à Los Angeles, Bryan Mills assiste par téléphone à l'enlèvement en plein Paris de sa fille, Kim. Devant faire face à un groupe de mafieux albanais spécialisés dans la traite des femmes et le proxénétisme, il aura besoin de tout son talent d'ex-agent pour l'en extirper en moins de 96 heures.",
);
foreach($videotheque as $list => $film){
  echo '<br><br>';
  foreach($film as $description => $valeurs) {
    if($description == 'acteurs'){
      echo " " . $description . " : ";
      foreach($valeurs as $nom){
        echo $nom . " , " . "<br>";
      }
    }else {
      echo " " . $description . " : " . $valeurs . '<br>';
    }
  }
}
echo '<br><br>';
