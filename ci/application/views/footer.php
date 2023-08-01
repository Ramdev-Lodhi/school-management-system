<br><br>
<div class="footer">
	<p>MADE by RAMDEV LODHI <a href="ramdevlodhi@.com">ramdevlodhi@.com</a>&nbsp; &nbsp;
		&nbsp;
		<!-- <a href="https://www.google.com/" class="rounded-circle">
			<span class="fa fa-google-plus"></span>
		</a>&nbsp; -->
		<!-- <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a>  -->
		<a href="https://twitter.com/rsthakur8815?t=j9Ui7YDHmF1A7hBbm5s22g&s=09" class="rounded-circle">
			<span class="fa fa-twitter"></span>
		</a>&nbsp;
		<a href="https://in.linkedin.com/in/ramdev-lodhi-645278226" class="rounded-circle">
			<span class="fa fa-linkedin"></span>
		</a>&nbsp;
		<a href="https://youtube.com/@rsthakur8815" class="rounded-circle">
			<span class="fa fa-youtube"></span>
		</a>&nbsp;
		<a href="https://www.facebook.com/ramdevsingh.lodhi?mibextid=ZbWKwL" class="rounded-circle">
			<span class="fa fa-facebook"></span>
		</a>
	</p>
</div>


<script src="<?php echo base_url(); ?>js/classie.js"></script>
<script>
	var menuLeft = document.getElementById('cbp-spmenu-s1'),
		showLeftPush = document.getElementById('showLeftPush'),
		body = document.body;

	showLeftPush.onclick = function () {
		classie.toggle(this, 'active');
		classie.toggle(body, 'cbp-spmenu-push-toright');
		classie.toggle(menuLeft, 'cbp-spmenu-open');
		disableOther('showLeftPush');
	};

	function disableOther(button) {
		if (button !== 'showLeftPush') {
			classie.toggle(showLeftPush, 'disabled');
		}
	}
</script>
<!-- <script type="text/javascript">
	$(document).ready(function () {
		$('#Table').DataTable({

			'paging': true,

			'searching': true,

		});
	});
</script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- [/] bootstrap -->

<!--scrolling js-->
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.js"> </script>

<!--validator js-->
<script src="<?php echo base_url(); ?>js/validator.min.js"></script>
<!--//validator js-->
</body>

</html>