$(document).ready(function(){       
       $("#envoi").click(function(e){             
        e.preventDefault();
        
        var params=$('form').serialize();  
        
        $.getJSON("setMessages.php", params,callbackFilter); 
        
   }); 
    
     function callbackFilter(messages){
        html="";        
        for(i=0;i<messages.length;i++){
           html +="<br>"+messages[i].auteur+"--"+messages[i].message+"--"+messages[i].date('y-m-d H:i:s')+"<br>";           
        }        
       $("#message").html(html);
    }
        
});      

//        <td> <a href="supprimerFilm.php?identifiant=<?php echo $affiche["identifiant"]?>" type="button" class="btn btn-danger">Supprimer</button></td>
     