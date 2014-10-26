<html>

<head>
<?php $this->load->view('header');?>
</head>




<body>
<?php $this->load->view('navbar');?>
<div class="content-area">
<ul class="nav nav-tabs" role="tablist">
<?php $this->load->view('navtabs');?>
  
</ul>
</div>

<div class="col-md-4"><h3>Attendee Registration (<?php echo $count;?>)</h3></div>
<div class="col-md-8 " >
	<button id="btnExport" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-export"></span> Export to excel</button>
</div>


<table class="table table-hover tablesorter" id="table">
	<thead>
		<tr>
	<th>ID</th>
		
		<th>Name</th>
	<th>College</th>
	<th>Department</th>
	<th>Year</th>
	<th>Gender</th>
	<th>Email ID</th>
	<th>Phone Number</th>
		<th>Status</th>
	<th>Date Registered</th>
<th>Options</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($registrations as $registration): ?>
		
		<tr>
		
		<td><?php echo "EX14".$registration->id;?></td>
			
		<td><?php echo $registration->name;?></td>
		
		<td><?php echo $registration->college;?></td>
		
		<td><?php echo $registration->department;?></td>
		
		<td><?php echo $registration->year;?></td>
		
		<td><?php echo $registration->gender;?></td>
		
		<td><?php echo $registration->email;?></td>
		
		<td><?php echo $registration->mobile;?></td>
		<td><?php echo $registration->status;?></td>
		<td><?php echo $registration->create_date;?></td>
<td><?php echo anchor('dash/wipeDelegate/'.$registration->id, 'Delete', 'title="Delete"'); ?></td>

		
		</tr>
	<?php endforeach ?>
	</tbody>
	</table>

</body>
<?php $this->load->view('scripts');?>
</html>
