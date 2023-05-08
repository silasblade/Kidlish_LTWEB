const sliderImages = document.querySelectorAll('.slider img');
let currentIndex = 0;

function showImage(index) {
  sliderImages[currentIndex].classList.remove('active');
  sliderImages[index].classList.add('active');
  currentIndex = index;
}

function nextImage() {
  const nextIndex = (currentIndex + 1) % sliderImages.length;
  showImage(nextIndex);
}

setInterval(nextImage, 3000);
