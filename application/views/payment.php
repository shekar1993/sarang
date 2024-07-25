
<script>
    function getSignature() {


        var formData = $('#payment-form').serialize();
        $.ajax({

            url: 'cashfree',
            type: 'POST',
            data: formData,
            dataType: 'text',
            success: function (data) {

                $('#signature').val(data);
                $('#submit_btn').click();
            },
            error: function (request, error) {
                alert("Request: " + error + JSON.stringify(request));
            }
        });
    }
</script>
<div class="container-fluid payment">
<div class="container">

    <div class="row equal justify-content-center align-items-center" style="background-color:white;">
        <div class="col-md-6 pl-2">
            <h4 class="page-title">Secure Checkout</h4>

            <br>

            <?php
            if ($this->session->flashdata('success')) {
                ?>
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p><?php echo $this->session->flashdata('success'); ?></p>
                </div>
            <?php } ?>
            <form role="form" action="https://test.cashfree.com/billpay/checkout/post/submit" method="post"
                  id="payment-form">

                <div class="form-group">

                    <input type="email" class="form-control" id="email" value="abc@gmail.com"
                           placeholder="Enter email" name="customerEmail">

                    <br/><input type="text" class="form-control"  name="orderId" value="order00001" placeholder="order id"/>

                    <br/><input type="text" class="form-control" name="orderNote" value="test" placeholder="order note"/>

                    <br/><input type="text" class="form-control" name="orderCurrency" value="INR" placeholder="order currency"/>

                    <br/><input type="number" class="form-control" name="customerPhone" value="9999999999" placeholder="customer phone"/>

                    <input type="hidden" class="form-control" name="returnUrl" value="http://localhost/sarang/index.php/welcome/checkout"/>

                    <input type="hidden" class="form-control" name="notifyUrl" value=""/>

                    <input type="hidden" class="form-control" name="appId" value="87497785a2b4f7338a1714889478"/>

                    <input type="hidden" class="form-control" name="signature" id="signature"/>


                    <br/><input type="text" class="form-control" id="crdname" placeholder="name on the card"
                                name="customerName" value="Test">

                    <br/q><input type="hidden" class="form-control" id="price" name="orderAmount" value="300">

                </div>



                <p>By placing this order you agree to the
                    <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Terms and conditions</a> </p>




                <button type="submit" class="btn btn-primary3 mb-2" id="submit_btn" style="display: none;">place order</button>

            </form>

            <button onclick="getSignature()" class="btn btn-primary3 mb-2" style="color: #fff;
                    background-color: #a03c85;
                    border-color: #a03c85;">place order</button>
        </div>

        <div class="col-md-6" Style= "background-color:#a03c85; color:white;padding:10px;">
            <div class ="container-fluid p-4">
                <table class="table"Style="color:white;" >
                    <tbody>
                        <tr>
                            <td style="border-top:0px;"><img src="<?php echo base_url('public/assets/images/product-images/guitar.png');?>" height="80"/></td >
                            <td style="border-top:0px;text-align: center;">
                                <p>1x Digital Oak Cheese</p>
                                <p>Guitar</p></td>
                            <td style="border-top:0px;">$34.95</td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="container-fluid p-4">
                <table class="table" Style="color:white;" id="printprice">
                    <tbody>
                        <tr>
                    <div class="form-group">
                        <br/><br/><input type="text" class="form-control" id="discount" placeholder="Have a discount ?" name="discount">
                    </div
                    <br/><br/></tr>
                    <tr id="">
                        <td style="border-top:0px;">Total Price:</td>
                        <td style="border-top:0px;">$34.95</td>

                    </tr>

                    <tr>
                        <td style="border-top:0px;">Vat 20%</td>
                        <td style="border-top:0px;">$12.95</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="container-fluid p-4">
                <br/>Helpline
                <br/>+31 88 000 008 [international]
                <br/>+1(650) 963-5707 [USA/Canada]
                <br/>[24/7 English phone support for online payment related issues ]
            </div>
        </div>
    </div>


</div>
</div>
