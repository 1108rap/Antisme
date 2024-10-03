<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-center">
                    <h4 class="card-title">Registration</h4>
                </div>
                <div class="row justify-content-center">
                    <p class="description text-center">Create new account, join with us<br>and grow up your business</p>
                </div>
            </div>
            <div class="card-body">
                <form action="<?=site_url('Account/Registration')?>" enctype="multipart/form-data" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Name / Company Name</label>
                                <input name="name" type="text" class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-3 pl-1">
                            <div class="form-group">
                                <label>Phone / Telephone</label>
                                <input name="telephone" type="text" class="form-control"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" type="username" class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" id="level" onchange="disableinput()" class="form-control">
                                    <option></option>
                                    <option value="Client">Client</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Salary</label>
                                <input name="salary" type="text" id="salary" class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Skills</label>
                                <input name="skills" id="skills" type="text" class="form-control"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" type="text" class="form-control"  value=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-7 pl-1">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea name="description" type="text" class="form-control"  value=""></textarea>
                            </div>
                        </div>
                    </div>
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
                                            <span class="fileinput-new">Choose Photo</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="photo">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Action Button -->
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-sm btn-outline-warning btn-round">Create</button>
                        </div>
                    </div>
                </form>
                <script>
                    function disableinput(){
                        if(document.getElementById("level").value == "Client") {
                            document.getElementById("salary").disabled = true;
                            document.getElementById("skills").disabled = true;
                        } else if(document.getElementById("level").value == "Admin") {
                            document.getElementById("salary").disabled = true;
                            document.getElementById("skills").disabled = true;
                        } else {
                            document.getElementById("salary").disabled = false;
                            document.getElementById("skills").disabled = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>