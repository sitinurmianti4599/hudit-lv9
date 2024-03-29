function hideshow() {
    var password = document.getElementById("password1");
    var slash = document.getElementById("slash");
    var eye = document.getElementById("eye");

    if (password.type === 'password') {
        password.type = "text";
        slash.style.display = "block";
        eye.style.display = "none";
    } else {
        password.type = "password";
        slash.style.display = "none";
        eye.style.display = "block";
    }

}

addEventListener('load', () => {
    document.querySelectorAll('[data-click-prevent="true"]').forEach((elm) => {
        elm.addEventListener('click', (ev) => {
            ev.preventDefault()
        })
    })
})


function confirmDelete(event) {
event.preventDefault(); // Mencegah tindakan hapus langsung dilakukan
Swal.fire({
    title: 'Konfirmasi Hapus',
    text: 'Anda yakin ingin menghapus data ini?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal'
}).then((result) => {
    if (result.isConfirmed) {
        document.getElementById('deleteForm').submit(); // Submit form untuk tindakan hapus
         showSuccessMessage('Data berhasil Dihapus.'); // Menampilkan pesan sukses

    }
});
}

function confirmSubmit(event) {
    event.preventDefault(); // Mencegah tindakan submit langsung dilakukan

    Swal.fire({
        title: 'Simpan Data?',
        text: '',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Simpan',
        cancelButtonText: 'Kembali'
    }).then((result) => {
        if (result.isConfirmed) {
            submitForm(); // Memanggil fungsi untuk submit form
        }
    });
}

// jalankan di halaman tambah pengguna
function tambahUserMain() {
    if (success) {
        setTimeout(() => {
            location.assign(redirect)
        }, 2000);
        showSuccessMessage('Data berhasil Disimpan.'); // Menampilkan pesan sukses
    }
    if (failed) {
        showFailedMessage('Data Gagal Disimpan.'); // Menampilkan pesan gagal
    }
}

function submitForm() {
    document.querySelector('form').submit(); // Submit form
}

function showSuccessMessage(message) {
    Swal.fire({
        title: 'Sukses',
        text: message,
        icon: 'success',
        // showConfirmButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
        
    });
}

function showFailedMessage(message) {
    Swal.fire({
        title: 'Gagal',
        text: message,
        icon: 'error',
         showConfirmButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
    });
}


function confirmSubmitEdit(event) {
    event.preventDefault(); // Mencegah tindakan submit langsung dilakukan

    Swal.fire({
        title: 'Update Data?',
        text: '',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Update',
        cancelButtonText: 'Kembali'
    }).then((result) => {
        if (result.isConfirmed) {
            submitFormUp(); // Memanggil fungsi untuk submit form
        }
    });
}

function submitFormUp() {
    // document.querySelector('form').submit(); // Submit form
    document.getElementById('upd').submit(); // Submit form untuk tindakan hapus
    showSuccessMessage('Data berhasil Disimpan.'); // Menampilkan pesan sukses
}

function previewImage(){

    const image = document.querySelector('#dokmen');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFRevent){
        imgPreview.src= oFRevent.target.result;
    }

}

function confirmSubmitPC(event) {
    event.preventDefault(); // Mencegah tindakan submit langsung dilakukan

    Swal.fire({
        title: 'Kirim Data',
        text: '',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Kirim',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
    
            submitFormPC(); // Memanggil fungsi untuk submit form
        }
    });
}

function submitFormPC() {
    showSuccessMessage('Data Dikirim, Harap Tunggu Konfirmasi ADMIN :)'); // Menampilkan pesan sukses        
    setTimeout(() => {
        document.getElementById('updPC').submit(); // Submit form untuk tindakan
        
    }, 2000);
    // document.querySelector('form').submit(); // Submit form
  
}
