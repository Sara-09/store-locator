<?php
  require_once 'view/header.php';
?>

<!--store content-->
   <div class="container-fluid frame">
        <div class="container">
          <div class="row">
						<?php foreach ($stores as $store) : ?>
            <!--jubilee hills -->
            <div class="col-sm-6" >
              <h1 class="jubilee"><?php echo htmlentities($store->name); ?></h1>
              <p class="road-1"><?php echo htmlentities($store->street); ?>, <?php echo htmlentities($store->name); ?>,<br>
                                <?php echo htmlentities($store->city); ?>,<?php echo htmlentities($store->state); ?>-<?php echo htmlentities($store->pin); ?>.<br>
                                Phone: <?php echo htmlentities($store->phone); ?><br>

                                <?php echo htmlentities($store->open_time); ?> - <?php echo htmlentities($store->close_time); ?> (Monday to Sunday)
                             </p>
            <?php
            $mymap = "map";
            $myid =  htmlentities($store->id);
            $map_id = $mymap.$myid;
            ?>
          
            <div class="map" id="<?php echo $map_id; ?>"></div>
              <script>
              var <?php echo $map_id; ?> = L.map('<?php echo $map_id; ?>').setView([<?php echo htmlentities($store->latitude); ?>, <?php echo htmlentities($store->longitude); ?>],17);
              L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Bmeigy3LL2S3wxmjyGQm', {
              attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
              }).addTo(<?php echo $map_id; ?>);
              var marker = L.marker([<?php echo htmlentities($store->latitude); ?>, <?php echo htmlentities($store->longitude); ?>]).addTo(<?php echo $map_id; ?>);
              </script>

          </div>

							<?php endforeach; ?>
          </div>

          </div>
      </div>

<!--pagination-->
		
			<table id="myTable" class="table-responsive">
				<tr>
						<td colspan="7" align="center">
								<div class="pagination-wrap">

									<?php


									 $rows = new StoresController();
									 $total = $rows->listRowCount();
									 $total_no_pages = ceil($total/$record_per_page);
									 if($total > 0) {

			             ?>
									 <ul class="pagination justify-content-center">
									 <?php

									 $current_page = 1;
									 if(isset($_GET["page"]))  {

									 $current_page = isset($_GET["page"]);
								 		}
									 if($current_page!=1)
									 { 
										 $prev = $current_page-1;
										 ?>
										 <li><a href="index2.php?filter=<?php echo $filter ?>&page=1 ;?&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">First</a></li>
										 <li><a href="index2.php?filter=<?php echo $filter ?>&page=<?php echo $prev ;?>&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">Prev</a></li>


                     

										 <?php

									 }



									 for($i=1;$i<=$total_no_pages;$i++)
									 {
										 if($i==$current_page)
										 {

											 ?>

											 <li><a href="index2.php?filter=<?php echo $filter ?>&page=<?php echo $i ; ?>&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>"><?php echo $i  ?></a></li>

											 <?php
										 }
										 else {
											 ?>
											 <li><a href="index2.php?filter=<?php echo $filter ?>&page=<?php echo $i ; ?>&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>"><?php echo $i  ?></a></li>
											 <?php
										 }
									 }

									 if($current_page!=$total_no_pages)
									 {
										 $next = $current_page+1;
										 ?>
										 <li><a href="index2.php?filter=<?php echo $filter ?>&page=<?php echo $next; ?>&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">Next</a></li>
										 <li><a href="index2.php?filter=<?php echo $filter ?>&page=<?php echo $total_no_pages; ?>&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">Last</a></li>

										 <?php

									 }

									 ?>

									 </ul>
									 <?php

								 }
								  ?>


								</div>
						</td>

				</tr>
			</table>
      <?php
  require_once 'view/footer.php';
?>
