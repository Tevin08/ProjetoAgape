function RedefinirSenha (){
    const modal = document.querySelector(".modal");
    
    if(modal.open == true){
        modal.open = false;
    }
    else{
        modal.open = true
    }
    
  }