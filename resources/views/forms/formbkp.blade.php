<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//www.fuelcdn.com/fuelux/3.4.0/css/fuelux.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css">
    

    <style type="text/css">
        #borderWizard {
            max-width: 700px;
            margin: 0 auto;
            margin-top: 70px;
        }
        .fuelux .wizard>.actions {
             position: relative; 
            background-color: #0000;
            border-left: none;
        }
    </style>


    @yield('head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    
<div class="fuelux">
    <div class="wizard" id="borderWizard">
        <ul class="steps">
            <li data-step="1" class="active"><span class="badge">1</span> General Information<span class="chevron"></span></li>
            <li data-step="2"><span class="badge">2</span> Dwelling Information<span class="chevron"></span></li>
            <li data-step="3"><span class="badge">3</span> Dwelling<span class="chevron"></span></li>
            <li data-step="4"><span class="badge">4</span> TV & Satellite<span class="chevron"></span></li>

        </ul>

        

        <form id="orderForm" method="post" class="form-horizontal">
            <div class="step-content">
                <!-- The first panel -->
                <div class="step-pane active" data-step="1">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Quantity</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="quantity" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Size</label>
                        <div class="col-xs-6">
                            <div class="checkbox">
                                <label><input type="checkbox" name="size[]" value="s" /> S</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="size[]" value="m" /> M</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="size[]" value="l" /> L</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="size[]" value="xl" /> XL</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Color</label>
                        <div class="col-xs-6">
                            <div class="checkbox">
                                <label><input type="checkbox" name="color[]" value="white" /> White</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="color[]" value="black" /> Black</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="color[]" value="red" /> Red</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="color[]" value="yellow" /> Yellow</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="color[]" value="green" /> Green</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The second panel -->
                <div class="step-pane" data-step="2">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full name</label>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="firstName" placeholder="First name" />
                        </div>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Phone number</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="cellPhone" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Street</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="street" placeholder="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Zipcode</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="zipCode" />
                        </div>
                    </div>
                </div>

                <div class="step-pane" data-step="3">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full name</label>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="firstName" placeholder="First name" />
                        </div>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Phone number</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="cellPhone" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Street</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="street" placeholder="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Zipcode</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="zipCode" />
                        </div>
                    </div>
                </div>

                <div class="step-pane" data-step="4">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Full name</label>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="firstName" placeholder="First name" />
                        </div>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Phone number</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="cellPhone" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Street</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="street" placeholder="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Zipcode</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="zipCode" />
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="actions">
            <button type="button" class="btn btn-default btn-prev"><span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
            <button type="button" class="btn btn-default btn-next" data-last="Order">Next<span class="glyphicon glyphicon-arrow-right"></span></button>
        </div>
    </div>
</div>

<div class="modal fade" id="thankModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Thank you</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Thank you for your order</p>
            </div>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="{{asset('dist/js/fuelux.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>
<script>
$(document).ready(function() {


    $('#borderWizard')
        // Call the wizard plugin
        .wizard();

        
});
</script>

</body>

</html>
