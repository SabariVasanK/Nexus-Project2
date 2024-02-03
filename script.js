
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const feedbackForm = document.querySelector('form');
feedbackForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); 
        feedbackForm.reset(); 
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
