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
                            <label class="col-sm-3 control-label">Birim</label>
                            <div class="col-sm-9">
                              <select data-plugin-selectTwo class="form-control populate">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                  <option value="AK">Alaska</option>
                                  <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                  <option value="CA">California</option>
                                  <option value="NV">Nevada</option>
                                  <option value="OR">Oregon</option>
                                  <option value="WA">Washington</option>
                                </optgroup>

                                <optgroup label="Central Time Zone">
                                  <option value="AL">Alabama</option>
                                  <option value="AR">Arkansas</option>

                                  <option value="TX">Texas</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                  <option value="CT">Connecticut</option>

                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WV">West Virginia</option>
                                </optgroup>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
    												<label class="col-md-3 control-label">Bilgisayar Tipi</label>
    												<div class="col-md-9">
    													<select class="form-control" data-plugin-multiselect id="ms_example1">
    														<option value="cheese" selected></option>
    														<option value="tomatoes">Masaüstü</option>
                                <option value="tomatoes">Dizüstü</option>

    													</select>
    												</div>
    											</div>
                          <div class="form-group">
    												<label class="col-md-3 control-label">İşletim Sistemi</label>
    												<div class="col-md-9">
    													<select class="form-control" data-plugin-multiselect id="ms_example1">
    														<option value="cheese" selected></option>
    														<option value="tomatoes">Windows Xp</option>
                                <option value="tomatoes">Windows 7</option>
                                <option value="tomatoes">Windows 8</option>
                                <option value="tomatoes">Windows 10</option>
    													</select>
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
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th class="hidden-phone">Engine version</th>
											<th class="hidden-phone">CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="center hidden-phone">4</td>
											<td class="center hidden-phone">X</td>
										</tr>
										<tr class="gradeC">
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
											<td>Win 95+</td>
											<td class="center hidden-phone">5</td>
											<td class="center hidden-phone">C</td>
										</tr>

										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center hidden-phone">1.7</td>
											<td class="center hidden-phone">A</td>
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
