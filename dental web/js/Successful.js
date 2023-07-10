const popupContainer = document.querySelector('.popup-container');
const popupClose = document.querySelector('.popup-close');

popupClose.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});

// show popup on order success
function showPopup() {
  popupContainer.style.display = 'flex';
}
