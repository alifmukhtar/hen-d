@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CUSTOMER</h3>
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
                      <li><button type="button" class="btn btn-def" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Edit Customer</button>
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
                          <form class="form-horizontal form-label-left" action="/supplier/{{$customer->id}}/update" method="POST">
                            {{csrf_field()}}
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="name" type="text" class="form-control" placeholder="" value="{{$customer->name}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="address" type="text" class="form-control" placeholder="" value="{{$customer->address}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="phone" type="text" class="form-control" placeholder="" value="{{$customer->phone}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="email" type="text" class="form-control" placeholder="" value="{{$customer->email}}">
                            </div>
                          </div>
                        <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button type="button" class="btn btn-other">Cancel</button>
                              <button type="reset" class="btn btn-other">Reset</button>
                              <button type="submit" class="btn btn-def">Update</button>
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
                      The list of all supplier.
                    </p>
                    {{-- <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Phone No.</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      @foreach($supplier as $sp)
                      <tbody>
                        <tr>
                            <td>{{$sp->name}}</td>
                            <td>{{$sp->address}}</td>
                            <td>{{$sp->phone}}</td>
                            <td>{{$sp->email}}</td>
                            <td>{{$sp->status}}</td>
                            <td><a  href='/supplier/{{$sp->id}}/edit'> Edit</a></td>
                        </tr>
                        @endforeach
                      </tbody> --}}
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