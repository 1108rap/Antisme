<div class="row justify-content-center">
    <?php if($level=='Employee') { ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Details Employee</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <p class="description">&emsp;Pekerja dengan data kelengkapan diri sebagai yang tercatat pada point point berikut ini :</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Identity</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Employee_ID?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Status Account</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->AccountStat?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Name</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Name?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Username</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Username?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Phone</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Phone?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Email?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Skills</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Skills?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Address?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description text-justify"><?=$Details->Description?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Salary</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description">Rp. <?=number_format($Details->Salary)?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Status Available</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Status?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row justify-content-center">
                            <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                                <i class="fa fa-check"></i>
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($level=='Client') { ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Details Company</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <p class="description">&emsp;perusahaan dengan data kelengkapan perusahaan sebagai yang tercatat pada point point berikut ini :</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Identity</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Client_ID?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Status Account</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Status?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Name</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Name?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Username</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Username?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Telephone / Fax</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Telephone?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Email?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Address?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description text-justify"><?=$Details->Description?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row justify-content-center">
                            <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                                <i class="fa fa-check"></i>
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($level=='Admin') { ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Details Administrator</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <p class="description">&emsp;Administrator dengan data kelengkapan diri sebagai yang tercatat pada point point berikut ini :</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Identity</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Admin_ID?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Status Account</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Status?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Name</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Name?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6 class="title">Username</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Username?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Phone</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Phone?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Email?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-md-7 pl-1">
                                    <p class="description"><?=$Details->Address?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row justify-content-center">
                            <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                                <i class="fa fa-check"></i>
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>