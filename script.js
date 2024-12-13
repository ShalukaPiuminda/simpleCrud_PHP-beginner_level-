function redirectToUpdateForm(id){
  window.location.href='update.php?id='+id;
}

document.addEventListener('DOMContentLoaded', () => {
  const carousel = new bootstrap.Carousel('#carouselExampleIndicators', {
    interval: 3000, // Auto-slide every 3 seconds
    ride: 'carousel',
  });

  // Optional: Add any additional JavaScript logic for the slideshow here
});
