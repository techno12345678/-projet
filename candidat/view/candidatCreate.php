<?php $title='Insecreption Candidat' ?>
<?php ob_start(); ?>
<?php include "includes/head1.php"  ;?>

<style>
form{

    margin-top: 100px;
    margin-left: 400px;

}
</style>

<body>
 

  <div class="container"style="height: 854px;margin-top: 250px;">


          <div class="step_row">
               <div id="progress_bar"></div>

              <div class="step_col">
              <small>Step 1</small>
            </div>

           <div class="step_col">
              <small>Step 2</small>
            </div>

           <div class="step_col">
              <small>Step 3</small>
           </div>   </div> 
         <header>Registration </header>
       
       

         <?php 
    if(!isset($_GET['candidat_id'])) {
     // $candidat= null;
    ?>
      <form action="index.php?action=addCandidat" method="post" >
    <?php  } else{ ?>
    
      <form action="index.php?action=modifyCandidat&amp;candidat_id=<?= $candidat['candidat_id'] ?>" method="post" >
    <?php }?>
    






     <font  color="orange">
        <?php if(isset($_GET['candidat_id']) and $_GET['candidat_id'] > 0) { ?>
        <font color="#00FA9A"><h2><b>MODIFICATION    </b></h2></font>
        <?php } else  {  ?>
            <font color="#00FFFF"><h2><b>INSECREPTION </b></h2></font>
        <?php } ?> 
        </font>
        
   
    <div class="form " id="form1"style="left: 50px;" >
   

   <div class="form first"style="top: 200px; ">
                  <div class="details domain">
                  <span class="title"> Domain Information </span>
                  <div class="fields1">
                     
                      <div class="input-field"style="padding-left: 250px;">
                           <label>Domain : </label>
                           <select name="domaine" id="domain"required style="margin-bottom: 25px;width: 284px;">
                              <option disabled selected>--choose domain</option>
                              <option value="domain1">domain1 </option>
                              <option value="domain2" >domain2</option>
                              <option value="domain3" >domain3</option>
                              <option value="domain4" >domain4</option>

                    </select>
                              
                      </div>

                      <div class="input-field"style="padding-left: 240px;">
                          <label>Spécialité :</label>
                          <select name="specialite" id="specialite"required style="margin-bottom: 20px;width: 280px;">
                              <option disabled selected>-- speciality</option> 
                                                                                  

                          </select>
                      </div>

                     <div class="btn"><button type="button" id="next"> Next</button></div>
              
                    </div> </div>    </div>  

  </div>                 
           
         

          <div class="form" id="form2"  >
                         <div class="form second" style="width: 800px;top: 200px; " >
                         <div class="details personal">
                         <span class="title">Personel Details</span>
                         <div class="fields">

              
                      <div class="input-field">
                          <label>Nom</label>
                          <input type="text" name="nom" id="firstname"placeholder="votre nom"value='<?= $candidat['nom'] ?? null ?>'required >
                      </div>

                      <div class="input-field">
                          <label>Prénom</label>
                          <input type="text" name="prenom" id="lastname" placeholder="votre prénom" value='<?= $candidat['prenom'] ?? null ?>'required >
                      </div>

                      <div class="input-field">
                          <label>Date de Naissance</label>
                          <input type="date" name="birthday"   id="birthday"  placeholder="date naissance" value='<?= $candidat['birthday']  ?>'required >
                      </div>
                      <div class="input-field">
                          <label>Tléphone</label>
                          <input type="number" name="telephone" id="telephone" placeholder="Enter your number" value='<?= $candidat['telephone']  ?>'required >
                      </div>


                      <div class="input-field">
                          <label>Adresse de Résidence</label>
                          <input type="text" name="adresse"id="adresse"  placeholder="Enter your adresse " value='<?= $candidat['adresse'] ?? null ?>'required >
                      </div>
                  
                  
                 <div class="btn"><button type="button" id="back1"> Back</button>

                   <button type="button" id="next2"> Next</button></div>

</div>
                  
