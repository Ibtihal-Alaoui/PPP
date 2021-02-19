<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Je Donne</title>
        <link rel="stylesheet" href="./JEDONNE.css">
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
    <body class="DONNER">
        <div class="container" style="width: 600px;">
            <form method="POST" action="DonationIsDone.php">
            
                    <div class="DON">
                        <h1>JE DONNE</h1>
                    </div>
                    <div class="col-25">
                        <label for="fname" name="name1">Nom complet</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="nomcomplet" placeholder="Entrer votre nom.." required="required">
                    </div>

                    <div class="col-25">
                        <label for="city">Ville</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="city" name="Ville" placeholder="Ville" required="required">
                    </div>
                
                
                    <div class="col-25">
                        <label for="address">Adresse</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="address" name="Adresse" placeholder="Adresse">
                    </div>
                
                    <div class="col-25">
                        <label for="Telephone">Téléphone</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Telephone" name="Telephone" placeholder="Entrer votre numéro.." required="required">
                    </div>
                

                    <div class="col-25">
                        <label for="Don">Don</label>
                    </div>
                    <div class="col-75">
                        <select id="don" name="Don" required="reserved">
                            <option value="choix">Choisissez votre don</option>
                            <option value="Argent">Argent</option>
                            <option value="Vêtement">Vêtement</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                
                    <div class="col-25">
                        <label for="Argent">Argent</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="argent" name="argent" placeholder="Somme" >
                    </div>
                
                   <div class="col-25">
                    <label for="autre">Si autre</label>
                   </div>
                    <div class="col-75">
                        <input type="tel" id="autre" name="autre" placeholder="autre">
                    </div> 
           
                    <div class="col-75">
                        <input type="submit" id="submit" name="submit" value="ENVOYER">
                    </div>
                    <span id="verify"></span>
                
                
            </form>
        </div>
       
         <script>
    
                var validation = document.getElementById('submit');
                var nom=document.getElementById("fname");
                var city=document.getElementById("city");
                var Telephone=document.getElementById("Telephone");
                var argent=document.getElementById("argent");
                var verify=document.getElementById("verify");
                var textv=/^[a-zA-Zéèîï][a-zA-zéèîï]+([-'\s][a-zA-Zéèîï][a-zA-zéèîï]+)?/;
                var numv=/^[1234567890+]/;
                validation.addEventListener('click',f_valid);
     
                
                function f_valid(event){
                   
                     if(textv.test(nom.value) == false){
                        event.preventDefault();
                        verify.textContent="Vérifier vos informations s'il vous plaît !";
                        verify.style.color='red';
                         
                    }else  if(textv.test(city.value) == false){
                        event.preventDefault();
                        verify.textContent="Vérifier vos informations s'il vous plaît !";
                        verify.style.color='red';
                }else  if(numv.test(Telephone.value) == false){
                        event.preventDefault();
                        verify.textContent="Vérifier vos informations s'il vous plaît !";
                        verify.style.color='red';
                }else  if(numv.test(argent.value) == false){
                        event.preventDefault();
                        verify.textContent="Vérifier vos informations s'il vous plaît !";
                        verify.style.color='red';
                
                }
                }
    
            </script>

           
   
        
    </body>
        
    
