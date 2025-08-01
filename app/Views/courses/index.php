<?= $this->extend('layout/history_layout') ?>

<?= $this->section('title') ?>
Riwayat Pendaftaran
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2>
    <img src="<?= base_url('gambar/1.png') ?>" alt="Icon" class="title-icon">
    Data Pendaftaran Berhasil
</h2>

<p style="text-align: center; margin-bottom: 2rem;">Berikut adalah semua data pendaftaran kursus yang telah kami catat.
    Anda dapat mengubah atau menghapus pendaftaran jika diperlukan.</p>

<div style="text-align: center; margin-bottom: 2rem;">
    <a href="<?= base_url('/courses/create') ?>" class="btn">Daftar Kursus Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Nama Kursus</th>
            <th>Jumlah Bayar</th>
            <th>Metode</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($pendaftaran)): ?>
            <tr>
                <td colspan="7" align="center">Belum ada data pendaftaran. Silakan lakukan pendaftaran baru.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($pendaftaran as $item): ?>
                <tr>
                    <td><?= esc($item['nama_lengkap']) ?></td>
                    <td><?= esc($item['email']) ?></td>
                    <td><?= esc($item['nama_kursus']) ?></td>
                    <td><?= esc($item['jumlah_pembayaran']) ?></td>
                    <td><?= esc($item['metode_pembayaran']) ?></td>
                    <td><?= esc($item['tanggal_pembayaran']) ?></td>
                    <td>
                        <a href="<?= base_url('/courses/edit/' . $item['id']) ?>" class="btn btn-edit btn-action">Ubah</a>
                        <a href="<?= base_url('/courses/delete/' . $item['id']) ?>" class="btn btn-delete btn-action">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>