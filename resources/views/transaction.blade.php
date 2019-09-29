@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>STOCK <small>inventory transaction</small></h3>
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
                      <li><button type="button" class="btn btn-def" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Stock In | Stock Out Transaction</button>
                      </li>
                    </ul>
                  </div>
				  {{-- <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Item name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="item" type="text" class="form-control" placeholder="">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="supplier" type="text" class="form-control" placeholder="">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select unit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="unit">
                            <option>Choose option</option>
                            <option>g</option>
                            <option>kg</option>
                            <option>l</option>
                            <option>ml</option>
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
                          <select name="" class="form-control">
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
                          <input name="lead_time" type="number" class="form-control" placeholder="" min="0" max="1000">
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
                          <input name="sfty_stck" type="number" class="form-control" placeholder="" min="0" max="10">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Holding cost</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <input name="hlding_cost" type="number" class="form-control" placeholder="" step="0.01" min="0" max="10">
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
                  </div> --}}
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Safety Quantity</th>
                          <th>Current Stock</th>
						              <th>Status</th>
						              <th>Action</th>
                        </tr>
                      </thead>

                      {{-- @foreach($raw_mtrial as $rm) --}}
                      <tbody>
                        <tr>
                          <td>High Protein Flour</td>
                          <td>10.00</td>
                          <td>0.00</td>
						              <td>Critical</td>
						              <td><a  href='/'> <i class="fa fa-edit"></i></a> 
                            <a  href='/'> <i class="fa fa-trash"></i></a>  
                            <a  href='/'> <i class="fa fa-info"></i></a></td>
                        </tr>
                        <tbody>
                            <tr>
                              <td>Wheat Flour</td>
                              <td>15.00</td>
                              <td>0.00</td>
                              <td>Critical</td>
                              <td><a  href='/'> <i class="fa fa-edit"></i></a> 
                                <a  href='/'> <i class="fa fa-trash"></i></a>  
                                <a  href='/'> <i class="fa fa-info"></i></a></td>
                            </tr>
                        {{-- @endforeach --}}
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