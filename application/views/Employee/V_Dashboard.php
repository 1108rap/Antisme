<?php if($ContractData != null) {?>
    <div class="row justify-content-center">
        <!-- Stat -->
            <div class="col-lg-3 col-md-6 col-sm-6 ">

                <!-- Work At -->
                    <div class="card card-stats  bg-warning">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-bank"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">Work At Company</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-building"></i>
                            <?=$ContractData->CompanyName?>
                            </div>
                        </div>
                    </div>
                <!-- End of Work At -->

                <!-- Income -->
                    <div class="card card-stats  bg-success">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-credit-card"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">Total Jobs<br>Income</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-money"></i>
                            Rp. <?=$TotalIncome != null ? number_format($TotalIncome->TotalIncome) : 'No Income'?>
                            </div>
                        </div>
                    </div>
                <!-- End of Income  -->

                <!-- Finish Date -->
                    <div class="card card-stats  bg-danger">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-watch-time"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">End Working<br>Date</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-calendar-check-o"></i>
                            <?=$ContractData->To?>
                            </div>
                        </div>
                    </div>
                <!-- End of Finish Date -->

            </div>
        <!-- End of Stat -->

        <!-- Jobs Description -->
            <div class="col-md-5">
                <div class="card card-user">
                    <div class="image">
                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$ContractData->CompanyPhoto?>" alt="...">
                                <h5 class="title"><?=$ContractData->CompanyName?></h5>
                            </a>
                        </div>

                        <!-- Office Area -->
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <hr>
                                    <div class="row justify-content-center">
                                        <div class="col-md-11 px-1">
                                            <a class="card-title">Office Area</a>
                                            <p class="description"><?=$ContractData->CompanyAddress?></p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        <!-- End of Office Area -->

                        <!-- Description -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 pr-1 text-justify">
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Contract Identity</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description"><?=$ContractData->Contract_ID?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Contract Income</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description">Rp. <?=number_format((($ContractData->Salary)/22) * ($ContractData->Worksdays))?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Worksdays</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description"><?=$ContractData->Worksdays?> /<small class="description">Days</small></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Jobs Task</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description"><?=$ContractData->Contract_DESC?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Description -->

                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6 ml-auto">
                                    <a>Start Date</a>
                                    <h5 class="description"><?=$ContractData->From?></h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                                    <a>End Date</a>
                                    <h5 class="description"><?=$ContractData->To?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of Jobs Description -->

        <!-- Company Information -->
            <div class="col-md-4 pl-1">

                <!-- Company Information -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <h5 class="title">Company Information</h5>
                                    <hr>
                                </div>
                                <div class="col-md-11">
                                    <a class="card-title">About Company</a>
                                    <p class="description"><?=$ContractData->CompanyDescription?></p>
                                </div>
                                <div class="col-md-11">
                                    <a class="card-title">Company Contact</a>
                                    <p class="description"><?=$ContractData->Telephone?><br><?=$ContractData->CompanyEmail?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Company Information -->

                <!-- Contract Action -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <h5 class="title">Contract Action</h5>
                                    <hr>
                                </div>
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <a class="card-title">Details</a><br>
                                            <small class="description">Details Your Contract</small>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <form action="<?=site_url('Details/contract')?>" method="post">
                                                <input type="hidden" name="identity" value="<?=$ContractData->Contract_ID?>">
                                                <button type="submit" class="btn btn-outline-success btn-sm btn-round btn-icon pull-right">
                                                <i class="nc-icon nc-single-copy-04"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <a class="card-title">Resign</a><br>
                                            <small class="description">"Company Name"</small>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <button class="btn btn-outline-danger btn-sm btn-round btn-icon pull-right">
                                            <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Contract Action -->

            </div>
        <!-- End of Company Information -->
    </div>
<?php } else {?>
    <div class="row justify-content-center">
        <!-- Stat -->
            <div class="col-lg-3 col-md-6 col-sm-6 ">

                <!-- Work At -->
                    <div class="card card-stats  bg-warning">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-bank"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">Work At Company</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-building"></i>
                            Company Name
                            </div>
                        </div>
                    </div>
                <!-- End of Work At -->

                <!-- Income -->
                    <div class="card card-stats  bg-success">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-credit-card"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">Total Jobs<br>Income</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-money"></i>
                            Rp. <?=$TotalIncome != null ? number_format($TotalIncome->TotalIncome) : 'No Income'?>
                            </div>
                        </div>
                    </div>
                <!-- End of Income  -->

                <!-- Finish Date -->
                    <div class="card card-stats  bg-danger">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-watch-time"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8 align-self-center">
                                <div class="numbers text-center">
                                <p class="card-category text-white">End Working<br>Date</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <hr>
                            <div class="stats text-white">
                            <i class="fa fa-calendar-check-o"></i>
                            No Date
                            </div>
                        </div>
                    </div>
                <!-- End of Finish Date -->

            </div>
        <!-- End of Stat -->

        <!-- Jobs Description -->
            <div class="col-md-5">
                <div class="card card-user">
                    <div class="image">
                        <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="<?=base_url()?>assets/photo/Mike.jpg" alt="...">
                                <h5 class="title">Company Name</h5>
                            </a>
                        </div>

                        <!-- Office Area -->
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <hr>
                                    <div class="row justify-content-center">
                                        <div class="col-md-11 px-1">
                                            <a class="card-title">Office Area</a>
                                            <p class="description">Company Address</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        <!-- End of Office Area -->

                        <!-- Description -->
                            <div class="row justify-content-center">
                                <div class="col-md-10 pr-1 text-justify">
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Contract Identity</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description">Contract ID</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Contract Income</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description">No Income</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Worksdays</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description">- /<small class="description">Days</small></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <a class="card-title">Jobs Task</a>
                                        </div>
                                        <div class="col-md-1 px-1">
                                            <a class="card-title">:</a>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <p class="description">No Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Description -->

                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6 ml-auto">
                                    <a>Start Date</a>
                                    <h5 class="description">No Date</h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                                    <a>End Date</a>
                                    <h5 class="description">No Date</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of Jobs Description -->

        <!-- Company Information -->
            <div class="col-md-4 pl-1">

                <!-- Company Information -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <h5 class="title">Company Information</h5>
                                    <hr>
                                </div>
                                <div class="col-md-11">
                                    <a class="card-title">About Company</a>
                                    <p class="description">No Company</p>
                                </div>
                                <div class="col-md-11">
                                    <a class="card-title">Company Contact</a>
                                    <p class="description">No Contact</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Company Information -->

                <!-- Contract Action -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-11 text-center">
                                    <h5 class="title">Contract Action</h5>
                                    <hr>
                                </div>
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <a class="card-title">Details</a><br>
                                            <small class="description">Details Your Contract</small>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <button class="btn btn-outline-success btn-sm btn-round btn-icon pull-right">
                                            <i class="nc-icon nc-single-copy-04"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <a class="card-title">Resign</a><br>
                                            <small class="description">"Company Name"</small>
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <button class="btn btn-outline-danger btn-sm btn-round btn-icon pull-right">
                                            <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Contract Action -->

            </div>
        <!-- End of Company Information -->
    </div>
<?php }?>