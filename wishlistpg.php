<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "proj3");

if(isset($_POST["wishlisted"])){
    if(isset($_SESSION["wishlist"])){

        $item_array_id = array_column($_SESSION["wishlist"],"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
            $item_array = array(
                'item_id' => $_GET["id"],
                'address' => $_POST["address"],
                'price' => $_POST["price"],
                'bedrms' => $_POST["bedrm"],
                'bathrms' => $_POST["bathrm"],
                'sqft' => $_POST["sqft"],
            );
            $_SESSION["wishlist"] = $item_array;
        }
        else{
            echo'<script>alert("House already in Wishlist")</script>';
            echo'<script>window.location=dashboard.php</script>';
        }

    }
    else{
        $item_array = array(
            'item_id' => $_GET["id"],
            'address' => $_POST["address"],
            'price' => $_POST["price"],
            'bedrms' => $_POST["bedrm"],
            'bathrms' => $_POST["bathrm"],
            'sqft' => $_POST["sqft"],
        );
    }
    $_SESSION["wishlist"][0] =$item_array;
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["wishlist"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["wishlist"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="wishlistpg.php"</script>';
			}
		}
	}
}

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>estate. | WishList</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

    <style>
        .cart-wrap {
            padding: 40px 0;
            font-family: 'Open Sans', sans-serif;
        }

        .main-heading {
            font-size: 19px;
            margin-bottom: 20px;
        }

        .table-wishlist table {
            width: 100%;
        }

        .table-wishlist thead {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 5px;
        }

        .table-wishlist thead tr th {
            padding: 8px 0 18px;
            color: #484848;
            font-size: 15px;
            font-weight: 400;
        }

        .table-wishlist tr td {
            padding: 25px 0;
            vertical-align: middle;
        }

        .table-wishlist tr td .img-product {
            width: 72px;
            float: left;
            margin-left: 8px;
            margin-right: 31px;
            line-height: 63px;
        }

        .table-wishlist tr td .img-product img {
            width: 100%;
        }

        .table-wishlist tr td .name-product {
            font-size: 15px;
            color: #484848;
            padding-top: 8px;
            line-height: 24px;
            width: 50%;
        }

        .table-wishlist tr td.price {
            font-weight: 600;
        }

        .table-wishlist tr td .quanlity {
            position: relative;
        }

        .total {
            font-size: 24px;
            font-weight: 600;
            color: #8660e9;
        }

        .display-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .round-black-btn {
            border-radius: 25px;
            background: #212529;
            color: #fff;
            padding: 5px 20px;
            display: inline-block;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
            cursor: pointer;
            font-size: 14px;
        }

        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        .d-block {
            display: block;
        }

        .custom-form label {
            font-size: 14px;
            line-height: 14px;
        }

        .pretty.p-default {
            margin-bottom: 15px;
        }

        .pretty input:checked~.state.p-primary-o label:before,
        .pretty.p-toggle .state.p-primary-o label:before {
            border-color: #8660e9;
        }

        .pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
            background-color: #8660e9 !important;
        }

        .main-heading.border-b {
            border-bottom: solid 1px #ededed;
            padding-bottom: 15px;
            margin-bottom: 20px !important;
        }

        .custom-form .pretty .state label {
            padding-left: 6px;
        }

        .custom-form .pretty .state label:before {
            top: 1px;
        }

        .custom-form .pretty .state label:after {
            top: 1px;
        }

        .custom-form .form-control {
            font-size: 14px;
            height: 38px;
        }

        .custom-form .form-control:focus {
            box-shadow: none;
        }

        .custom-form textarea.form-control {
            height: auto;
        }

        .mt-40 {
            margin-top: 40px !important;
        }

        .in-stock-box {
            background: #ff0000;
            font-size: 12px;
            text-align: center;
            border-radius: 25px;
            padding: 4px 15px;
            display: inline-block;
            color: #fff;
        }

        .trash-icon {
            font-size: 20px;
            color: #212529;
        }
    </style>

</head>

<body>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <div class="cart-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading mb-10">My wishlist:</div>
                    <?php
                    $query = "SELECT * FROM listings ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row - mysqli_fetch_array($result)) {
                        }
                    ?>
                        <div class="col-md-4">
                            <form method="POST" action="index.php?action=add&id=<?php echo $row["id"]; ?>
                                <div style = " border: 1px solid #333;background-color:#f1f1f1;>
                                    <img src="<?php echo $row["img"];?>"/>
                                    <h4 class="text-info"><?php echo $row["address"]; ?></h4>
                        </div>
                        </form>
                </div>
            <?php
                    }
            ?>
            <div class="table-wishlist">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    
                        <tr>
                            <th width="45%">Address</th>
                            <th width="15%">Price</th>
                            <th width="15%">Bedrooms</th>
                            <th width="15%">Bathrooms</th>
                            <th width="10%">Square Footage</th>
                            <th width="10%">Action</th>
                        </tr>
                        <?php
                            if(!empty($_SESSION["wishlist"])){
                                foreach($_SESSION["wishlist"]as $keys => $values){
                                    
                                
                            
                                ?>
                                <tr>
                                    <td><?php echo $values["address"];?></td>
                                    <td><?php echo $values["price"];?></td>
                                    <td><?php echo $values["bedrms"];?></td>
                                    <td><?php echo $values["bathrms"];?></td>
                                    <td><?php echo $values["sqft"];?></td>
                                    <td><a href="index.php?action=delete&id=?php echo $values["item_id"]; ?>"><span class="">Remove</span></a></td>
                                </tr>
                            }
                            <?php
					}
                }
					?>
                        
                        ?>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>