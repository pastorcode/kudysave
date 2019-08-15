<?php include('layout/header.php') ?>
<?php include('layout/nav.php') ?>
 <!-- Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Add User</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Firstname</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Firstname">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">Lastname</label>
                <input type="text" class="form-control" id="example3cols2Input" placeholder="Lastname">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Email</label>
                <input type="text" class="form-control" id="example3cols3Input" placeholder="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">DOB</label>
                <input type="text" class="form-control" id="example4cols1Input" placeholder="DOB">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols2Input">BVN</label>
                <input type="text" class="form-control" id="example4cols2Input" placeholder="BVN">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">Whatever</label>
                <input type="text" class="form-control" id="example4cols3Input" placeholder="Whatever">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example4cols3Input">Date</label>
                <input type="text" class="form-control" id="example4cols3Input" placeholder="Date">
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Add User</button>
          </div>
        </div>
      </div>

<?php include('layout/footer.php') ?>