<?php
	require_once("dbconnect.php");
	mysql_connect("localhost","root","");
	mysql_select_db("ols_db");
	$sql = "select * from ols_album";
	$res = mysql_query($sql);
?>






<!DOTYPE html>
<html lang="en">
<head>
<?php include('head2.php'); ?>
</head>
<script type="text/javascript" >
		 	jQuery(document).ready(function() {
				oTable = jQuery('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			}); 
		</script>
<style>
	body{
	background:#f4f2f2;
	}
</style>

<body>
<?php include ('navbartop.php'); ?>
	
<div class="container-fluid">
 <div class="row-fluid">
		<div class="span2">
			<div class="sidenavfixed">
				<ul class="nav nav-list" style="margin-top:40px;">
								<!--<li><img class="img-polaroid" src="images/avatar3.png"> </li> -->
									<li><a href="home.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
					<li><a href="research.php"><i class="icon-book icon-2x"></i> News Contents</a>                                     </li>
					<li><a href="profile.php"><i class="icon-group icon-2x"></i> Staff Profile</a></li>
								<!--		<li><a href="archive.php"><i class="icon-list-alt icon-2x"></i> Archive</a>                                    </li>-->
					<li class="active"><a href="announcement.php"><i class="icon-bullhorn icon-2x"></i> Announcements</a>                                    </li>
							<li><a href="admin.php"><i class="icon-user icon-2x"></i> Admin</a>                                    </li>
					<li></li>
                    
                    					<br><br><br><br><br><br><br><br><br><br>		
				
				
				</ul>  
			</div>
		</div>
		

	<div class="span10">
	<div class="header24">
					<!--	<img src="../images/chmsc3d.png"> -->
					<div class="subhead">
						<h1>HIMS NEPAL</h1>
						<p><strong><font style="font-size:23px;;">Online Public Access Catalog</font></strong><font style="color:#818181;"> for News and Events</font></p>
					</div>
			</div>
	<div class="rightcontainer">
	<div class="pagination " style="margin-top:1px;">
  <ul>

    <li> <a href="research.php"><i class="icon icon-arrow-left"></i> List of News and Programs </a></li>
    <li class="disabled"><a href="#"><i class="icon-plus-sign icon-large"></i> Add News/Program</a></li>
  </ul>
</div>



<div class="wrapper">
	<div class="content">
    <p><a href="album.php">Create Album</a></p>
    <p><a href="upload-album-image.php">Upload Image</a></p>
    <p><a href="view-albums.php">View Album Image</a></p>
	<p><a href="gallery/addgalleryimage.php">Add New Image</a></p>
	<form name="frmimage" method="post" action="confirm-image.php" enctype="multipart/form-data">
    
	Albumname: <select name="album">
				<option>select album</option>
    			<?php 
				while($data=mysql_fetch_assoc($res)) { ?>
                <option><?php echo $data['aname'];?></option>
				<?php } ?>
                </select>
    <br />Image: <input type="file" name="pict[]" multiple/><br />
	Caption: <input type="text" name="caption" /><br />
	<input type="submit" name="submit" value="upload" />
</form>


	</div>
	<div class="clear"></div>
</div>






</div>
</div>

</body>
<?php include('scripts.php');?>

</html>