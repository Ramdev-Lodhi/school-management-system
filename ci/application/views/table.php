

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous"> -->
    <title>DISPLAY</title>
   
</head>
<body>
    <div id="page-wrapper"
<div class="tables">
						<div class="table-responsive bs-example widget-shadow">
						<h4 style="color: #e94e02;">List of Student Details:</h4>
						<table class="table table-bordered table-striped"> <thead> 
						<a  class="btn btn-info" href="<?php echo base_url('Student/download/');?>"><i class="fa fa-download" style="font-size:20px;color:grey"></i> Download table </a>
    <table border="1" class="table table-smoke table-striped-columns">
        <tr>
             <td>S.No</td>
             
             <td>Name</td>
             <td>Aadhar Number</td>
             <td>Pan Number</td>
             <td>Mobile No.</td>
             <td>Gender</td>
             <td>Date Of Brith</td>
             <td>Email</td>
             <td>Category</td>
             <td>Blood Group</td>
             <td>Religion</td>
             <td>Minority</td>
             <td>Handicap</td>
             <td>Local Address</td>
             <td>Permanant Address</td>
             <td>City</td>
             <td>District</td>
             <td>Pincode</td>
             <td>State</td>
             <td>Father Name</td>
             <td>Mother Name</td>
        </tr>
        <?php
        $i=1;
        foreach($rs as $data)
        {?>
             <tr>
            <td> <?php echo $i++; ?></td>
            <td> <?php echo $data->title; ?>
                 <?php echo $data->fname; ?>
                 <?php echo $data->mname; ?>
                 <?php echo $data->lname; ?></td>
            <td> <?php echo $data->aadhar; ?></td>
            <td> <?php echo $data->pan_no; ?></td>
            <td> <?php echo $data->mobile1; ?></td>
            <td> <?php echo $data->gender; ?></td>
            <td> <?php echo $data->dob; ?></td>
            <td> <?php echo $data->email; ?></td>
            <td> <?php echo $data->category; ?></td>
            <td> <?php echo $data->blood_group; ?></td>
            <td> <?php echo $data->religion; ?></td>
            <td> <?php echo $data->minority; ?></td>
            <td> <?php echo $data->handicap; ?></td>
            <td> <?php echo $data->laddress; ?></td>
            <td> <?php echo $data->paddress; ?></td>
            <td> <?php echo $data->city; ?></td>
            <td> <?php echo $data->district; ?></td>
            <td> <?php echo $data->pincode; ?></td>
            <td> <?php echo $data->state; ?></td>
            <td> <?php echo $data->father_name; ?></td>
            <td> <?php echo $data->mother_name; ?></td>

           <td>
           <a  class="btn btn-primary" href="<?php echo base_url('Student/edit/'.$data->id);?>">Update </a>
           <a class="btn btn-danger" href="<?php echo base_url('Student/deletedata/'.$data->id);?>">Delete </a> </td>
        </tr>
              
        <?php }
        $i++; ?>
						     </table> 
					</div>
					</div>
					</div>
				
</div>

        
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->load->view('footer');?>