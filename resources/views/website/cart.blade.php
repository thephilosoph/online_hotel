@extends('website.layout.app')


@section('main-content')
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$global_page_data->cart_heading}}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row cart">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table class="table table-bordered table-cart">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Serial</th>
                                <th>Photo</th>
                                <th>Room Info</th>
                                <th>Price/Night</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Guests</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="" class="cart-delete-link" onclick="return confirm('Are you sure?');"><i class="fa fa-times"></i></a>
                                </td>
                                <td>1</td>
                                <td><img src="uploads/2.jpg"></td>
                                <td>
                                    <a href="room-detail.html" class="room-name">Regular Couple Bed</a>
                                </td>
                                <td>$30</td>
                                <td>05/07/2022</td>
                                <td>07/07/2022</td>
                                <td>
                                    Adult: 2<br>
                                    Children: 0
                                </td>
                                <td>$60</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="cart-delete-link" onclick="return confirm('Are you sure?');"><i class="fa fa-times"></i></a>
                                </td>
                                <td>2</td>
                                <td><img src="uploads/2.jpg"></td>
                                <td>
                                    <a href="room-detail.html" class="room-name">Regular Couple Bed</a>
                                </td>
                                <td>$30</td>
                                <td>05/07/2022</td>
                                <td>07/07/2022</td>
                                <td>
                                    Adult: 2<br>
                                    Children: 0
                                </td>
                                <td>$60</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="cart-delete-link" onclick="return confirm('Are you sure?');"><i class="fa fa-times"></i></a>
                                </td>
                                <td>3</td>
                                <td><img src="uploads/3.jpg"></td>
                                <td>
                                    <a href="room-detail.html" class="room-name">Delux Couple Bed</a>
                                </td>
                                <td>$40</td>
                                <td>10/07/2022</td>
                                <td>11/07/2022</td>
                                <td>
                                    Adult: 2<br>
                                    Children: 2
                                </td>
                                <td>$40</td>
                            </tr>
                            <tr>
                                <td colspan="8" class="tar">Total:</td>
                                <td>$160</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                       

                <div class="checkout mb_20">
                    <a href="checkout.html" class="btn btn-primary bg-website">Checkout</a>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection