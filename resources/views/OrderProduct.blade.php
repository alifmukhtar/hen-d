@extends('index')
@section('contents')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ORDER <small>product</small></h3>
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
                      The list or customer order.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>order ID</th>
                          <th>Customer Name</th>
                          <th>Delivery Date</th>
                          <th>Deadline</th>
                          <th>Product Availibility</th>
                          <th>Production</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td><a href="invoicehend1.html">#007612</a></td>
                          <td>Ali bin Ahmad</td>
                          <td>25-Jan-19</td>
                          <td>23-Jan-19</td>
                          <td bgcolor="#27B796" style="color:white;">Ready</td>
						  <td bgcolor="#27B796" style="color:white;">Completed</td>
                        </tr>
                        <tr>
                          <td>#007332</td>
                          <td>Nur Aminah binti Khairul</td>
                          <td>28-Jan-19</td>
                          <td>25-Jan-19</td>
                          <td bgcolor="#D9534B" style="color:white;">No Stock</td>
						  <td bgcolor="#ed9f5a" style="color:white;">Pending</td>
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