</div>
                 
                   </div>
   <div class="form" id="form3">
      <div class="form three" style="width: 800px; ">


            <div class="details address">
               <span class="title">Diplome</span>

         <div class="fields">
          <div class="input-field">
              <label>Titre de diplome </label>
              <input type="text" name="titrediplome"id="titledp" placeholder="Entrer Titre" value='<?= $candidat['titrediplome'] ?? null ?>'required >
          </div>

          <div class="input-field">
              <label>Diplome</label>
              <input type="text" name="diplome"  id="diplome"placeholder="entrer theme" value='<?= $candidat['diplome'] ?? null ?>'required >
          </div>

          <div class="input-field">
              <label>Date option de diplome</label>
              <input type="date" name="datediplome"  id="datedp" placeholder="Entrer date de diplome" value='<?= $candidat['datediplome'] ?? null ?>'required >
          </div>
          <span class="title" style="width: 790px;" >Action de Formation</span>

          <div class="input-field">
              <label>Fonction</label>
                          <select name="fonction"id="fonction" value='<?= $candidat['fonction'] ?? null ?>'required >
                              <option disabled selected>--choose fonction</option>
                              <option value="doctorat">doctorat </option>
                              <option value="majester">majester</option>
                              <option value="licence">licence</option>
                          </select>
                      </div>

          <div class="input-field">
              <label>Employeur</label>
              <input type="text"name="employer"id="employer"  placeholder="Entrer votre emploi" value='<?= $candidat['employer'] ?? null ?>'required >
          </div>

          <div class="input-field">
              <label> Logiciel</label>
              <input type="text"name="logiciel" id="logiciel"placeholder="Entrer votr logiciel" value='<?= $candidat['logiciel'] ?? null ?>'required >
          </div>
      </div>
  </div>

  <div class="details formation">
      <span class="title">Action de Formation</span>

      <div class="fields">
          <div class="input-field">
              <label>Thème</label>
              <input type="text"name="themef" id="themef"placeholder="Enter le theme de formation" value='<?= $candidat['themef'] ?? null ?>'required >
          </div>

          <div class="input-field">
              <label>Lieu</label>
              <input type="text"name="placef" id="placef" placeholder="Enter le lieu de formation" value='<?= $candidat['placef'] ?? null ?>'required >
          </div>

          <div class="input-field">
              <label>Date </label>
              <input type="date"name="datef"id="datef" placeholder="Enter la date de formation" value='<?= $candidat['datef'] ?? null ?>'required >
          </div>
          <div class="formation-details">
           <input type="radio" name="categorie"     value=" Externe IAP"   <?= $candidat['categorie '] ?? null ?> id="dot-1">
              <input type="radio" name="categorie"  value=" Internes IAP"  <?= $candidat['categorie'] ?? null ?> id="dot-2">
              <input type="radio" name="categorie"  value=" Retraité IAP"   <?= $candidat['categorie'] ?? null ?>  id="dot-3">
          
              
              <div class="category">
                  <label for="dot-1">
                      <span class="dot one "></span>
                      <span class=" check"> Externe IAP</span>
                  </label>
           
                  <label for="dot-2">           
                        <span class="dot two "></span>
                        <span class="check "> Internes IAP</span>
                  </label>
                  <label for="dot-3">
                      <span class="dot three"></span>
                      <span class="check ">  Retraité IAP</span>
                  </label>
              </div>
              
</div>
        
 



          <div class="btn">

              <button type="button" id="back2"> Back </button>



              <?php if(isset($_GET['candidat_id']) and $_GET['candidat_id'] > 0) { ?>
            <button type="submit" id="soumettre" class="btn btn-primary">Enregistrer les Modifications</button>

          <?php } else  { ?>
 
                   <button type="submit" id="soumettre" class="btn btn-primary">Enregistrer </button>

               
   </div>  
     <?php } ?>   

</form>    
              
         
                   


</body>

</html>


    <script>
        var form1 = document.getElementById("form1");
        var form2 = document.getElementById("form2");
        var form3 = document.getElementById("form3");

        var next2 = document.getElementById("next2");
        var back1 = document.getElementById("back1");
        var back2 = document.getElementById("back2");

        var progress_bar = document.getElementById("progress_bar");

        next.onclick = function()
        {
            form1.style.left = "-900px";
            form2.style.left = "50px";
            progress_bar.style.width="700px";
        }

        back1.onclick = function()
        {
            form1.style.left = "50px";
            form2.style.left = "950px";
            progress_bar.style.width= "300px";
        }

        next2.onclick = function()
        {
            form2.style.left = "-900px";
            form3.style.left = "930px";
            progress_bar.style.width="1000px";
        }

        back2.onclick = function()
        {
            form2.style.left = "50px";
            form3.style.left = "930px";
            progress_bar.style.width="700px";
        }
   
  
</script>

<script src="script.js"></script>
