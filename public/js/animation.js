

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll(){
    const windowTop = this.window.pageYOffset + (window.innerHeight * 4 / 5);
    target.forEach(function(element){
        if(windowTop > element.offsetTop){
            element.classList.add('animate');
        }else{
            element.classList.remove('animate');
        }
    })
}

animeScroll();

if(target.length){
window.addEventListener('scroll', function(){
    animeScroll();
});
}
