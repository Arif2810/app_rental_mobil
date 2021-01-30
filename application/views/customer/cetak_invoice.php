<table style="width: 40%;">
  <h2>Invoice Pembayaran Anda</h2>
  <?php foreach($transaksi as $tr): ?>
    <tr>
      <td>Nama Customer</td>
      <td>:</td>
      <td><?= $tr->nama; ?></td>
    </tr>

    <tr>
      <td>Merek Mobil</td>
      <td>:</td>
      <td><?= $tr->merek; ?></td>
    </tr>
    <tr>
      <td>Tanggal Rental</td>
      <td>:</td>
      <td><?= date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>
    </tr>
    <tr>
      <td>Tanggal Kembali</td>
      <td>:</td>
      <td><?= date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>
    </tr>
    <tr>
      <td>Biaya Sewa Perhari</td>
      <td>:</td>
      <td>Rp.<?= number_format($tr->harga, 0, ',', '.'); ?>,-</td>
    </tr>
    <tr>
      <?php 
        $x = strtotime($tr->tgl_kembali);
        $y = strtotime($tr->tgl_rental);
        $jmlHari = abs(($x - $y)/(60*60*24));
      ?>
      <td>Jumlah Hari Sewa</td>
      <td>:</td>
      <td><?= $jmlHari; ?> Hari</td>
    </tr>

    <tr>
      <td>Status Pembayaran</td>
      <td>:</td>
      <td>
        <?php if($tr->status_pembayaran == '0'){
          echo "Belum Lunas";
        }
        else{
          echo "Lunas";
        } ?>
      </td>
    </tr>

    <tr style="font-weight:bold; color:red;">
      <td>JUMLAH PEMBAYARAN</td>
      <td>:</td>
      <td>Rp.<?= number_format($tr->harga * $jmlHari, 0, ',', '.'); ?>,-</td>
    </tr>

    <tr>
      <td>Rekening Pembayaran</td>
      <td>:</td>
      <td>
        <ul>
          <li>Bank Mandiri 1212423344</li>
          <li>Bank BCA 645623534</li>
          <li>Bank BNI 56435645</li>
        </ul>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script>
  window.print();
</script>