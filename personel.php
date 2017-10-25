<?php
include "header.php";
include 'db.php';
 ?>
 <section role="main" class="content-body">
   <header class="page-header">
   </header>

   <!-- start: page -->

     <div class="row">
       <div class="col-md-12">
         <section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Personeller</h2>
							</header>
							<div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-md">
                      <a class="modal-with-form btn btn-primary" href="#modalForm">Ekle <i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                  <!-- Modal Form -->
                  <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                      <header class="panel-heading">
                        <h2 class="panel-title">Personel Ekle</h2>
                      </header>
                      <div class="panel-body">
                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                          <div class="form-group mt-lg">
                            <label class="col-sm-3 control-label">Ad</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" placeholder="Adınızı Yazınız..." required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Soyad</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" placeholder="Soyadınızı yazınız..." required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Birim </label>
                            <div class="col-md-9">
                              <select class="form-control" data-plugin-multiselect id="ms_example1">
                                <option value="" ></option>
                                <?php
                                $birimler = $db->query("SELECT * FROM birim", PDO::FETCH_ASSOC);
                                if ( $birimler->rowCount() ){
                                     foreach( $birimler as $birim ){
                                ?>
                                <option value="<?php echo $birim["id"];?>"><?php echo $birim["ad"];?></option>
                                <?php }
                                  }?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Kat </label>
                            <div class="col-md-9">
                              <select class="form-control" data-plugin-multiselect id="ms_example1">
                                <option value="cheese" selected></option>
                                <option value="tomatoes">1</option>
                                <option value="tomatoes">2</option>
                                <option value="tomatoes">3</option>
                                <option value="tomatoes">4</option>
                                <option value="tomatoes">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
    												<label class="col-md-3 control-label">Bilgisayar Tipi</label>
    												<div class="col-md-9">
    													<select class="form-control" data-plugin-multiselect id="ms_example1">
    														<option value=""></option>

    														<option value="tomatoes">Masaüstü</option>
                                <option value="tomatoes">Dizüstü</option>

    													</select>
    												</div>
    											</div>
                          <div class="form-group">
    												<label class="col-md-3 control-label">İşletim Sistemi</label>
    												<div class="col-md-9">
    													<select class="form-control" data-plugin-multiselect id="ms_example1">
                                <option value=""></option>
                                <?php
                                $isletimsistemi=$db->query("SELECT * FROM isletimsistemi",PDO::FETCH_ASSOC);
                                if($isletimsistemi->rowCount()){
                                    foreach ($isletimsistemi as $isletim) {

                                ?>
                                <option value="<?php echo $isletim["id"];?>"><?php echo $isletim["ad"];?></option>
                                <?php }
                                }?>
    													</select>
    												</div>
    											</div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">İşlemci</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" required/>
                            </div>
                          </div>
                          <div class="form-group mt-lg">
                            <label class="col-sm-3 control-label">Ram Kartı</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-md">
                                   <input type="text" name="name" class="form-control" required/>
                                   <span class="input-group-addon ">GB</span>
                               </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Ekran Kartı Modeli</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" required/>
                            </div>
                          </div>
                          <div class="form-group mt-lg">
                            <label class="col-sm-3 control-label">Ekran Kartı</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-md">
                                   <input type="text" name="name" class="form-control" required/>
                                   <span class="input-group-addon ">GB</span>
                               </div>
                            </div>
                          </div>
                          <div class="form-group mt-lg">
                            <label class="col-sm-3 control-label">Hard Disk</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-md">
														       <input type="text" name="name" class="form-control" required/>
														       <span class="input-group-addon ">GB</span>
													     </div>
                            </div>
                          </div>

                        </form>
                      </div>
                      <footer class="panel-footer">
                        <div class="row">
                          <div class="col-md-12 text-right">
                            <button class="btn btn-primary ">Ekle</button>
                            <button class="btn btn-danger modal-dismiss">Vazgeç</button>
                          </div>
                        </div>
                      </footer>
                    </section>
                  </div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
                      <th>#</th>
											<th>Ad</th>
											<th>Soyad</th>
											<th>Birim</th>
											<th>Actions</th>

										</tr>
									</thead>
									<tbody>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center hidden-phone">1.7</td>
                      <td class="actions-hover actions-fade" align="center">
										  	<a href=""><i class="fa fa-pencil"></i></a>
											  <a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
                    <tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center hidden-phone">1.7</td>
                      <td class="actions-hover actions-fade" align="center">
                        <a href=""><i class="fa fa-pencil"></i></a>
                        <a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
                      </td>
										</tr>
                    <tr class="gradeA">
											<td>dssdsdss</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center hidden-phone">1.7</td>
                      <td class="actions-hover actions-fade" align="center">
                        <a href=""><i class="fa fa-pencil"></i></a>
                        <a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
                      </td>
										</tr>
									</tbody>
								</table>
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
