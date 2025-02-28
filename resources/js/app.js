require('./bootstrap');

document.addEventListener('DOMContentLoaded', function() {
    const imgContent = document.querySelectorAll('#gallery .img-content-hover');
    const images = document.querySelectorAll('#gallery .img-container img');
    const modal = document.getElementById('myModal');
    const modalImg = document.getElementById('img01');
    const captionText = document.getElementById('caption');
    const closeModal = document.getElementsByClassName('close')[0];
  
    function showImgContent(e) {
      const x = e.pageX;
      const y = e.pageY;
      imgContent.forEach(content => {
        content.style.transform = `translate3d(${x}px, ${y}px, 0)`;
      });
    }
  
    function toggleImageSize(e) {
      modal.style.display = 'block';
      modalImg.src = e.target.src;
      captionText.innerHTML = e.target.alt;
    }
  
    function closeModalFunc() {
      modal.style.display = 'none';
    }
  
    document.addEventListener('mousemove', showImgContent);
    images.forEach(img => {
      img.addEventListener('click', toggleImageSize);
    });
    closeModal.addEventListener('click', closeModalFunc);
});