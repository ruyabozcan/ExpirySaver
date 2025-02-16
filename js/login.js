document.addEventListener("DOMContentLoaded", function() {
    // Sekme elemanlarını seçiyoruz
    const marketOwnerTab = document.getElementById("market-owner-tab");
    const customerTab = document.getElementById("customer-tab");

    // Form elemanlarını seçiyoruz
    const marketOwnerForm = document.getElementById("market-owner-form");
    const customerForm = document.getElementById("customer-form");

    // Sekme tıklama olaylarını dinliyoruz
    marketOwnerTab.addEventListener("click", function() {
        // Market Owner sekmesine tıklanınca form geçişi
        marketOwnerForm.classList.add("active");
        customerForm.classList.remove("active");
        marketOwnerTab.classList.add("active");
        customerTab.classList.remove("active");
    });

    customerTab.addEventListener("click", function() {
        // Customer sekmesine tıklanınca form geçişi
        customerForm.classList.add("active");
        marketOwnerForm.classList.remove("active");
        customerTab.classList.add("active");
        marketOwnerTab.classList.remove("active");
    });
});
