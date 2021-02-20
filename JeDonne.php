<DOCTYPE! html>
<html>

    <head>
        <title>Je Donne</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./JeDonne.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    
    <header class="header-style-lien">
        <div class="imagehaut">
            <a href="index.html">
                <img src="./logo.jpg" height="100px" width="100px">
            </a>
        </div>
        <div class="headd">
            <h1 class="head">MEJMOU3IN</h1>
        </div>
    </header> 

    <body>
        <div class=DonationIsDone>
        
            <p>Vôs informations sont bien enregistrées ! </p>
         <p>Merci beaucoup pour votre Don, nous allons vous contacter le prochain possible. </p>
         <p>Retour à la page <a href="JeDonne">d'Accuiel.</a></p>
        
        
        </div>
        
     <?php
        
             
            $conn=mysqli_connect('localhost','root','','Mejmou3in') or die(mysqli_error());
            $Nom=$_POST['nomcomplet'];
            $Ville=$_POST['Ville'];
            $Adresse=$_POST['Adresse'];
            $Telephone=$_POST['Telephone'];
            $Don=$_POST['Don'];
            $Argent=$_POST['argent'];
            $Autre=$_POST['autre'];

            $req="INSERT INTO je_donne (Nom_complet,Ville,Adresse,Téléphone,Don,Somme,Autre) values ('$Nom','$Ville','$Adresse','$Telephone','$Don',$Argent,'$Autre') ";

            $res=mysqli_query($conn,$req);
            mysqli_close($conn);

            ?>

    </body>

</html>
