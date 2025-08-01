// Fungsi ini akan berjalan setelah seluruh halaman HTML dimuat
document.addEventListener('DOMContentLoaded', function () {

    // Cari semua tombol hapus
    const deleteButtons = document.querySelectorAll('a[href*="/delete/"]');

    // Tambahkan event listener untuk setiap tombol hapus
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            // Tampilkan pop-up konfirmasi bawaan browser
            const confirmation = confirm('Apakah Anda yakin ingin menghapus data ini?');

            // Jika pengguna mengklik "Batal", hentikan aksi default (pindah halaman)
            if (!confirmation) {
                event.preventDefault();
            }
        });
    });

});