<?php
    session_start();$_SESSION['form_id'] = uniqid();
?>
<html><head><meta charset="utf-8"><title>Form1</title></head><body>
<?php
    if( !empty($_SESSION['error_message'] )) {  
        echo '<h2>' . implode('<br>',$_SESSION['error_message'] ) . '</h2>';
        }
?>
<form  method="post" action="form2_submit.php">    
    <p>      
        <label for="nom">Nom : </label>      
        <input type="text" name="nom" id="nom">    
    </p>
    <p>      
        <label for="prenom">Prénom : </label>     
        <input type="text" name="prenom" id="prenom">    
    </p>
    
    <p>
        <input type="radio" name="sexe" value="homme" /> Homme 
        <input type="radio" name="sexe" value="femme" /> Femme
     </p>   
    <p style="text-align: center">      <input type="submit" value="Valider">   
    </p>    
        <input type="hidden" name="form_id"           
             value="<?php print $_SESSION['form_id'];?>">
</form>
</body></html>