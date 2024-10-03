<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Details Contract</h4>
            </div>
            <div class="card-body">
                <!-- Data Contract -->
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <p class="description text-justify">
                            Kontrak kerja oleh perusahaan <span class="font-weight-bold"><?= $Details->CompanyName ?>
                            </span> dengan karyawan bernama
                            <span class="font-weight-bold"><?= $Details->EmployeeName ?></span>.
                            Dengan nomor kontrak <span class="font-weight-bold"><?= $Details->Contract_ID ?></span>
                            dan dalam status kontrak <span class="font-weight-bold"><?= $Details->Status ?></span>.
                        </p>
                    </div>
                </div>
                <!-- End of Data Contract -->

                <!-- Data Company -->
                <div class="row justify-content-center ">
                    <div class="col-md-9">
                        <p class="description text-justify">
                            Detail Data Perusahaan <?= $Details->CompanyName ?> secara lengkap
                            adalah sebagai berikut :</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Name</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->CompanyName ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Email</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->CompanyEmail ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Address</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->CompanyAddress ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Telephone / Fax</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->Telephone ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Description</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description text-justify"><?= $Details->CompanyDescription ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Data Company -->

                <!-- Data Employee -->
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <p class="description text-justify">
                            Detail data karyawan yang akan bekerja atas nama <?= $Details->EmployeeName ?>
                            adalah sebagai berikut : </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Name</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->EmployeeName ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Skills</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->Skills ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Address</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description"><?= $Details->EmployeeAddress ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Description</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description text-justify"><?= $Details->EmployeeDescription ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <p>Salary</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7 pl-1">
                                <p class="description">Rp. <?= number_format($Details->Salary) ?>/<small class="description">Month*</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Data Employee -->

                <!-- Total Price -->
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <p class="description text-justify">
                            Dengan keterangan di atas pegawai atas nama <span class="font-weight-bold"><?= $Details->EmployeeName ?></span>
                            akan bekerja dengan perusahaan <span class="font-weight-bold"><?= $Details->CompanyName ?></span>
                            yang akan dimulai pada tanggal <span class="font-weight-bold"><?= $Details->From ?></span>
                            Sampai dengan tanggal <span class="font-weight-bold"><?= $Details->To ?></span>
                            dengan waktu Selama <span class="font-weight-bold"><?= $Details->Worksdays ?> Hari</span>
                            dengan total harga <span class="font-weight-bold">Rp.<?= number_format((($Details->Salary) / 22) * ($Details->Worksdays)) ?></span></p>
                    </div>
                </div>
                <!-- End of Total Price -->

                <!-- Notes -->
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <small class="description text-justify">
                            * Month = 22 Worksdays
                        </small>
                    </div>
                </div>
                <!-- End of Notes -->

            </div>
            <div class="card-footer">
                <hr>
                <div class="button-container">
                    <div class="row justify-content-center">
                        <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                            <i class="fa fa-check"></i>
                            Ok
                        </button>
                        <button class="btn btn-sm btn-outline-danger btn-round mr-1" title="Delete">
                            <i class="fa fa-trash-o"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>