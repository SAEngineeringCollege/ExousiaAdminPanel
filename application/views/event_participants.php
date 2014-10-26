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
?> Participating Attendees (<?php echo $count;?>)</h3></div>
<div class="col-md-6 " >
	<button id="btnExport" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-export"></span> Export to excel</button>
</div>
</div>
<table class="table table-hover tablesorter" id="table">
	<thead>
		<tr>
	<th>ID</th>
		<th>Name</th>
	<th>College</th>
	<th>Points</th>
			
	<th>Total Answers</th>
	<th>Time In</th>
	<th>Time Out</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach($participants as $participant): ?>
		
		<tr>
		<td><?php echo $participant->uid;?></td>
		
		<td><?php echo $participant->name;?></td>
		<td><?php echo $participant->college;?></td>	
		<td><?php echo $participant->tot_pts;?></td>
		
		<td><?php echo $participant->tot_ans;?></td>
		<td><?php echo $participant->time_in;?></td>
		<td><?php echo $participant->time_out;?></td>



		
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
