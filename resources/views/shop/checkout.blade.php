@extends('layout.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4 offset-md-4 offset-md-3">
        <h1>Checkout</h1>
        <div id="mpesa-button-container" >
            <img src="https://abeon-hosting.com/images/mpesa-logo-png-2.png" data-toggle="modal" data-target="#mpesaModal" alt="MPESA" style="width:150px; height: 150px";>
        </div>
        <div class="modal fade" id="mpesaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Mpesa No.</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="07XXXXXXXX" size="10">
                                <hr>
                                <button type="button" class="btn btn-primary"> Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        style: {
            color:  'gold',
            shape:  'pill',
            label:  'pay',
            height: 40
        }

    }).render('#paypal-button-container');
</script>
@endsection



