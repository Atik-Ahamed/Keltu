<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?page=1"><img id="brand" alt="Brand" src="keltu.jpg"></a>
    </div>
	 <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-pills">
		    <?php 
		    $q="SELECT *FROM pages";
            $r=mysqli_query($dbc, $q);
            
		    ?>
        <li<?php
            if ($pageid == 1) {echo ' class="active"';
            }
			?> >
				<a href="?page=1">Home</a>
				</li>

				<li<?php
                if ($pageid == 2) {echo ' class="active"';
                }
				?> >
					<a href="?page=2">About Us</a>
					</li>

					<li<?php
                if ($pageid == 3) {echo ' class="active"';
                }
				?> >
						<a href="?page=3">Join Us</a>
					</li>
					<li<?php
                if ($pageid == 4) {echo ' class="active"';
                }
				?> >
						<a href="?page=4">Contributors</a>
					</li>
		</ul>
         </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>

