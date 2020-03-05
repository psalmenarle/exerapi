<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
	<link rel="stylesheet" type="text/css" href="psalm/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<div class = "container">

	<div id="header">
				<div class="nav-menu">
				  <a href="index.php"> Home</a>
				  <a href="index.php?page=list" > Product List</a>
				  	<a href="index.php?page=categories">Product Categories</a>
						<a href="index.php?page=add"> Add Product</a>
					
				</div>
	</div>
	
	    <div class ="content">
				<?php
	 switch ($load) {
	 case 'list':
			 require_once('list.php');
				        break;
		case 'detail':
			 require_once('detail.php');
				        break;
		case 'categories':
			      require_once('categories.php');
			          break;
        case 'add':
        		require_once('add.php');
        			  break;
        case 'update':
            require_once('update.php');
                break;
		default:
					  require_once('home.php');
					      break;
				}
			?>
			 
		</div> 
	  
</div>