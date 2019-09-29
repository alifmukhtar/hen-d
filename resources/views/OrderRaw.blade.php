@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>INVENTORY <small>raw material</small></h3>
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
                            <li><button type="button" class="btn btn-def" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Order Raw Material</button>
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
                            <form class="form-horizontal form-label-left" action="/create" method="POST">
                              {{csrf_field()}}
                    <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Item</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select class="form-control" name="unit">
                                    <option>Choose option</option>
                                    <option>Wheat Flour</option>
                                    <option>High Protein Flour</option>
                                    <option>Fibre</option>
                                    <option>Vitamin</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Supplier</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="unit">
                                      <option>Choose option</option>
                                      <option> </option>
                                    </select>
                                  </div>
                                </div>
                    <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity</label>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                  <input name="sfty_stck" type="number" class="form-control" placeholder="" min="0" max="10">
                                </div>
                              </div>
                    <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Expected Receive</label>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                  <input name="hlding_cost" type="text" class="form-control">
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
                      The list of ordered raw materials from different kind of supplier.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Default Supplier</th>
                          <th>Expected Received</th>
                          <th>Status</th>
						  <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>12393</td>
                          <td>HGJ Sdn Bhd</td>
                          <td>22-04-19</td>
						  <td bgcolor="#ed9f5a" style="color:white;">Pending</td>
						  <td><select>
                            <option></option>
                            <option>Received</option>
                            <option>Delayed</option>
                          </select>
                        </tr> 
                        <tr>
                          <td>22324</td>
                          <td>HSAS Sdn Bhd</td>
                          <td>02-04-19</td>
						  <td bgcolor="#27B796" style="color:white;">Delivered</td>
						  <td><select>
                            <option></option>
                            <option>Received</option>
                            <option>Delayed</option>
                          </select>
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
        <!-- /page content -->

        @endsection