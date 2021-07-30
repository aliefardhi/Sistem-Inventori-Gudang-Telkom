<body class="">
    
    <h1 class="judul text-center h4 text-gray-900 mb-4 mt-5">SISTEM INVENTORI BARANG GUDANG</h1>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <img src="./assets/ta_logo.png" alt="logo" width="271" height="89">
                                    </div>

                                    <?= $this->session->flashdata('message') ?>

                                    <form class="user" method="POST" action="<?= base_url(); ?>auth">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username"
                                                name="username"
                                                placeholder="Username" value="<?= set_value('username') ?>">
                                                <?= form_error('username','<small class="text-danger pl-3">','</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" 
                                                name="password"
                                                placeholder="Password">
                                                <?= form_error('password','<small class="text-danger pl-3">','</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btnlogin btn-user btn-block ">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <footer class="float-sm-start" style="margin-top: -394px; "> 
        <img src="./assets/bg.png" alt="bg" width="100%" height="100%">
    </footer>

    