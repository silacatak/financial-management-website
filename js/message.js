document.addEventListener('DOMContentLoaded', () => {
    // Gerekli HTML elementler alındı
    const chatIcon = document.getElementById('chat-icon');
    const emailFormContainer = document.getElementById('email-form-container');
    const closeBtn = document.getElementById('close-btn');
    const contactForm = document.getElementById('contact-form');

    // Formun açılıp kapanmasını sağlayan fonksiyon
    const toggleForm = () => {
        // 'd-none' sınıfını kaldırıp/ekleyerek görünürlüğü kontrol et
        emailFormContainer.classList.toggle('d-none');
        // 'active' sınıfını kaldırıp/ekleyerek animasyonu kontrol et
        emailFormContainer.classList.toggle('active');
    };

    // Olay dinleyicisi
    chatIcon.addEventListener('click', toggleForm);
    
    closeBtn.addEventListener('click', toggleForm);

    document.addEventListener('click', (e) => {
        //  formun veya ikonun dışında bir yere tıklanıcak olursa formun kapanması
        if (!emailFormContainer.contains(e.target) && !chatIcon.contains(e.target)) {
            if (!emailFormContainer.classList.contains('d-none')) {
                toggleForm();
            }
        }
    });
    
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = document.getElementById('email').value;// email değerini çek ve email'e ata
        console.log("E-posta gönderildi:", email);//konsola yazdır
        toggleForm();//formu kapat
       
    });
});
