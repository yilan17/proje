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
 									<h2 class="panel-title"><b>İŞLETİM SİSTEMLERİ</b></h2>
 									</header>
 									<div class="panel-body">
 										<div class="table-responsive">
 											<table class="table table-hover mb-none">
 												<thead>
 													<tr>
 														<th>#</th>
 														<th>İşletim Sistemi</th>
 														<th><a class="modal-with-form btn btn-primary" href="#modalForm"><i class="fa  glyphicon-plus"></i></a></th>
 													</tr>
                          <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                              <header class="panel-heading">
                                <h2 class="panel-title">İşletim Sistemi Ekle</h2>
                              </header>
                              <div class="panel-body">
                                <form id="demo-form" name="bilgisayarisletim" action="b_isletimsistemi_ekle_sonuc.php" method="post" class="form-horizontal mb-lg" novalidate="novalidate">
                                  <div class="form-group mt-lg">
                                    <label class="col-sm-3 control-label">İşletim Sistemi Adı </label>
                                    <div class="col-sm-9">
                                      <input type="text" name="ad" class="form-control" placeholder="İşletim Sistemi Yazınız..." required/>
                                    </div>
                                  </div>
                              </div>
                              <footer class="panel-footer">
                                <div class="row">
                                  <div class="col-md-12 text-right">
                                    <button class="btn btn-primary ">Ekle</button>
                                    <button class="btn btn-danger modal-dismiss">Vazgeç</button>
                                  </div>
                                </div>
                              </footer>
                            </form>
                            </section>
                          </div>
 												</thead>
 												<tbody>
                          <?php
                             $bilgisayar = $db->query("SELECT * FROM isletimsistemi", PDO::FETCH_ASSOC);
                             if ( $bilgisayar->rowCount() ){
                             foreach( $bilgisayar as $b_isletim ){
                          ?>

 													<tr>
 														<td><?php echo $b_isletim['id']; ?></td>
 														<td><?php echo $b_isletim['ad']; ?></td>
 											      <td><a href="b_isletimsistemi_sil_sonuc.php?id=<?php echo $b_isletim["id"]; ?>" class="delete-row"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>

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
