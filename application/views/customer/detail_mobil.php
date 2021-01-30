<!-- Banner Starts Here -->
<div class="container">
  <div style="height: 150px;"></div>

  <div class="card">
    <div class="card-body">
      <?php foreach($detail as $dt): ?>
      <div class="row">
        <div class="col-md-6">
          <img width="500px;" src="<?= base_url('assets/upload/').$dt->gambar; ?>" alt="">
        </div>
        <div class="col-md-6">
          <table class="table">
            <tr>
              <th>Merek</th>
              <td><?= $dt->merek; ?></td>
            </tr>
            <tr>
              <th>No. Plat</th>
              <td><?= $dt->no_plat; ?></td>
            </tr>
            <tr>
              <th>Warna</th>
              <td><?= $dt->warna; ?></td>
            </tr>
            <tr>
              <th>Tahun Mobil</th>
              <td><?= $dt->tahun; ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td>
                <?php if($dt->status == '1'){
                  echo "Tersedia";
                }
                else{
                  echo "Tidak tersedia / sedang dirental";
                } ?>
              </td>
              
            </tr>
            <tr>
            <td></td>
              <td>
              <?php
                if($dt->status == "0"){ ?>
                  <span class="btn btn-danger">Telah Dirental</span>
                <?php }
                else{
                  echo anchor('customer/rental/tambah_rental/'. $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                }
                ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<!-- Banner Ends Here -->

<div style="height: 180px;"></div>


    