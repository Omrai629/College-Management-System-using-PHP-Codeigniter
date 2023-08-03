<html>
    <head>
        <style>
            body{
                background-color:#E0FFFF;
            }
            .card{
                margin:40px auto;
                width:650px;
                border-color:black;
                border-radius:10px;
                border-width:2px;
            }
            .btn{
                margin-top:20px;
            }
           
        </style>
    </head>
    <body>



<div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo base_url("Update/update_details/".$users->id);?>" enctype="multipart/form-data">
            <h2><center>Edit User</center></h2>
                <div class="mb-3">
                     <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $users->username;?>">
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $users->email;?>">
                </div>
                <p>Select Gender</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                    <label class="form-check-label" for="male">
                     Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                    <label class="form-check-label" for="female">
                    Female
                    </label>
                </div>
                <div class="mb-">
                     <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $users->phone;?>">
                </div>
                <div class="mb-3 ">
                     <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="<?php echo $users->address;?>">
                </div>
                <div class="mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo $users->password;?>">
                </div>
                <div class="mb-3 ">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword" value="<?php echo $users->password;?>">
                </div>
                <div class="mb-3 ">
                    <label for="image" class="form-label">Upload Photo</label><br>
                    <input type="file" name="image"  id="image" >
                </div>
                <div class="mb-3">
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
</body>
</html>