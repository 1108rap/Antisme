<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Market</h5>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <?php foreach($Market->result() as $key => $data) {?>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$data->Photo != null ? $data->Photo : 'mike.jpg' ?>" alt="...">
                                            <h5 class="title"><?=$data->Name?></h5>
                                        </a>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-11 px-1 text-justify">
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Address</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->Address?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Skills</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->Skills?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <a class="card-title">Description</a>
                                                </div>
                                                <div class="col-md-1 px-1">
                                                    <a class="card-title">:</a>
                                                </div>
                                                <div class="col-md-7 pl-1">
                                                    <p class="description"><?=$data->Description?></p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-11 px-1">
                                            <div class="row">
                                                <div class="col-md-12 pr-1">
                                                    <a class="card-title">Salary</a>
                                                    <p class="description">Rp. <?=number_format($data->Salary)?> /<small class="description">Month</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <hr>
                                    <div class="button-container">
                                        <div class="row justify-content-center">
                                            <form action="<?=site_url('Purchase')?>" method="post">
                                                <input type="hidden" name="identity" value="<?=$data->Employee_ID?>">
                                                <input type="hidden" name="level" value="<?=$data->Level?>">
                                                <button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
                                                    <i class="fa fa-check"></i>
                                                    Hire
                                                </button>
                                            </form>
                                            <form action="<?=site_url('Details/account')?>" method="post">
                                                <input type="hidden" name="identity" value="<?=$data->Employee_ID?>">
                                                <input type="hidden" name="level" value="<?=$data->Level?>">
                                                <button type="submit" class="btn btn-sm btn-outline-warning btn-round btn-icon mr-1" title="Details">
                                                    <i class="fa fa-id-card-o"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>