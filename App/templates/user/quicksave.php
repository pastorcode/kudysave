<?php include('layout/header.php') ?>
<?php include('layout/nav.php') ?>
<div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Ouick Save</h3>
                <p class="text-mute"> Instantly add extra funds into your savings using your card not connected to your KudySave account.</p>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form id="save_form">
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                          </div>
                          <input class="form-control" id="amount" placeholder="Amount to Save now" type="number" value="" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary btn-lg btn-block" id="save_btn"><i class="fas fa-credit-card"></i> Save now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<script src="https://js.paystack.co/v1/inline.js"></script>

<?php include('layout/footer.php') ?>
<script>
    $(document).ready(function(){
    
       $('#save_form').on('submit', (event) => {
            event.preventDefault()
            let amount = $('#amount').val()

            var handler = PaystackPop.setup({
                key: 'pk_test_385599d46660a7581d7759a057cfd23076bdfafc',
                email: 'danieloluboies@gmail.com',
                amount: amount,
                currency: "NGN",
               // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                    ]
                },
                callback: function(response){
                    alert('success. transaction ref is ' + response.reference);
                    console.log(response)
                },
                onClose: function(){
                    alert('Are you sure you want to close?');
                }
                });
                handler.openIframe();
                })

    })
</script>