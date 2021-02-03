<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Create User</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-info">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
    <h3>Create Customer</h3> 
        <hr>
        <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-info card-form">
                        <div class="card-body">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name');?>" class='form-control'>
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="text" name="email" value="<?php echo set_value('email');?>" class='form-control'>
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" required value="<?php echo set_value('gender');?>" class='form-control'>
                                    <option disabled selected>--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="femmale">Female</option>
                                </select>
                                <?php echo form_error('gender');?>
                            </div>                 
                            <div  class="form-group">
                                <label for="">Date of Birth</label>
                                <input type="date" id="dob" name="dob" value="<?php echo set_value('dob');?>" class='form-control'>
                                <?php echo form_error('dob');?>
                            </div>
                            <div class="form-group">
                                <label for="">Nationalty</label>
                                <input type="text" name="nationalty" value="<?php echo set_value('nationalty');?>" class='form-control'>
                                <?php echo form_error('nationalty');?>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" maxlength="11" name="phone_no" id="phone" value="<?php echo set_value('phone_no');?>" class='form-control'>
                                <?php echo form_error('phone_no');?>
                            </div>
                            <div class="form-group">
                                <label for="">Home Address </label>
                                <input type="text" name="home_adress" value="<?php echo set_value('home_adress');?>" class='form-control'>
                                    <?php echo form_error('home_adress');?>
                                </div>
                            <div class="form-group">
                                <label for="">Next of Kin</label>
                                <input type="text" name="next_of_kin" value="<?php echo set_value('next_of_kin');?>" class='form-control'>
                                <?php echo form_error('next_of_kin');?>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number of Kin</label>
                                <input type="text" maxlength="11" name="phone_num" id="phone" value="<?php echo set_value('phone_num');?>" class='form-control'>
                                <?php echo form_error('phone_num');?>
                            </div>
                            <div class="form-group mb">
                                <label for="">Address of Next of Kin </label>
                                <input type="text" name="address_next_of_kin" value="<?php echo set_value('address_next_of_kin');?>" class='form-control'>
                                <?php echo form_error('address_next_of_kin');?>
                            </div>
                    <br>
                    <div>
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>