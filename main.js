$(document).ready(function(){  
     
    // enregistrement en bdd
    $("#envoi").click(function(e){             
        e.preventDefault();
               
        var params=$('form').serialize(); 
             
        $.post("setMessages.php", params);  
        
       $("#messageUser").val('');
                    
   });   
   
   // affichage de la discussion
   affichage= function() {          
        console.log("intervalle");
        var params=$('form').serialize();   
        $.getJSON("getMessages.php", params, callbackFilter);         
   }; 
    function callbackFilter(messages){
        
        var html="";     
        
        for(i=0;i<messages.length;i++){
           html =(messages[i].auteur+"--"+messages[i].message+"--"+messages[i].date+"/n")+html;           
        }  
                
      $("#message").html(html);
      
      
      
    }
    setInterval(affichage, 1000); 
        
});      
   
   
    




//        <td> <a href="supprimerFilm.php?identifiant=<?php echo $affiche["identifiant"]?>" type="button" class="btn btn-danger">Supprimer</button></td>
     