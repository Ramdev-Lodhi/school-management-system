


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
    <div id="page-wrapper">
<div class="tables">
						<div class="table-responsive bs-example widget-shadow">
						<h4 style="color: #e94e02;">List of Student Details:</h4>
						<table class="table table-bordered table-striped"> <thead> 
						<!-- <a  class="btn btn-info" href="<?php echo base_url('Welcome/download/');?>"><i class="fa fa-download" style="font-size:20px;color:grey"></i> Download table </a> -->
    <table border="1" class="table table-smoke table-striped-columns">
        <tr>
             <td>S.No</td>
             
             <td>Name</td>
             <td>Email</td>
             <td>Subject</td>
             <td>Message</td>
        
        </tr>
        <?php
        $i=1;
        foreach($ram as $data)
        {?>
             <tr>
             <td> <?php echo $i++; ?></td>
            <td> <?php echo $data->name; ?></td>
            <td> <?php echo $data->email; ?></td>
            <td> <?php echo $data->subject; ?></td>
            <td> <?php echo $data->message; ?></td>

           
         
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
