    <div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li class="active">
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/Budgetlist">
                        <i class="fas fa-table"></i>
                        <span>Data</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/InsertDataBudgetlist">
                        <i class="fas fa-table-columns"></i>
                        <span>Tambah Data</span>
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
            <div class="header--wrapper">
                <div class ="header--title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                </div>            
            </div>

            <div class="card--container">
                <h3 class="main--title">Daily Data</h3>
                <div class="card--wrapper">
                    <div class="data--card light-red">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Jumlah Data
                                </span>
                                <span class="amount--value">
                                <?= $data["jumlahBudgetlist"]; ?>
                                </span>
                            </div>
                            <i class="fas fa-people-roof icon dark-red"></i>  
                        </div>
                        <span class="card-detail">... ... ...</span>
                    </div>



                </div>
            </div>
        </div>