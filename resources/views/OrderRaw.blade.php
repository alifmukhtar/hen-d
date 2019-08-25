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