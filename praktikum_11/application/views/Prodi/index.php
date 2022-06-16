<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Program Studi</h1>
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
          <h3 class="card-title">Data Program Studi STT Terpadu Nurul Fikri</h3>

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
 <h3>Daftar Program Studi</h3>
 <a class = "btn btn-success mb-4 mt-2" href="<?php echo base_url ('index.php/prodi/create')?>" role = "button">Create Program Studi</a>
    <table class="table table-striped">
    <thead>
        <tr>
            <th class= "text-center">Nomor</th>
            <th class= "text-center">Kode</th>
            <th class= "text-center">Nama Prodi</th>
            <th class= "text-center">Ketua Prodi</th>
            <th class= "text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $nomor=1;
        foreach($list_prodi as $row){
    ?>
    <tr>
        <td class= "text-center"><?=$nomor?></td>
        <td class= "text-center"><?=$row->kode?></td>
        <td class= "text-center"><?=$row->nama?></td>
        <td class= "text-center"><?=$row->kaprodi?></td>
        <td class= "text-center">
              <a href="prodi/view?id=<?=$row->kode?>">view</a>|
              <a href="prodi/edit?id=<?=$row->kode?>">Edit</a>|
              <a href="prodi/delete?id=<?=$row->kode?>"
              onclick="if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?=$row->kode?>?')) {return false}"
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
