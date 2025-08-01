<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Edit Pendaftaran
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h2>Form Edit Pendaftaran</h2>
<form action="<?= base_url('/courses/update/' . $pendaftaran['id']) ?>" method="post">
    <?= csrf_field() ?>
    <p>Nama Lengkap: <input type="text" name="nama_lengkap" value="<?= esc($pendaftaran['nama_lengkap']) ?>" required>
    </p>
    <p>Email: <input type="email" name="email" value="<?= esc($pendaftaran['email']) ?>" required></p>
    <p>Nama Kursus:
        <select name="nama_kursus" required>
            <option value="Kursus UI/UX dengan Figma" <?= $pendaftaran['nama_kursus'] == 'Kursus UI/UX dengan Figma' ? 'selected' : '' ?>>Kursus UI/UX dengan Figma</option>
            <option value="Web Front-End" <?= $pendaftaran['nama_kursus'] == 'Web Front-End' ? 'selected' : '' ?>>Web
                Front-End</option>
            <option value="Web Back-End" <?= $pendaftaran['nama_kursus'] == 'Web Back-End' ? 'selected' : '' ?>>Web
                Back-End</option>
            <option value="Web Full-Stack" <?= $pendaftaran['nama_kursus'] == 'Web Full-Stack' ? 'selected' : '' ?>>Web
                Full-Stack</option>
        </select>
    </p>
    <p>Jumlah Pembayaran: <input type="text" name="jumlah_pembayaran"
            value="<?= esc($pendaftaran['jumlah_pembayaran']) ?>" required></p>
    <p>Metode Pembayaran:
        <select name="metode_pembayaran" required>
            <option value="Transfer Bank" <?= $pendaftaran['metode_pembayaran'] == 'Transfer Bank' ? 'selected' : '' ?>>
                Transfer Bank</option>
            <option value="GoPay" <?= $pendaftaran['metode_pembayaran'] == 'GoPay' ? 'selected' : '' ?>>GoPay</option>
            <option value="OVO" <?= $pendaftaran['metode_pembayaran'] == 'OVO' ? 'selected' : '' ?>>OVO</option>
        </select>
    </p>
    <button type="submit">Update Data</button>
</form>
<?= $this->endSection() ?>