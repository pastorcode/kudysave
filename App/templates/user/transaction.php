<?php include('layout/header.php') ?>
<?php include('layout/nav.php') ?>
 <!-- Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Trasactions</h3>
              <p class="text-sm mb-0">
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                 <thead class="thead-light">
                  <tr>
                    <th>S/N</th>
                    <th>Amount(#)</th>
                    <th>Fiat Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>1</td>
                    <td>4945</td>
                    <td>0.001378217112701760</td>
                    <td><span class="badge badge-lg badge-success">Buy</span></td>
                    <td><span class="badge badge-lg badge-danger">Failed</span></td>
                    <td>2011/07/25 8:00am</td>
                    <td>
                        <button type="button" class="btn btn-facebook btn-icon-only" data-toggle="modal" data-target="#modal-default">
                            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                        </button>
                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body" style="color:black">
                          dnmkdnkin
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">Save changes</button>
                          <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                        <button type="button" class="btn btn-twitter btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                        </button>
                        <button type="button" class="btn btn-google-plus btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-trash"></i></span>
                        </button>
                    </td>
                  </tr>
                  <tr>

                    <td>2</td>
                    <td>4589</td>
                    <td>0.001378217112701760</td>
                    <td><span class="badge badge-lg badge-warning">Sell</span></td>
                    <td><span class="badge badge-lg badge-success">Sent</span></td>
                    <td>2011/07/25 3:00pm</td>
                    <td>
                        <button type="button" class="btn btn-facebook btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                        </button>
                        <button type="button" class="btn btn-twitter btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                        </button>
                        <button type="button" class="btn btn-google-plus btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-google-plus-g"></i></span>
                        </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

<?php include('layout/footer.php') ?>