<DOCTYPE! html>
<html>

    <head>
        <title>Association</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./donationisdone.css">
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
        <div class="DonationIsDone">
        
         <p>Vôs informations sont bien enregistrées ! </p>
         <p>Merci.  </p>
         <p>Retour à la page <a href="index.html">d'Accuiel.</a></p>
        </div>
        
     <?php
        
             
            $conn=mysqli_connect('localhost','root','','mejmou3in') or die(mysqli_error());
            $Nom=$_POST['nom_complet'];
            $Ville=$_POST['Ville'];
            $Adresse=$_POST['Adresse'];
            $Telephone=$_POST['Telephone'];
            $email=$_POST['email'];
            $besoin=$_POST['Besoin'];
            $description=$_POST['description'];
           
            $req="INSERT INTO association (Nom_Complet,Ville,Adresse,Téléphone,Email,Besoin,Description) values ('$Nom','$Ville','$Adresse','$Telephone','$email','$besoin','$description') ";
            
            $re="SELECT * FROM je_donne";
            $reso=$conn->query($re);
            while($ligne=$reso->fetch_assoc()){
                echo $ligne['Nom_complet'].' '.$ligne['Ville'].' '.$ligne['Adresse'] .'<br>';           }
        
            mysqli_close($conn);

           
           
            ?>

    </body>

