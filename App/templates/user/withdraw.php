<?php include('layout/header.php') ?>
<?php include('layout/nav.php') ?>
<div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card card-pricing border-0 text-center mb-4">
            <div class="card-header bg-transparent">
              <h4 class="text-uppercase ls-1 py-3 mb-0">Withdraw</h4>
            </div>
            <div class="card-body px-lg-7">

              <div class="display-2">#4,500.00</div>
              <span class="">Balance</span><br><br>
              <ul class="nav nav nav-pills mb-1 nav-justified" id="chart-line-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="chart-line-component-tab" data-toggle="tab" href="#chart-line-component" role="tab" aria-controls="chart-line-component" aria-selected="true">Food Item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chart-line-html-tab" data-toggle="tab" href="#chart-line-html" role="tab" aria-controls="chart-line-html" aria-selected="false">Withdraw Money</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="chart-line-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="chart-line-component-tab">
              <div class="card">
                <div class="card-header">
                  <h5 class="h3 mb-0"><i class="ni ni-cart"></i> Food Item</h5>
                </div>
                <div class="card-body">
                <div class="card-group">
                    <div class="card">
                      <img class="card-img-top" src="../web/images/yam.jpg" height="80px" alt="Card image cap">
                      <div class="card-body">
                      <button type="button" class="btn btn-outline-default btn-sm" id="yam">+ Yam</button>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../web/images/rice.jpg" height="80px" alt="Card image cap">
                      <div class="card-body">
                      <button type="button" class="btn btn-outline-default btn-sm" id="rice">+ Rice</button>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"  src="../web/images/beans.jpg" height="80px" alt="Card image cap">
                      <div class="card-body">
                      <button type="button" class="btn btn-outline-default btn-sm" id="beans">+ Beans</button>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../web/images/garri.jpeg" height="80px" alt="Card image cap">
                      <div class="card-body">
                      <button type="button" class="btn btn-outline-default btn-sm" id="garri">+ Garri</button>
                      </div>
                    </div>
                  </div>
                 
                </div><br>
                <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]' id ="food-div" style="display:">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">item</th>
                                <th scope="col" class="sort" data-sort="budget">quantity</th>
                                <th scope="col" class="sort" data-sort="status">amount</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                          <img alt="Image placeholder" src="../web/assets/img/theme/bootstrap.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Yam</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $2500 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                      <i class="bg-warning"></i>
                                      <span class="status">pending</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                  </div>  
              </div>
            </div>
            <div id="chart-line-html" class="tab-pane tab-example-result fade show " role="tabpanel" aria-labelledby="chart-line-html-tab">
              <div class="card">
                <div class="card-header">
                  <h5 class="h3 mb-0"><i class="ni ni-money-coins"></i> Withdraw Money</h5>
                </div>
                <div class="card-body">
               
              <input type="number" class="form-control" id="withdraw_form" placeholder="enter amount to withdraw in naira...">
              <p class="text-danger text-left" id="error"></p><br>
               
             
              <button type="button" class="btn btn-outline-default mb-3" id="withdraw_btn" disabled>Withdraw</button>
                </div>
              </div>
            </div>
          </div>
             
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

    //$('#food-div').hide()

    $('#withdraw_btn').attr("disabled", true)



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


  $('#yam, #garri, #rice, #beans').on('click', () => {
     // console.log(event.target.id);
     // $('#food-div').append(event.target.id)
      switch(event.target.id){
        case 'yam':
          console.log('yes yam')
          break;
        case 'rice':
          console.log('yes rice')
          break;
        case 'beans':
          console.log('yes beans')
          break;
        case 'garri':
          console.log('yes garri')
          break;
        default:
          console.log('nothing')
      }

  })
</script>