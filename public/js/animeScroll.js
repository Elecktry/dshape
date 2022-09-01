const target = document.querySelectorAll('[data-anime]')
const animationClass = 'animate'

function animeScroll(){
    const windowTop = window.scrollY + 100
    target.forEach(function(element){
        if((windowTop)> element.scrollTop){
            element.classList.add(animationClass)
        }
        else{
            element.classList.remove(animationClass)
        }
    })
}


window.addEventListener('scroll', function(){
    animeScroll();
})