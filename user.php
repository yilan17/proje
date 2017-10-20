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
								<h2 class="panel-title">Kullanıcılar</h2>
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
                        <h2 class="panel-title">Kullanıcı Ekle</h2>
                      </header>
                      <div class="panel-body">
                        <form id="demo-form" name="userekle" action="user_ekle_sonuc.php" method="post" class="form-horizontal mb-lg" novalidate="novalidate">
                          <div class="form-group mt-lg">
                            <label class="col-sm-3 control-label">Kullanıcı Adı</label>
                            <div class="col-sm-9">
                              <input type="text" name="ad" class="form-control" placeholder="Adınızı Yazınız..." required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Şifre</label>
                            <div class="col-sm-9">
                              <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi yazınız..." required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Yetki </label>
                            <div class="col-md-9">
                              <select name="yetki" class="form-control" data-plugin-multiselect id="ms_example1">
                                <option value="user" selected>User</option>
                                <option value="admin">Admin</option>
                              </select>
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
                    <?php


                       $user = $db->query("SELECT * FROM user", PDO::FETCH_ASSOC);
                       if ( $user->rowCount() ){
                       foreach( $user as $userlar ){



                     ?>
										<tr class="gradeA">
											<td><?php echo $userlar['id']; ?></td>
											<td><?php echo $userlar['ad']; ?></td>
											<td><?php echo $userlar["sifre"]; ?></td>
											<td><?php echo $userlar["yetki"]; ?></td>
                      <td class="actions-hover actions-fade" align="center">
                        <a class="modal-with-form" href="#user<?php echo $userlar["id"]; ?>"><i class="fa fa-pencil"></i></a>

                          <!-- Modal Form -->
                          <div id="user<?php echo $userlar["id"]; ?>" class="modal-block modal-block-primary mfp-hide">

                            <section class="panel">
                              <header class="panel-heading">
                                <h2 class="panel-title">Kullanıcı Güncelle</h2>
                              </header>
                              <div class="panel-body">
                                <form id="demo-form" name="userguncelle" action="user_guncelle_sonuc.php" method="post" class="form-horizontal mb-lg" novalidate="novalidate">
                                  <div class="form-group mt-lg">
                                    <label class="col-sm-3 control-label">Kullanıcı Adı</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="ad" class="form-control" placeholder="Adınızı Yazınız..." value="<?php echo $userlar["ad"]?>" required/>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Şifre</label>
                                    <div class="col-sm-9">
                                          <input type="hidden" name="id" class="form-control" value="<?php echo $userlar["id"]?>">
                                      <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi yazınız..." value="<?php echo $userlar["sifre"] ?>" required/>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Yetki </label>
                                    <div class="col-md-9">
                                      <select name="yetki" class="form-control" data-plugin-multiselect id="ms_example1">
                                        <option value="user"  <?php if ($userlar["yetki"]=="user"){ echo "selected";}?> >User</option>
                                        <option value="admin" <?php if ($userlar["yetki"]=="admin"){ echo "selected";}?> >Admin</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                              <footer class="panel-footer">
                                <div class="row">
                                  <div class="col-md-12 text-right">
                                    <button class="btn btn-primary ">Güncelle</button>
                                    <button class="btn btn-danger modal-dismiss">Vazgeç</button>
                                  </div>
                                </div>
                              </footer>
                            </form>
                            </section>

                          </div>

                        <a href="user_sil_sonuc.php?id=<?php echo $userlar["id"]; ?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
                  <?php  } } ?>
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
