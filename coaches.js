onst modal = document.getElementById("bookingModal");
const bookButtons = document.querySelectorAll(".book-now-btn");
const closeBtn = document.querySelector("#bookingModal .close");
const confirmationModal = document.getElementById("confirmationModal");
const closeConfirmationBtn = document.querySelector("#confirmationModal .close");

bookButtons.forEach((button) => {
  button.addEventListener("click", () => {
    modal.style.display = "block";
  });
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

const bookingForm = document.getElementById("bookingForm");
bookingForm.addEventListener("submit", (e) => {
  e.preventDefault();
  modal.style.display = "none";
  confirmationModal.style.display = "block";
});

closeConfirmationBtn.addEventListener("click", () => {
  confirmationModal.style.display = "none";
});


const form = document.getElementById('bookingForm');
form.addEventListener('submit', function (e) {
  e.preventDefault();

  fetch(form.action, {
    method: form.method,
    body: new FormData(form)
  })
    .then(response => response.text())
    .then(data => {
      if (data === 'success') {
        
        alert('Booking request sent successfully!');
        
        alert('Error sending the booking request. Please try again.');
      }
    })
    .catch(error => {
      console.error(error);
      
      alert('An error occurred. Please try again later.');
    });
});
