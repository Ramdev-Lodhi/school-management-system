<style>
    body {
        padding: 0;
        margin: 0;
        font-family: 'Lato', sans-serif;
        color: #000;

    }


    .student-profile .card {
        border-radius: 10px;
    }

    .student-profile .card .card-header .profile_img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        margin: 10px auto;
        border: 4px solid #ccc;
        border-radius: 50%;
    }

    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }

    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }

    .profile-pic {
        color: transparent;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .profile-pic input {
        display: none;
    }



  


  
   
</style>

<div id="page-wrapper">

    <div class="main-page">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
            <div class="form-title">
                <h4> Profile Details</h4>
            </div>
            <div class="form-body">

                <div class="student-profile py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-transparent text-center">
                                        <div class="profile-pic">
                                            <!-- <img src="<?php //echo base_url('assets/image/user.png'); ?>" class="profile_img" /> -->
                                            <img class="profile_img" src="https://img.freepik.com/premium-vector/business-global-economy_24877-41082.jpg" alt="">
                                        </div> 
                                        <?php
                                        foreach ($ram as $data) { ?>
                                            <td>
                                                <?php echo $data->title; ?>
                                                <?php echo $data->fname; ?>
                                                <?php echo $data->mname; ?>
                                                <?php echo $data->lname; ?>
                                            </td>
                                        <?php }
                                        ?>
                                    </div>
                                    <br>
                                    <div class="card-body">
                                        <!-- <p class="mb-0"><strong class="pr-1">Student ID:</strong>
                                            <?php echo $data->id; ?>
                                        </p> -->
                                        <p class="mb-0"><strong class="pr-1">Class:</strong>CSE-AIML</p>
                                        <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-lg-8">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-transparent border-0">
                                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                    </div><br>
                                    <div class="card-body pt-0">
                                        <table class="table table-bordered">
                                            <!-- <tr>
                  <th width="30%">Roll</th>
                  <td width="2%">:</td>
                  <td>44</td>
                   </tr> -->
                                            <?php
                                            foreach ($ram as $data) { ?>
                                                <tr>
                                                    <th width="30%">Academic Year </th>
                                                    <td width="2%">:</td>
                                                    <td>2023 </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Gender</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $data->gender; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Religion</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $data->religion; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">blood</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $data->blood_group; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Mobile No.</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $data->mobile1; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Email</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $data->email; ?>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Student Profile -->

        </div>
    </div>
</div>
