<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= BASEURL ?>/Budgetlist">
                        <i class="fas fa-table"></i>
                        <span>Data</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/InsertDataBudgetlist">
                        <i class="fas fa-table-columns"></i>
                        <span>Tambah Data Budgetlist</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="<?= BASEURL ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Budget List</h2>
            </div>
            <div class="user--info">
                <img src="../img/profile.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data</h3>
            <div class="table-container">
                


<div class="row">

    <?php foreach ( $data["Budgetlist"] as $Budgetlist) : ?>
    <div class="card mb-3 col-lg-6 me-3" style="max-width: 540px;">
        <div class="row g-0">   
            <div class="col-md-4">

            </div>
        <div class="col-md-8">
        <div class="card-body">
            <h4 class="card-title"><?= $Budgetlist['tanggal']; ?></h4>
            <p class="card-text">Daily Budget : Rp.<?= $Budgetlist['daybudget']; ?></p>
            <p class="card-text">Monthly Budget : Rp.<?= $Budgetlist['monthbudget']; ?></p>
            <td>
                <a href="<?= BASEURL; ?>/Budgetlist/editBudgetlist/<?= $Budgetlist['id']; ?>" class="badge text-bg-success float-center tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModalBudgetlist" data-id="<?= $Budgetlist['id']; ?>">Edit</a> 
                <a href="<?= BASEURL; ?>/Budgetlist/hapusBudgetlist/<?= $Budgetlist['id']; ?>" class="badge text-bg-danger float-center" onclick="return confirm('Apakah anda yakin?')">Hapus</a></td>
        </div>
        </div>
    </div>
</div>
    <?php endforeach ?>

</div>


            </div>
        </div>
    </div>



    <div class="modal fade" id="formModalBudgetlist" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/Budgetlist/editBudgetlist" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                            </div>

                            <div class="mb-3">
                                <label for="daybudget" class="form-label">Alamat Event</label>
                                <input type="text" class="form-control" id="alamat" name="daybudget" required>
                            </div>

                            <div class="mb-3">
                                <label for="monthbudget" class="form-label">Jumlah Peserta</label>
                                <input type="text" class="form-control" id="monthbudget" name="monthbudget" required>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Edit Data</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
