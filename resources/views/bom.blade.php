@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>BOM <small>Bill of Materials</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     <div class="col-md-6">
						<div class="dropdown">
						<button class="btn btn-def dropdown-toggle" type="button" data-toggle="dropdown">Product
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							  <li><a href="#">Original Flavour</a></li>
							  <li><a href="#">Chocolate Flavour</a></li>
							  <li><a href="#">Strawberry Flavour</a></li>
							  <li><a href="#">Vanilla Flavour</a></li>
							</ul>
							<h3>Chocolate Flavoured Snack Bar</h3>      
						</div>
					</div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus" ></i> </a> 
						<!-- <button type="button" class="btn btn-def" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i></button> -->
                      </li>
                      <li><a class="close-link"><i class="fa fa-trash-o"></i></a>
                      </li>
                    </ul>
                  </div>
				  
				  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select product</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control">
                            <option></option>
                            <option>Chocolate Flavour</option>
                            <option>Strawberry Flavour</option>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
							<table id="myTable" class=" table order-list">
								<thead>
									<tr>
										<td>Item</td>
										<td>Quantity</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-sm-4">
										  <select>
											<option></option>
											<option>Chocolate Flavour</option>
											<option>Strawberry Flavour</option>
										  </select>
										</td>
										<td class="col-sm-4">
											<input type="mail" name="mail"  class="form-control"/>
										</td>
									</tr>
								</tbody>
							</table>
								<div class="wrappers">
									<input type="button" class="btn btn-other" id="addrow" value="Add Row" />
								</div>
                      </div>
					  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-other">Cancel</button>
                          <button type="reset" class="btn btn-other">Reset</button>
                          <button type="submit" class="btn btn-def">Submit</button>
                        </div>
                      </div>

                    </form>

                      </div>
                    </div>
                  </div>
                      </li>
                    </ul>
				  
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
					<div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Item </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Unit </th>
                            <th class="column-title">Cost (RM) </th>
                            <th class="column-title">Default Supplier </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1</td>
                            <td class=" ">Flour </td>
                            <td class=" ">0.48 </td>
                            <td class=" ">kg</td>
                            <td class=" ">7.8</td>
                            <td class="a-right a-right ">Teping Sdn Bhd</td>
                            <td class=" last"><a href="#"><i class="fa fa-edit"></i> &nbsp <i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
						  <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1</td>
                            <td class=" ">Flour </td>
                            <td class=" ">0.48</td>
                            <td class=" ">kg</td>
                            <td class=" ">7.8</td>
                            <td class="a-right a-right ">Teping Sdn Bhd</td>
                            <td class=" last"><a href="#"><i class="fa fa-edit"></i> &nbsp <i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
					
					<div class="wrappers">
					 <button type="button" class="btn btn-other"><a href="manageProduction.html"><i class="fa fa-edit"></i> Production Time</a>
					 </button>
                  </div>
				  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        @endsection