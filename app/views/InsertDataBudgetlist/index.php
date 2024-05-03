<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/Budgetlist">
                        <i class="fas fa-table"></i>
                        <span>Budget List</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= BASEURL ?>/InsertDataBudgetlist">
                        <i class="fas fa-table-columns"></i>
                        <span>Tambah Data </span>
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
            

            <form action="<?= BASEURL; ?>/Budgetlist/tambahBudgetlist" method="post" enctype="multipart/form-data">
                
            <div class="mb-3">
                    <label for="tanggal">Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>

                </div>
    
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="daybudget" class="form-label">Daily Budget</label>
                    <input type="text" class="form-control" id="daybudget" name="daybudget" required>
                </div>
    
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="monthbudget" class="form-label">Monthly Budget</label>
                    <input type="text" class="form-control" id="monthbudget" name="monthbudget" required>
                </div>

                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" value="Submit">Insert</button>
                </div>
            </form>
        </div>
