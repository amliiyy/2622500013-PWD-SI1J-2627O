// Mengatur navigasi halaman

const navLinks = document.querySelectorAll(".nav-link");
const pages = document.querySelectorAll(".page");

navLinks.forEach(function(link) {

    link.addEventListener("click", function(event) {

        event.preventDefault();

        const target = link.dataset.page;

        // Menghilangkan halaman aktif
        pages.forEach(function(page) {
            page.classList.remove("active");
        });

        // Menghilangkan menu aktif
        navLinks.forEach(function(menu) {
            menu.classList.remove("active");
        });

        // Menampilkan halaman yang dipilih
        document.getElementById(target).classList.add("active");

        link.classList.add("active");

    });

});


// Proses formulir pendaftaran

const form = document.getElementById("formPendaftaran");

form.addEventListener("submit", function(event) {

    event.preventDefault();

    const nama = document.getElementById("nama").value;

    document.getElementById("pesanHasil").textContent =
        "Terima kasih " + nama +
        ", pendaftaran berhasil dilakukan!";

    form.reset();

});