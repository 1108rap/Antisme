<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <form action="<?=site_url('Account/Update')?>" enctype="multipart/form-data" method="post">
                <div class="text-center">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-thumbnail" style="min-width: 200px; min-height: 150px;">
                                <img src="<?=base_url()?>assets/photo/<?=$this->fungsi->user_login()->Photo;?>"  alt="No Photo">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                                <span class="btn btn-outline-primary btn-round btn-sm btn-file">
                                    <span class="fileinput-new">Choose Photo</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="photo">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <p class="description pull-right mr-2"><?=$this->fungsi->user_login()->Level;?></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <?php if($this->fungsi->user_login()->Level == 'Client') {?>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Identity (Disabled)</label>
                                    <input type="text" class="form-control" name="identity" value="<?=$this->fungsi->user_login()->Client_ID;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-5 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?=$this->fungsi->user_login()->Username;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="<?=$this->fungsi->user_login()->Password;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="<?=$this->fungsi->user_login()->Name;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?=$this->fungsi->user_login()->Email;?>" >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Telephone / Fax</label>
                                    <input type="text" class="form-control" name="telephone" value="<?=$this->fungsi->user_login()->Telephone;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="<?=$this->fungsi->user_login()->Address;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description" value="" ><?=$this->fungsi->user_login()->Description;?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php } else if($this->fungsi->user_login()->Level == 'Employee') {?>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Identity (Disabled)</label>
                                    <input type="text" class="form-control" name="identity" value="<?=$this->fungsi->user_login()->Employee_ID;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-5 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?=$this->fungsi->user_login()->Username;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="<?=$this->fungsi->user_login()->Password;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="<?=$this->fungsi->user_login()->Name;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?=$this->fungsi->user_login()->Email;?>" >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?=$this->fungsi->user_login()->Phone;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Skills</label>
                                    <input type="text" class="form-control" name="skills" value="<?=$this->fungsi->user_login()->Skills;?>" >
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input type="text" class="form-control" name="salary" value="<?=$this->fungsi->user_login()->Salary;?>" >
                                </div>
                            </div>
                            <div class="col-md-5 pl-1">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="<?=$this->fungsi->user_login()->Address;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description" value="" ><?=$this->fungsi->user_login()->Description;?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php } else if($this->fungsi->user_login()->Level == 'Admin') {?>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>Identity (Disabled)</label>
                                    <input type="text" class="form-control" name="identity" value="<?=$this->fungsi->user_login()->Admin_ID;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-5 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?=$this->fungsi->user_login()->Username;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="<?=$this->fungsi->user_login()->Password;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="<?=$this->fungsi->user_login()->Name;?>" >
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?=$this->fungsi->user_login()->Email;?>" >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?=$this->fungsi->user_login()->Phone;?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="<?=$this->fungsi->user_login()->Address;?>" >
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="row justify-content-center">
                        <input type="hidden" name="level" value="<?=$this->fungsi->user_login()->Level?>">
                        <button type="submit" class="btn btn-sm btn-outline-success btn-round">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>