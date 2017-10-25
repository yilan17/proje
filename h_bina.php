<?php
include "header.php";
include "db.php";
 ?>
 <section role="main" class="content-body">
   <header class="page-header">
   </header>

   <!-- start: page -->
     <div class="row">
       <div class="col-md-12">
 								<section class="panel">
 									<header class="panel-heading">
 									<h2 class="panel-title"><b>HİZMET BİNA KATLARI</b></h2>
 									</header>
 									<div class="panel-body">
 										<div class="table-responsive">
 											<table class="table table-hover mb-none">
 												<thead>
                          <tr>
 														<th>Kat No</th>
 														<th><a class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="KAT EKLE" href="h_bina_ekle_sonuc.php"><i class="fa  glyphicon-plus"></i></a></th>
 													</tr>
 												</thead>
 												<tbody>
 													<tr>
                            <?php
                               $bina = $db->query("SELECT * FROM hizmetbinasi", PDO::FETCH_ASSOC);
                               if ( $bina->rowCount() ){
                               foreach( $bina as $hbina ){
                            ?>
 														<td><?php echo $hbina['katid']; ?></td>
                            <?php
                            $kontrol = $db->query("SELECT * FROM hizmetbinasi ORDER BY katid DESC LIMIT 1 ")->fetch(PDO::FETCH_ASSOC);
                            if($hbina["katid"]!=$kontrol["katid"]){
                            ?>
 											      <td><button class="btn btn-danger" disabled><i class="fa fa-trash"></i></button></td>
                          <?php }else{ ?>
                             <td><a href="h_bina_sil_sonuc.php?id=<?php echo $hbina["id"]; ?>" class="delete-row"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                          <?php }?>
                          </tr>
                        <?php  } } ?>
 												</tbody>
 											</table>
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
