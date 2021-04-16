window.addEventListener("scroll",cambiarColor);

function cambiarColor(){

    let menu=document.getElementById("menu");
    console.log(document.documentElement.scrollTop);

    if(document.body.scrollTop||document.documentElement.scrollTop<=400){

        menu.classList.add("bg-dark");
        menu.classList.remove("fondo2");
       

    }else{
        menu.classList.add("fondo2");
        menu.classList.remove("bg-dark");
    }

    
}