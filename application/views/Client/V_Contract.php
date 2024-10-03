<!-- Contract Active -->
    <div class="row justify-content-center">
        <div class="col-md-12 px-1">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Active Contract</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">

                    <!-- Contract Waiting of Payment -->
                        <?php foreach($ContractWP->result() as $key =>$data) {?>
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="title"><?=$data->Contract_ID?></h5>
                                        </a>
                                        <p class="title"><?=$data->Status?></p>
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
                                            <div class="col-md-11 px-1 text-justify">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Contract ID</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Contract_ID?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Employee</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->EmployeeName?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Work Days</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Worksdays?>/<small class="description">Days</small></p>
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
                                                            <i class="nc-icon nc-single-copy-04"></i>
                                                            Details
                                                        </button>
                                                    </form>
                                                    <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                                        <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                        <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
                    <!-- End of Contract Waiting of Payment -->

                    <!-- Contract Already Paid -->
                        <?php foreach($ContractAP->result() as $key =>$data) {?>
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="title"><?=$data->Contract_ID?></h5>
                                        </a>
                                        <p class="title"><?=$data->Status?></p>
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
                                            <div class="col-md-11 px-1 text-justify">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Contract ID</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Contract_ID?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Employee</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->EmployeeName?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Work Days</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Worksdays?>/<small class="description">Days</small></p>
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
                                                            <i class="nc-icon nc-single-copy-04"></i>
                                                            Details
                                                        </button>
                                                    </form>
                                                    <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                                        <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                        <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
                    <!-- End of Contract Already Paid -->

                    <!-- Contract Progress -->
                        <?php foreach($ContractPr->result() as $key =>$data) {?>
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="title"><?=$data->Contract_ID?></h5>
                                        </a>
                                        <p class="title"><?=$data->Status?></p>
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
                                            <div class="col-md-11 px-1 text-justify">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Contract ID</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Contract_ID?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Employee</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->EmployeeName?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Work Days</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Worksdays?>/<small class="description">Days</small></p>
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
                                                            <i class="nc-icon nc-single-copy-04"></i>
                                                            Details
                                                        </button>
                                                    </form>
                                                    <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                                        <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                        <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
                    <!-- End of Contract Progress -->
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End of Contract Active -->

<!-- Contract Finish -->
    <div class="row justify-content-center">
        <div class="col-md-12 px-1">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Finish Contract</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">

                    <!-- Contract Finish -->
                        <?php foreach($ContractFn->result() as $key =>$data) {?>
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="title"><?=$data->Contract_ID?></h5>
                                        </a>
                                        <p class="title"><?=$data->Status?></p>
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
                                            <div class="col-md-11 px-1 text-justify">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Contract ID</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Contract_ID?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Employee</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->EmployeeName?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Work Days</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Worksdays?>/<small class="description">Days</small></p>
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
                                                            <i class="nc-icon nc-single-copy-04"></i>
                                                            Details
                                                        </button>
                                                    </form>
                                                    <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                                        <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                        <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
                    <!-- End of Contract Finish -->

                    <!-- Contract Expired -->
                        <?php foreach($ContractEx->result() as $key =>$data) {?>
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="image">
                                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="">
                                            <h5 class="title"><?=$data->Contract_ID?></h5>
                                        </a>
                                        <p class="title"><?=$data->Status?></p>
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
                                            <div class="col-md-11 px-1 text-justify">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Contract ID</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Contract_ID?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Employee</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->EmployeeName?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <a class="card-title">Work Days</a>
                                                    </div>
                                                    <div class="col-md-1 px-1">
                                                        <a class="card-title">:</a>
                                                    </div>
                                                    <div class="col-md-7 pl-1">
                                                        <p class="description"><?=$data->Worksdays?>/<small class="description">Days</small></p>
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
                                                            <i class="nc-icon nc-single-copy-04"></i>
                                                            Details
                                                        </button>
                                                    </form>
                                                    <form action="<?=site_url('Contract/ContractDelt')?>" method="post">
                                                        <input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
                                                        <input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
                    <!-- End of Contract Expired -->
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End of Contract Finish -->