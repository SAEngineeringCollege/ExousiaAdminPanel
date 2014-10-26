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


<div class="content-area-02">
<div class="row">
<div class="col-md-2">
<div class="list-group">

<?php 
if($event=='paper' or $event=='photo')
{
$this->load->view('sidebar2');
}
else
{
$this->load->view('sidebar');
}
?>
</div>
</div>
<div class="col-md-10">
	<div class="row">
<div class="col-md-6"><h3><?php 
if($event=='web')
echo 'Web Desigining ';
?>Attendee Registration (<?php echo $count;?>)</h3></div>
<div class="col-md-6 " >
	<button id="btnExport" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-export"></span> Export to excel</button>
</div>
</div>
<table class="table table-hover tablesorter" id="table">
	<thead>
		<tr>
	<th>ID</th>
		<th>Name</th>
	
	<th>Gender</th>
	<th>Email ID</th>
	<th>Phone Number</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach($registrations as $registration): ?>
		
		<tr>
		<td><?php echo $registration->id;?></td>
		
		<td><?php echo $registration->name;?></td>
			
		<td><?php echo $registration->gender;?></td>
		
		<td><?php echo $registration->email;?></td>
		
		<td><?php echo $registration->mobile;?></td>



		
		</tr>
	<?php endforeach ?>
	</tbody>
	</table>
</div>
</div>
</div>
</body>
<?php $this->load->view('scripts');?>
</html>
