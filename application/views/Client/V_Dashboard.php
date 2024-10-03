<div class="row">
    <div class="col-md-3">
        <!-- Payment -->
        <div class="card card-stats text-center">
            <div class="card-body">
                <div class="col-md-12 text-center">
                    <div class="numbers text-center">
                        <p class="card-category">Must Pay of Contract</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr>
                <div class="stats">
                    <i class="nc-icon nc-paper"></i>
                   <?=$CountWP->ContractWP?> Transaction
                </div>
            </div>
        </div>
        <!-- End of Payment -->

        <!-- Work With Company -->
        <div class="card card-stats ">
            <div class="card-body">
                <div class="col-md-12 text-center">
                    <div class="numbers text-center">
                        <p class="card-category">Work With Us</p>
                    </div>
                    <a href="<?=site_url('Contract')?>" class="btn btn-outline-warning btn-sm btn-round">Manage</a>
                </div>
            </div>
            <div class="card-footer text-center">
                <hr>
                <div class="stats">
                    <i class="fa fa-user"></i>
                    <?=$CountPr->ContractPr?> Employee
                </div>
            </div>
        </div>
        <!-- End of Work With Company -->

        <!-- Contract -->
        <div class="card card-stats text-center">
            <div class="card-body">
                <div class="col-md-12 text-center">
                        <div class="numbers text-center">
                            <p class="card-category">Create Contract</p>
                        </div>
                        <a href="<?=site_url('Market')?>" class="btn btn-outline-success btn-sm btn-round" title="Create">
                        <i class="fa fa-pencil-square-o"></i>
                        Create
                        </a>
                    </div>
                </div>
            <div class="card-footer">
                <hr>
                <div class="stats">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <?=$CountPr->ContractPr?> Contract Progress
                </div>
                <div class="stats">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <?=($CountFn->ContractFn)+($CountEx->ContractEx)?> Contract Finish
                </div>
            </div>
        </div>
        <!-- End of Contract -->
    </div>

    <div class="col-md-9">

        <!-- Payment Data -->
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Payment Transaction</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Identity Contract</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Working Day</th>
                                <th>Contract Desc</th>
                                <th>Bill</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($ContractWP->result() as $key => $data) {?>
                            <tr class="text-justify">
                                <td><?=$data->Contract_ID?></td>
                                <td width="100px"><?=$data->From?></td>
                                <td width="100px"><?=$data->To?></td>
                                <td class="text-center"><?=$data->Worksdays?> <small>/<small>Days</small></small></td>
                                <td><?=$data->Contract_DESC?></td>
                                <td class="text-center">Rp.<?=number_format((($data->Salary)/22) * ($data->Worksdays))?></td>
                                <td>
                                    <div class="row justify-content-center">
                                        <form action="<?=site_url('Transaction')?>" method="post">
                                            <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                            <button type="submit" class="btn btn-outline-success btn-sm btn-icon btn-round mr-1">
                                            <i class="fa fa-check"></i>
                                            </button>
                                        </form>
                                        <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                            <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                            <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-icon btn-round">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End of Payment Data -->

        <!-- Employee Work With Company -->
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Employee Work at Company</h5>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <?php foreach($ContractPr->result() as $key => $data) {?>
                        <div class="col-md-6">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$data->EmployeePhoto != null ? $data->EmployeePhoto : 'mike.jpg' ?>" alt="...">
                                        <h5 class="title"><?=$data->EmployeeName?></h5>
                                    </div>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-11 px-1">
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <a class="card-title">Start Work</a>
                                                    <p class="description"><?=$data->From?></p>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <a class="card-title">End Work</a>
                                                    <p class="description"><?=$data->To?></p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 px-1 text-justify">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Phone</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->Phone?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">E-mail</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->EmployeeEmail?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Address</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->EmployeeAddress?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Jobs</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->Contract_DESC?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr>
                                    <div class="button-container">
                                        <div class="row justify-content-center">
                                            <form action="<?=site_url('Details/contract')?>" method="post">
                                                <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                <button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
                                                    <i class="fa fa-id-card-o"></i>
                                                    Details
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- End of Employee Work With Company -->

    </div>
</div>