const elements = document.querySelectorAll('.oneDisplay_nav ul li a'),
      elementsContainer = document.querySelector('.oneDisplay_nav'),
      btn = document.querySelector('.oneDisplay_btn');

btn.addEventListener('click', () => {
      open();
  
});
function open(){
    elementsContainer.classList.toggle('show');
    elementsContainer.classList.toggle('hide');
}

$(function(){
    $('.slider').slick({
        centerMode: true,
        centerPadding: '50px',
    });
});