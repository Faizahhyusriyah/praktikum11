<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mahasiswa STT Terpadu Nurul Fikri</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-12">
 <h3>Daftar Mahasiswa</h3>
 <a class = "btn btn-success mb-4 mt-2" href="<?php echo base_url ('index.php/mahasiswa/create')?>" role = "button">Create Mahasiswa</a>
    <table class="table table-striped">
    <thead>
        <tr>
            <th class= "text-center">No</th>
            <th class= "text-center">NIM</th>
            <th class= "text-center">Nama</th>
            <th class= "text-center">Gender</th>
            <th class= "text-center">Tempat Lahir</th>
            <th class= "text-center">Tanggal Lahir</th>
            <th class= "text-center">IPK</th>
            <th class= "text-center">Program Studi</th>
            <th class= "text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $nomor=1;
        foreach($list_mhs as $mhs){
    ?>
    <tr>
        <td class= "text-center"><?=$nomor?></td>
        <td class= "text-center"><?=$mhs->nim?></td>
        <td class= "text-center"><?=$mhs->nama?></td>
        <td class= "text-center"><?=$mhs->gender?></td>
        <td class= "text-center"><?=$mhs->tmp_lahir?></td>
        <td class= "text-center"><?=$mhs->tgl_lahir?></td>
        <td class= "text-center"><?=$mhs->ipk?></td>
        <td class= "text-center"><?=$mhs->prodi_kode?></td>
        <td class= "text-center">
              <a href="mahasiswa/view?id=<?=$mhs->nim?>">view</a>|
              <a href="mahasiswa/edit?id=<?=$mhs->nim?>">Edit</a>|
              <a href="mahasiswa/delete?id=<?=$mhs->nim?>"
              onclick="if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?=$mhs->nim?>?')) {return false}"
              >Delete</a>
            </td>
    </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
    </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
