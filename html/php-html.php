<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php 
        foreach($students as $nom){
          echo $nom . " , ";
        }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php for($i=1 ; $i <= 31 ; $i++){echo "<option value =" . $i . " >$i</option>";} ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php for($j=1 ; $j <= 12 ; $j++){echo "<option value =" . $j . " >$j</option>";} ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php for($k=2017; $k <= 2025 ; $k++){echo "<option value =" . $k . " >$k</option>";} ?></select>
     </form>
     <hr>
     <?php 
     if(isset($_GET['sexe'])){
       if($_GET['sexe'] == 'fille'){
         echo "<p> Je suis une fille </p>";
       } elseif($_GET['sexe'] == 'garçon'){
         echo "<p> Je suis un garçon </p>";
       }else{
         echo "Je suis indéfini";
       }
     }
     
     ?>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
  </body>
</html>
