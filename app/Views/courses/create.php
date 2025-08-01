<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Daftar Kursus Baru
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h2>Form Pendaftaran Kursus</h2>
<form action="<?= base_url('/courses/store') ?>" method="post">
    <?= csrf_field() ?>

    <p>Nama Lengkap: <input type="text" name="nama_lengkap" required></p>
    <p>Email: <input type="email" name="email" required></p>

    <p>Nama Kursus:
        <select name="nama_kursus" id="nama_kursus" required>
            <option value="">-- Pilih Kursus --</option>
            <option value="UI/UX">Kursus UI/UX dengan Figma</option>
            <option value="Front-End">Web Front-End</option>
            <option value="Back-End">Web Back-End</option>
            <option value="Full-Stack">Web Full-Stack</option>
        </select>
    </p>

    <p>Jumlah Pembayaran:
        <input type="text" name="jumlah_pembayaran" id="jumlah_pembayaran" readonly required>
    </p>

    <p>Metode Pembayaran:
        <select name="metode_pembayaran" required>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="GoPay">GoPay</option>
            <option value="OVO">OVO</option>
        </select>
    </p>

    <button type="submit">Daftar Sekarang</button>
</form>

<!-- Script sederhana -->
<script>
    document.getElementById('nama_kursus').addEventListener('change', function () {
        let harga = '';

        if (this.value === 'UI/UX') {
            harga = 'Rp 300.000';
        } else if (this.value === 'Front-End') {
            harga = 'Rp 500.000';
        } else if (this.value === 'Back-End') {
            harga = 'Rp 600.000';
        } else if (this.value === 'Full-Stack') {
            harga = 'Rp 1.000.000';
        }

        document.getElementById('jumlah_pembayaran').value = harga;
    });
</script>
<?= $this->endSection() ?>