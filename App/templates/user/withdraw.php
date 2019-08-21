
<div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-10">
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
            <div class="" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]' id ="food-div" style="display:">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" >item</th>
                                <th scope="col"  >quantity</th>
                                <th scope="col"  >price(#)</th>
                                <th scope="col"  >total(#)</th>
                                <th scope="col"  >action</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="food-body" style="">
                            
                        </tbody>
                        <tfoot class="thead-light">
                        
                        <tr>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" id="total_money"></th>
                                <th scope="col"><button class="btn btn-outline-default" id="buy">Buy</button></th>
                        </tr>
                        </tfoot>
                    </table>
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
        


<script>
$(document).ready(() => {
  
  $("#buy").on("click", () => {
      set_all_total()
      let total_money = Number($("#total_money").html())
      if(total_money > 4500){
        $.notify("Food Items Selected is greater than your Balance <a href='/dashboard/quicksave'>Fund</a> Your wallet Now to buy more","warning")
      }else if(total_money <= 0){
        $.notify("No Food Item is Selected","warning")
      }else{
     
      swal({
          title: "Are you sure you want to proceed?",
          text: "",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, Proceed!",
          cancelButtonText: "No, I need to confirm!",
          closeOnConfirm: false,
          closeOnCancel: false
      },
    function(isConfirm) {
      if (isConfirm) {
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });

    // $.ajax({
    //   type: 'post',
    //   url: '',
    //   data:{}
    //   beforeSend: () => {

    //   },
    //   success: () => {

    //   }
    // })
      }
    })


  

  let increase = (id) => {
    let quantity = Number($("#" + id).html())
    let value_to_set = 0

    if(quantity == 0){
      quantity = 1
    }else{
      value_to_set = quantity + 1
    }
    $("#" + id).html(value_to_set)
    set_price("amount_"+id, value_to_set, "total_"+id)
    set_all_total()
   
  }

  let decrease = (id) => {
    let quantity = Number($("#" + id).html())
    let value_to_set = 0

    if(quantity <= 1){
      value_to_set = 1
    }else{
      value_to_set = quantity - 1
     
    }
    $('#' + id).html(value_to_set)
    set_price("amount_"+id, value_to_set, "total_"+id)
    set_all_total()
  }

  function set_price(amount,quantity,total){
      var price = Number($("#"+amount).html())
      var total_price = quantity * price
     $("#"+total).text(total_price)
    }

   

  $(document).on("click","#btn_increase",function(){
        var data_to_use = $(this).attr("data_to_use");
         increase(data_to_use)
      })

      $(document).on("click","#btn_decrease",function(){
        var data_to_use = $(this).attr("data_to_use");
         decrease(data_to_use);
      })

    
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


$(document).on('click', '#remove_yam, #remove_beans, #remove_garri, #remove_rice', function () {
  set_all_total()
        switch(event.target.id){
          case 'remove_yam':
            $('#table-yam').remove()
            break;
          case 'remove_beans':
            $('#table-beans').remove()
            break;
          case 'remove_garri':
            $('#table-garri').remove()
            break;
          case 'remove_rice':
            $('#table-rice').remove()
            break;
        }
    })

    function set_all_total() {
          var total_p = $(".total_price")
          var sum_total = 0
          $.each(total_p, function(){
              sum_total += Number($(this).text())
          })
          $("#total_money").text(sum_total)
      }

  $('#yam, #garri, #rice, #beans').on('click', () => {
     set_all_total()
    
      switch(event.target.id){
        case 'yam':
          if($('#table-yam').length){
            alert('Yam is added already')
          }else{
            var yam = '<tr id="table-yam"><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" src="../web/images/yam.jpg" id=""></a><div class="media-body"><span class="name mb-0 text-sm">Yam</span> </div></div></th> <td class="budget"><div class="btn-group"> <button type="button" class="btn btn-default" id="btn_decrease" data_to_use="yam_value"><i class="ni ni-fat-delete"></i></button> <button type="button" class="btn btn-default" data_to_use id="yam_value">1</button> <button type="button" class="btn btn-default" id="btn_increase" data_to_use="yam_value"><i class="ni ni-fat-add"></i></button> </div></td><td id="amount_yam_value">1000</td><td class="total_price" id="total_yam_value">1000</td><td><span class="badge badge-danger" id="remove_yam" title="Delete Yam">&#x2718;</span></td></tr>'
          $('#food-body').append(yam)
          }
          break;
        case 'rice':
          if($('#table-rice').length){
            alert('Rice is added already')
          }else{
            var rice = '<tr id="table-rice"><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" src="../web/images/rice.jpg" id=""></a><div class="media-body"><span class="name mb-0 text-sm">Rice</span> </div></div></th> <td class="budget"><div class="btn-group"> <button type="button" class="btn btn-default" id="btn_decrease" data_to_use="rice_value"><i class="ni ni-fat-delete"></i></button> <button type="button" class="btn btn-default" data_to_use id="rice_value">1</button> <button type="button" class="btn btn-default" id="btn_increase" data_to_use="rice_value"><i class="ni ni-fat-add"></i></button> </div></td><td id="amount_rice_value">1000</td><td class="total_price" id="total_rice_value">1000</td><td><span class="badge badge-danger" id="remove_rice" title="Delete Rice">&#x2718;</span></td></tr>'
            $('#food-body').append(rice)
          }
          break;
        case 'beans':
          if($('#table-beans').length){
            alert('Beans has been added already')
          }else{
            var beans = '<tr id="table-beans"><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" src="../web/images/beans.jpg" id=""></a><div class="media-body"><span class="name mb-0 text-sm">Beans</span> </div></div></th> <td class="budget"><div class="btn-group"> <button type="button" class="btn btn-default" id="btn_decrease" data_to_use="beans_value"><i class="ni ni-fat-delete"></i></button> <button type="sumbit" class="btn btn-default" data_to_use id="beans_value" value="">1</button> <button type="button" data_to_use="beans_value" class="btn btn-default" id="btn_increase"><i class="ni ni-fat-add"></i></button> </div></td><td id="amount_beans_value">1000</td><td class="total_price" id="total_beans_value">1000</td><td><span class="badge badge-danger" id="remove_beans" title="Delete Beans">&#x2718;</span></td></tr>'
          $('#food-body').append(beans)
          }
          break;
        case 'garri':
          if($('#table-garri').length){
            alert('Garri has been added already')
          }else{
            var garri = '<tr id="table-garri"><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" src="../web/images/garri.jpeg" id=""></a><div class="media-body"><span class="name mb-0 text-sm">Garri</span> </div></div></th> <td class="budget"><div class="btn-group"> <button type="button" class="btn btn-default" id="btn_decrease" data_to_use="garri_value"><i class="ni ni-fat-delete"></i></button> <button type="button" class="btn btn-default" data_to_use id="garri_value">1</button> <button type="button" class="btn btn-default" id="btn_increase" data_to_use="garri_value"><i class="ni ni-fat-add"></i></button> </div></td><td id="amount_garri_value">1000</td><td class="total_price" id="total_garri_value">1000</td><td><span class="badge badge-danger" id="remove_garri" title="Delete Garri">&#x2718;</span></td></tr>'
             $('#food-body').append(garri)
          }
          break;
        default:
          console.log('nothing')
      }

  })


  
</script>