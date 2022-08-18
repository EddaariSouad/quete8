<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<body>
   
    <?php 
        include './includes/head.php';
        include './includes/header.php';
    ?>

    <div class="row">
        <div class="col-md-5">
        <a href="index.php?ul"><button type="button" style="width:500px" class="btn btn-outline-dark">Home</button></a>
            
        <?php 

        if(!empty($_SESSION['option1'])){
                include './includes/ul.php'; 
            }
        ?>
        </div>

        <?php 
       

            if(isset($_GET['form'])){
            include './includes/form.php';
            }

           elseif(isset($_POST['submit'])){
            if(isset($_POST['prenom']) && !empty($_POST['prenom'])
            && isset($_POST['nom']) && !empty($_POST['nom'])
            && isset($_POST['age']) && !empty($_POST['age'])
            && isset($_POST['taille']) && !empty($_POST['taille'])
            && isset($_POST['radios']) && !empty($_POST['radios'])){
                $prenom=htmlspecialchars($_POST['prenom']);
                $nom=htmlspecialchars($_POST['nom']);
                $age=htmlspecialchars($_POST['age']);
                $taille=htmlspecialchars($_POST['taille']);
                $radios=htmlspecialchars($_POST['radios']);

            // echo htmlspecialchars($prenom) . htmlspecialchars($nom) . htmlspecialchars($age) . htmlspecialchars($taille) . htmlspecialchars($radios) ;
            
            $_SESSION['option1']=[
            'prenom'=> $prenom,
            'nom'=> $nom,
            'age'=> $age,
            'taille'=> $taille,
            'radios'=> $radios
            ];
            echo '<a href="index.php?form"><button type="button" class="btn btn-outline-success">les données ont bien été sauvegardées</button></a>';
        }
        else{
            echo '<a href="index.php?form"><button type="button" class="btn btn-outline-danger">saisir toutes les donées </button>';

        }
        }
        elseif(empty($_SESSION['option1'])){
            echo'<a href="index.php?form"><button type="button" class="btn btn-primary">Ajouter des données</button></a>';
        }
        echo '<div class="col-5">';
        if(isset($_GET['debugging'])){
            echo '<h3>debugging</h3> <br>';
            print_r($_SESSION['option1']);
        }
        if(isset($_GET['concatenation'])){
            echo '<h3>concatenation</h3> <br>';
            echo $_SESSION['option1']['prenom'] . "\n" . $_SESSION['option1']['nom'] . '<br>'; 
            echo $_SESSION['option1']['age'] .' ans, je mesure ' . $_SESSION['option1']['taille'] . 'm et je fais partie des ' . $_SESSION['option1']['radios'] . ' de AFCI <br>';
            echo ($_SESSION['option1']['prenom']) ."\n". strtoupper($_SESSION['option1']['nom']) .'<br>';
            echo $_SESSION['option1']['age'] .' ans, je mesure ' . $_SESSION['option1']['taille'] . 'm et je fais partie des ' . $_SESSION['option1']['radios'] . ' de AFCI <br>';
            echo ($_SESSION['option1']['prenom']) ."\n". strtoupper($_SESSION['option1']['nom']) .'<br>';
            echo $_SESSION['option1']['age'] .' ans, je mesure ' . str_replace('.',',', $_SESSION['option1']['taille']) . 'm et je fais partie des ' . $_SESSION['option1']['radios'] . ' de AFCI <br>';

        }
        if(isset($_GET['boucle'])){
            echo '<h3>loop</h3> <br>';
          for($i=0; $i<10;$i++ ){
            echo $_SESSION['option1']['age'] .' ans, je mesure ' . $_SESSION['option1']['taille'] . 'm <br>';
          }
        }
        if(isset($_GET['fonction'])){
            echo '<h3>fonction</h3> <br>';
            foreach($_SESSION['option1'] as $clef => $value){
                echo 'Cette lige correspond à la clef '.  $clef . ' et contient '.  $value .'<br>' ;
            }
        }
        
        if(isset($_GET['delete'])){
            session_destroy();
                echo 'Les données ont bien été supprimées';
        }
        echo '</div>';
        ?>
</div>
<?php include './includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>