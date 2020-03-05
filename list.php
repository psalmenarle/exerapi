<?php


if(isset($_POST['search'])){
	$search = $_POST['search'];
}
if(isset($search)){
	$json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$data = json_decode($json,true);
}
else {
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
	$data = json_decode($json,true);
}

$list = $data['records'];
?>


	
	
	    <div class ="content">
		
			<br><br>
				
					<form  class="search" method = "POST" action="index.php" style="margin:auto;max-width:300px">
						 	<input type="text"  placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>


			<br><br>

				<table align="center">
			<tr>
			  <th>Name</th>
			</tr>
			<?php
			  foreach($list as $result){
			?>
			<tr>
				<td id="links"> <a href="index.php?page=detail&id=<?php echo $result['id'];?>"><?php echo $result['name']; ?></a> </td>
			</tr>
			<?php
			  }
			?>
		  </table>
			 
		</div> 
	  
