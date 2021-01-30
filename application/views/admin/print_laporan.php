<h3 style="text-align: center;">Laporan Transaksi Rental Mobil</h3>

<table>
  <tr>
    <td>Dari Tanggal</td>
    <td>:</td>
    <td><?= date('d-M-Y', strtotime($_GET['dari'])); ?></td>
  </tr>
  <tr>
    <td>Sampai Tanggal</td>
    <td>:</td>
    <td><?= date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
  </tr>
</table>

<table class="table table-bordered table-striped mt-3">
  <tr>
    <th>No</th>
    <th>Customer</th>
    <th>Mobil</th>
    <th>Tgl. Rental</th>
    <th>Tgl. Kembali</th>
    <th>Harga/Hari</th>
    <th>Denda/Hari</th>
    <th>Total Denda</th>
    <th>Tgl. Dikembalikan</th>
    <th>Status Pengembalian</th>
    <th>Status Rental</th>
  </tr>

  <?php 
  $no = 1;
  foreach($laporan as $tr): ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= $tr->nama; ?></td>
    <td><?= $tr->merek; ?></td>
    <td><?= date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>
    <td><?= date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>
    <td>Rp.<?= number_format($tr->harga, 0,',','.'); ?>,-</td>
    <td>Rp.<?= number_format($tr->denda, 0,',','.'); ?>,-</td>
    <td>Rp.<?= number_format($tr->total_denda, 0,',','.'); ?>,-</td>
    <td>
      <?php if($tr->tgl_pengembalian == "0000-00-00"){
        echo "-";
      }else{
        echo date('d/m/Y', strtotime($tr->tgl_pengembalian));
      } ?>
    </td>

    <td>
      <?php if($tr->status_pembayaran == "1"){
        echo "Kembali";
      }else{
        echo "Belum Kembali";
      }?>
    </td>


    <td>
      <?php if($tr->status_pembayaran == "1"){
        echo "Selesai";
      }else{
        echo "Belum Selesai";
      }?>
    </td>
  </tr>

  <?php endforeach; ?>
</table>

<script>
  window.print();
</script>