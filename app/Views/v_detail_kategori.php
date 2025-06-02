<?= $this->extend('layout') ?> <!-- Ganti sesuai nama template utama kamu -->

<?= $this->section('content') ?>
    <div class="container">
        <h1>Halaman Kategori: <?= esc(ucwords(str_replace('-', ' ', $kategori))) ?></h1>

        <?php if ($kategori === 'snack'): ?>
            <p>Ini adalah daftar produk Snack.</p>
        <?php elseif ($kategori === 'makanan'): ?>
            <p>Ini adalah daftar produk Makanan.</p>
        <?php elseif ($kategori === 'minuman'): ?>
            <p>Ini adalah daftar produk Minuman.</p>
        <?php elseif ($kategori === 'bumbu-dapur'): ?>
            <p>Ini adalah daftar produk Bumbu Dapur.</p>
        <?php elseif ($kategori === 'alat-tulis'): ?>
            <p>Ini adalah daftar produk Alat Tulis.</p>
        <?php else: ?>
            <p>Kategori tidak ditemukan.</p>
        <?php endif; ?>
    </div>
<?= $this->endSection('produk') ?>
