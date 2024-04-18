function index() {
    var kasir = document.getElementById("kasir").value;
    var password = document.getElementById("input_password").value;
    if ((kasir === "kasir1" && password === "kasir1") || (kasir === "kasir2" && password === "kasir2")) {
        window.location.href = "home_page.php";
        alert("Berhasil Login");
    } else {
        alert("Login Gagal, Periksa Username Dan Password Anda!");
    }
}