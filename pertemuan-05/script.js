const semester = 5;
if (semester >= 1&& semester <= 14) {
  console.log("semester valid.");
} else {
    console.log("semester tidak valid.");
}
function tampilkanpesan() {
  console.log("form sedang diproses.");
}
tampilkanpesan();
const tampilkanKlik = () => { 
  console.log("Tombol diklik.");
};
tampilkanKlik();
<script>
  console.log("JavaScript berhasil dijalankan.");
</script>
const navToggle = document.getElementById("navToggle"); 
const navMenu = document.getElementById("navMenu"); 
const contactForm = document.getElementById("contactForm"); 
const jenisPesan = document.querySelector('input[name="jenis_pesan"]:checked'); 
if (!jenisPesan) { // Proses validasi ketika jenis pesan belum dipilih. 
    } 
const topikDipilih = document.querySelectorAll('input[name="minat"]:checked'); 
if (topikDipilih.length === 0) { 
    // Proses validasi ketika belum ada topik yang dipilih.
} 
const namaInput = document.getElementById("nama"); 
const nama = namaInput.value; 
const emailInput = document.getElementById("email");
const semesterInput = document.getElementById("semester"); const email = emailInput.value; 
const semester = semesterInput.value; 
const formFeedback = document.getElementById("formFeedback"); 
formFeedback.textContent = "Form berhasil divalidasi."; 
const isOpen = navMenu.classList.toggle("nav-open"); 
const navMenu = document.getElementById("navMenu"); navMenu.classList.contains("nav-open"); 
