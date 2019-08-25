@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>INVENTORY <small>product</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					
					<div class="table-responsive">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><button type="button" class="btn btn-def" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Product</button>
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
                    <form class="form-horizontal form-label-left" action="/product/create" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Item name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="item" type="text" class="form-control" placeholder="">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select unit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="unit">
                            <option>Each</option>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Price per unit (RM)</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input name="price_pr_unt" type="number" class="form-control" placeholder="" step="0.01" min="0" max="1000">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Shelf life</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input name="shlf_life" type="number" class="form-control" placeholder="" min="0" max="1000">
                        </div>
						<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control">
                            <option>Select unit</option>
                            <option>day</option>
                            <option>week</option>
                            <option>month</option>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lead time</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input type="number" class="form-control" placeholder="" min="0" max="1000" name="lead_time">
                        </div>
						<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control">
                            <option>Select unit</option>
                            <option>day</option>
                            <option>week</option>
                            <option>month</option>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Safety stock</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input type="number" class="form-control" placeholder="" min="0" max="10" name="sfty_stck">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Holding cost</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input type="number" class="form-control" placeholder="" step="0.01" min="0" max="10" name="hlding_cost">
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
                    <p class="text-muted font-13 m-b-30">
                      The list of products manufacture by this company.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Item</th>
                          <th>Current Stock</th>
						  <th>Safety Stock</th>
                          <th>Lead Time</th>
                          <th>Unit Cost (RM)</th>
                          <th>Shelf Life</th>
						  <th>Holding Cost</th>
                        </tr>
                      </thead>

                      @foreach($raw_mtrial as $)
                      <tbody>
                        <tr>
                          <td>3</td>
                          <td>HEN-D Chocolate flavour</td>
                          <td bgcolor="#D9534B" style="color:white;">19</td>
						  <td>20</td>
                          <td>2 weeks</td>
                          <td>16</td>
                          <td>2 years</td>
						  <td>0.01</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>HEN-D Original flavour</td>
                          <td>32</td>
						  <td>20</td>
                          <td>2 weeks</td>
                          <td>16</td>
                          <td>2 years</td>
						  <td>0.01</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   