<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Proof of Transaction</h4>
            </div>
            <div class="card-body">
                <!-- Data Transaction -->
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <p class="description text-justify">
                                Bukti Transaksi Pembayaran Antara perusahaan <span class="font-weight-bold"><?=$datacontract->row()->CompanyName?></span> 
                                Dengan Data Sebagai Berikut :
                            </p>
                        </div>
                    </div>
                <!-- End of Data Transaction -->

                <!-- Data Contract -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <p class="card-title">Identity Contract</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p class="card-title">:</p>
                            </div>
                            <div class="col-md-5 pl-1">
                                <p class="description text-justify"><?=$datacontract->row()->Contract_ID?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <p class="card-title">Working Day</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p class="card-title">:</p>
                            </div>
                            <div class="col-md-5 pl-1">
                                <p class="description text-justify"><?=$datacontract->row()->Worksdays?> Days</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <p class="card-title">Start Working Date</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p class="card-title">:</p>
                            </div>
                            <div class="col-md-5 pl-1">
                                <p class="description text-justify"><?=$datacontract->row()->From?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <p class="card-title">Finish Working Date</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p class="card-title">:</p>
                            </div>
                            <div class="col-md-5 pl-1">
                                <p class="description text-justify"><?=$datacontract->row()->To?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <p class="card-title">Contract description</p>
                            </div>
                            <div class="col-md-1 px-1">
                                <p class="card-title">:</p>
                            </div>
                            <div class="col-md-5 pl-1">
                                <p class="description text-justify"><?=$datacontract->row()->Contract_DESC?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Data Contract -->

                <!-- Data Employee -->
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <p class="description text-justify">
                                Dengan Data Karyawan Yang Akan Bekerja Pada Perusahaan Adalah Sebagai Berikut :
                            </p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <p class="card-title">Employee Name</p>
                                </div>
                                <div class="col-md-1 px-1">
                                    <p class="card-title">:</p>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <p class="description text-justify"><?=$datacontract->row()->EmployeeName?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <p class="card-title">Address</p>
                                </div>
                                <div class="col-md-1 px-1">
                                    <p class="card-title">:</p>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <p class="description text-justify"><?=$datacontract->row()->EmployeeAddress?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <p class="card-title">Phone</p>
                                </div>
                                <div class="col-md-1 px-1">
                                    <p class="card-title">:</p>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <p class="description text-justify"><?=$datacontract->row()->Phone?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <p class="card-title">Skills</p>
                                </div>
                                <div class="col-md-1 px-1">
                                    <p class="card-title">:</p>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <p class="description text-justify"><?=$datacontract->row()->Skills?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <p class="card-title">Salary</p>
                                </div>
                                <div class="col-md-1 px-1">
                                    <p class="card-title">:</p>
                                </div>
                                <div class="col-md-5 pl-1">
                                    <p class="description text-justify">Rp. <?=number_format(($datacontract->row()->Salary)/22)?> /<small class="description">Days</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Data Employee -->

                <!-- Payment Invitation -->
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <p class="description text-justify">
                            Jika data-data tersebut telah sesuai dengan contract maka silahakan melakukan 
                            pembayaran sebesar <span class="font-weight-bold">Rp.<?=number_format((($datacontract->row()->Salary)/22)*($datacontract->row()->Worksdays))?></span> 
                            kepada rekening berikut. <span class="font-weight-bold">7510719195 (BCA)</span> 
                            atau <span class="font-weight-bold">7111416545 (BSM)</span>. jika sudah melakukan pembayaran maka 
                            silahkan untuk mengupload bukti transfer di bawah ini :
                        </p>
                    </div>
                </div>
                <!-- End of Payment Invitation -->

                <!-- Upload Proof of Transaction -->
                        <form action="<?=site_url('Contract/PaidContract')?>" enctype="multipart/form-data" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mr-2 px-1">
                            <div class="form-group text-center">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new img-thumbnail" style="min-width: 200px; min-height: 150px;">
                                        <img src="<?=base_url()?>assets/img/default-avatar.png"  alt="No Photo">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-primary btn-round btn-sm btn-file">
                                            <span class="fileinput-new">Upload Proof</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="photo">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Upload Proof of Transaction -->
            </div>
            <div class="card-footer">
                <hr>
                <div class="button-container">
                    <div class="row justify-content-center">
                        <input type="hidden" value="<?=$salartemp = ((($datacontract->row()->Salary)/22)*($datacontract->row()->Worksdays))?>">
                        <input type="hidden" value="<?=$admincost = $salartemp * 0.1?>">
                        <input type="hidden" name="identity" value="<?=$datacontract->row()->Contract_ID?>">
                        <input type="hidden" name="bills" value="<?=$salartemp + $admincost?>">
                        <input type="hidden" name="admcost" value="<?=$admincost?>">
                        <input type="hidden" name="empcost" value="<?=$salartemp?>">
                        <input type="hidden" name="stat" value="Already Paid">
                        <button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Ok">
                            <i class="fa fa-check"></i>
                            Complete
                        </button>
                        </form>
                        <button type="button" onclick="history.back()" class="btn btn-sm btn-outline-warning btn-round mr-1" title="Back">
                            <i class="fa fa-undo"></i>
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>