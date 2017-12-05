<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div><h1 style="text-align:center;">TAX INVOICE</h1></div>
<form action="" method="POST">
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sender">Sender</label>
                        <textarea class="form-control" rows="5" name="sender" id="sender"></textarea>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="invoiceno">Invoice No</label>
                        <input type="text" class="form-control" name="invoiceno" id="invoiceno">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="dated">Dated</label>
                        <input type="date" class="form-control" name="dated" id="dated">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="deliverynote">Delivery Note</label>
                        <input type="text" class="form-control" name="deliverynote" id="deliverynote">
                    </div>
                </div>
				<div class="clear"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="paymentmode">Mode/Terms of Payment</label>
                        <input type="text" class="form-control" name="paymentmode" id="paymentmode">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="supplierref">Supplier's Ref</label>
                        <input type="text" class="form-control" name="supplierref" id="supplierref">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="otherref">Other Reference(s)</label>
                        <input type="text" class="form-control" name="otherref" id="otherref">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="buyer">Buyer</label>
                        <textarea class="form-control" rows="5" name="buyer" id="buyer"></textarea>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="buyersorder">Buyer's Order No</label>
                        <input type="text" class="form-control" name="buyersorder" id="buyersorder">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="buyersdated">Dated</label>
                        <input type="text" class="form-control" name="buyersdated" id="buyersdated">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="despatchno">Despatch Document No</label>
                        <input type="text" class="form-control" name="despatchno" id="despatchno">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="deliverydate">Delivery Note Date</label>
                        <input type="text" class="form-control" name="deliverydate" id="deliverydate">
                    </div>
                </div>
				                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="despatchedthrough">Despatched through</label>
                        <input type="text" class="form-control" name="despatchedthrough" id="despatchedthrough">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" class="form-control" name="destination" id="destination">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="terms">Terms of delivery</label>
                        <textarea class="form-control" rows="3" name="terms" id="terms"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="slno" value="1" name="slno[]" placeholder="Sl No" readonly>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">

                        <input type="text" class="form-control" id="desc"  name="desc[]" placeholder="Description of Goods">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">

                        <input type="text" class="form-control" id="hsn" name="hsn[]" placeholder="HSN/SAC">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="qty" name="qty[]" placeholder="Quantity">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="rate" name="rate[]" placeholder="Rate">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="dynamic_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
				
  <div id="dym_fields">
          
        </div>
            </div>
			<div class="row">
			<div class="col-sm-10"></div>
			                <div class="col-sm-2">
							
                    <div class="form-group ">
<label for="total">Total (Rs)</label>
                        <input type="text" class="form-control" id="total" name="total" placeholder="Total">
                    </div>
                </div>
                </div>
				<div class="row">
				<div class="col-sm-10"></div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="tax">Tax (Rs)</label>
                        <input type="text" class="form-control" id="tax" name="tax" placeholder="Tax">
                    </div>
                </div>
			</div>
							<div class="row">
							<div class="col-sm-10"></div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="amount">Amount (Rs)</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Total + Tax">
                    </div>
                </div>
			</div>
			            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
					    <label for="sender">Amount Chargrable (in words)</label>
                        <textarea class="form-control" rows="2" name="amount" id="amount" placeholder="Amount Chargrable (in words)"></textarea>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-lg" name="submit" value="Print">
						
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>
</body>
<script>


var room = 1;
function dynamic_fields(){

room++;

var objTo = document.getElementById('dym_fields')
var divadd = document.createElement("div");
divadd.setAttribute("class","form-group removeclass"+room);
divadd.innerHTML = '<div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="slno" value='+room+' name="slno[]" placeholder="Sl No" readonly></div></div><div class="col-sm-5"><div class="form-group"><input type="text" class="form-control" id="desc"  name="desc[]" placeholder="Description of Goods"></div></div><div class="col-sm-2"><div class="form-group"><input type="text" class="form-control" id="hsn" name="hsn[]" placeholder="HSN/SAC"> </div></div><div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="qty" name="qty[]" placeholder="Quantity"></div></div><div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="rate" name="rate[]" placeholder="Rate"></div></div><div class="col-sm-2 "><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_dynamic_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
objTo.appendChild(divadd)
}
function remove_dynamic_fields(rid){
$('.removeclass'+rid).remove();}
</script>

</html>
<?php
if(isset($_POST['submit'])){
	foreach($_POST['desc'] as $key => $value){ echo $value;}
}
?>