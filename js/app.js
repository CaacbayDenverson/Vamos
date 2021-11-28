const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelector('.nav-links li');
    
    //Toggle Button
    burger.addEventListener('click',() =>{
        nav.classList.toggle('nav-active');
    });

   // navLinks.ForEach((link,index) => {
        //link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
   // });
        //link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
       /* if (link.style.animation){
           link.style.animation =''
       }
       else{
            
        //console.log(index / 5 + 0.2)

       }*/



}
navSlide();
