 //validasi nama
function validasiNama(input) {
    // Dapatkan nilai input nama
    var nama = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari huruf
    var validasiNamaRegex = /^[a-zA-Z\s]*$/;

    // Periksa apakah nama valid
    if (validasiNamaRegex.test(nama)) {
        // Nama valid
        input.setCustomValidity('');
    } else {
        // Nama tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('Nama hanya boleh mengandung huruf dan spasi.');
    }
}

//validasi email          
function validasiEmail(input) {
    // Dapatkan nilai input email
    var email = input.value;

    // Gunakan ekspresi reguler untuk memeriksa validitas email
    var validasiEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Periksa apakah email valid
    if (validasiEmailRegex.test(email)) {
        // Email valid
        input.setCustomValidity('');
    } else {
        // Email tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('Masukkan alamat email yang valid.');
    }
  }



// validasi telepon
function validasiNomorTelepon(input) {
    // Dapatkan nilai input NIM
    var telepon = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari angka
    var validasiTeleponRegex = /^\d+$/;

    // Periksa apakah NIM valid dan memiliki panjang minimal 10 digit
    if (validasiTeleponRegex.test(telepon) && telepon.length >= 10) {
        // NIM valid
        input.setCustomValidity('');
    } else {
        // NIM tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('No Telepon harus terdiri dari angka dan memiliki panjang minimal 10 digit.');
    }
}

function validasiPassword(input) {
    var password = input.value;
    // Check panjang password
    if (strlen(password) >= 8 && strlen(password) <= 10) {
        // Check apakah password terdiri dari angka, string, atau karakter non-alphabet
        if (preg_match('/^[0-9a-zA-Z!@#$%^&*()_+{}|:<>?~-]+$/', $password)) {
            echo "Password valid!";
        } else {
            echo "Password harus terdiri dari angka, string, atau karakter non-alphabet.";
        }
    } else {
        echo "Panjang password harus antara 8 sampai 10 karakter.";
    }
}