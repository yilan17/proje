<?php
include "header.php";
 ?>
				<section role="main" class="content-body">
					<header class="page-header">
					</header>

					<!-- start: page -->

						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title">HİZMET BİNASI</h2>
									</header>
									<div align="center" class="panel-body">
										<div class="col-md-12">
											<img src="assets/images/cati.png" data-toggle="tooltip" data-placement="left" title="ÇATI" />
										</div>
                    <?php

                       $kat = $db->query("SELECT * FROM hizmetbinasi ORDER BY katid DESC", PDO::FETCH_ASSOC);
                       if ( $kat->rowCount() ){
                       foreach( $kat as $katlar ){

                    ?>
										<div class="col-md-12">
											<a href="kat.php?id=<?php echo $katlar["katid"]; ?>"><img src="assets/images/<?php echo $katlar["resim"]; ?>" data-toggle="tooltip" data-placement="left" title="<?php echo $katlar["katid"]; ?>.Kat"/></a>
										</div>
                  <?php }}?>
										<div class="col-md-12">
											<a href="katbir.php"><img src="assets/images/katbir.png" data-toggle="tooltip" data-placement="left" title="1.Kat" /></a>
										</div>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>
		</section>
<?php
include "footer.php";
 ?>
