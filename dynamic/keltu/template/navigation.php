<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
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
	</div>
</nav><!---------END nav---------->
