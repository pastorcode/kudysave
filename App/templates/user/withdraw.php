<?php include('layout/header.php') ?>
<?php include('layout/nav.php') ?>
<div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card card-pricing bg-gradient-success border-0 text-center mb-4">
            <div class="card-header bg-transparent">
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Whitdraw</h4>
            </div>
            <div class="card-body px-lg-7">
              <div class="display-2 text-white">#4,500.00</div>
              <span class=" text-white">Balance</span>
              <ul class="list-unstyled my-4">

            

              <select class="form-control" id="withdraw_option">
              <option value="">--Select Option to withdraw--</option>
                  <optgroup label="Food Item">
                    <option value="1">Rice</option>
                    <option value="2">Yam</option>
                    <option value="2">Beans</option>
                    <option value="2">Garri</option>
                  </optgroup>
                  <optgroup label="Money">
                    <option value="1">Money</option>
                  </optgroup>
              </select><br>
               
              <input type="number" class="form-control" id="withdraw_form" placeholder="enter amount to withdraw in naira...">
            <b>  <b class="text-danger text-left" id="error"></b></b>
               
              </ul>
              <button type="button" class="btn btn-outline-default mb-3" id="withdraw_btn" disabled>Withdraw</button>
            </div>
            <div class="card-footer bg-transparent">
              <a href="#!" class=" text-white"></a>
            </div>
          </div>
          </div>
        </div>
        </div>

<?php include('layout/footer.php') ?>

<script>
$(document).ready(() => {

    $('#withdraw_btn').attr("disabled", true)
    $('#withdraw_form').prop("disabled", true)

$('#withdraw_option').bind("change keyup", () => {
    $('#withdraw_form').prop("disabled", false)
    let option = $('#withdraw_option').val()
    if(option == ""){
        $('#withdraw_form').prop("disabled", true)

    }
})


    $('#withdraw_form').on('input', () => {
        $('#error').text("")
        let amount = $('#withdraw_form').val()
        if(amount == 4500){
            $('#withdraw_btn').attr("disabled", true)
            $('#error').text("You can't withdraw all the money in your wallet.")
        }else if(amount == ''){
            $('#withdraw_btn').attr("disabled", true)
            $('#error').text("")
        }else if(amount > 4500){
            $('#withdraw_btn').attr("disabled", true)
            $('#error').text("You can't withdraw more than the amount you have.")
        }else if(amount < 4500 && amount > 0){
            $('#withdraw_btn').attr("disabled", false)
        }
    })
})
</script>