var header = document.querySelector('header');

var slides = document.querySelector('.slides').children;
var prev = document.querySelector('.left');
var next = document.querySelector('.right');

let index = 0;


window.addEventListener('scroll',function(){
    header.classList.toggle('fade-down',window.scrollY > 80)
})



next.addEventListener('click' , function(){
    nextSlide();
})
prev.addEventListener("click", function () {
  prevSlide();
});

function nextSlide()
{
    if(index == slides.length-1)
    {
        index=0;
    }
    else
    {
        index ++;
    }
    changeSlide();
}
function prevSlide()
{
    if (index == 0)
    {
        index = slides.length-1
    }
    else
    {
        index -- ;
    }
    changeSlide();
}

function changeSlide()
{
    for (let i=0 ; i< slides.length;i++)
    {
        slides[i].classList.remove('active');
    }
    slides[index].classList.add('active');
}