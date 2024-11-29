document.addEventListener('DOMContentLoaded', function() {
    
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (name === '' || email === '' || message === '') {
                alert('Semua field harus diisi!');
                event.preventDefault(); 
                return;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Format email tidak valid!');
                event.preventDefault(); 
                return;
            }
            alert('Pesan Anda telah dikirim! Terima kasih, kami akan menghubungi Anda segera.');
        });
    }
});