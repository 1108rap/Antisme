<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Purchase Ordered</h4>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-9 px-1 text-justify">
                        <p class="description">&emsp;Pekerja dengan data kelengkapan diri sebagai yang tercatat pada point point berikut ini :</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 px-1">
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
                                <p class="description">Rp. <?=number_format(($Details->Salary)/22)?> /<small class="description">Days</small></p>
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
                        <form action="<?=site_url('Contract/CreateContract')?>" method="post">
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>From</label>
                                    <input name="datestart" id="datestart" type="date" class="form-control"  value="" min="<?=date('Y-m-d')?>">
                                </div>
                            </div>
                            <div class="col-md-7 pl-1">
                                <div class="form-group">
                                    <label>To</label>
                                    <input name="datefinish" id="datefinish" type="date" class="form-control"  value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contract Description</label>
                                    <textarea name="AboutContract" type="text" class="form-control"  value=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9 px-1 text-justify">
                        <p class="description">Perhitungan <span class="font-weight-bold">Hari</span> dan<span class="font-weight-bold"> Total Biaya </span> akan di tampilkan pada 
                        <span class="font-weight-bold">Dashboard</span> anda. Rekrut sekarang dan mulai kelola sumber daya kalian</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr>
                <div class="button-container">
                    <div class="row justify-content-center">
                            <input type="hidden" name="identityemp" value="<?=$Details->Employee_ID?>">
                            <input type="hidden" name="startdate" value="<?=$this->input->post('datestart')?>">
                            <input type="hidden" name="enddate" value="<?=$this->input->post('datefinish')?>">
                            <input type="hidden" name="contractdesc" value="<?=$this->input->post('AboutContract')?>">
                            <button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                                <i class="fa fa-shopping-cart"></i>
                                Order
                            </button>
                        </form>
                        <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-danger btn-round mr-1" title="Back">
                            <i class="fa fa-undo"></i>
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>