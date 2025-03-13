require('./bootstrap');

document.addEventListener('DOMContentLoaded', function() {
    const imgContent = document.querySelectorAll('#gallery .img-content-hover');
    const images = document.querySelectorAll('#gallery .img-container img');
   
  
    function showImgContent(e) {
      const x = e.pageX;
      const y = e.pageY;
      imgContent.forEach(content => {
        content.style.transform = `translate3d(${x}px, ${y}px, 0)`;
      });
    }
  
    
});