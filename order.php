<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="order.css">

<body>
    <form action="info.php" method="post">

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="index.html" >
                    <img src="online_shoping/img/Layer 2 (1).png" alt="gerb club" style="height: 100px; width: 150px;">
                </a>
            </div>
        </nav>

        <!-- content -->
        <div class="columns is-full" style="column-gap: 30px;">
            <div class="column">
                <div class="column-left">
                    <?php

                    $shoes = [

                        "nike" =>[                        
                        1 => ['name' => 'Dunk Low Retro Black', 'price' => 3700],
                        2 => ['name' => 'Nike Dunk Low University Blue', 'price' => 3700],
                        3 => ['name' => 'SB Dunk Low Pro Chicago', 'price' => 3700],
                        4 => ['name' => 'Air Jordan 1 Low x Travis Scott Medium Olive', 'price' => 5700],
                        5 => ['name' => 'Air Jordan 1 Low Travis Scott x Fragment', 'price' => 5500],
                        6 => ['name' => 'Air Jordan 1 Low OG x Travis Scott Canary', 'price' => 5700],
                        7 => ['name' => "Nike Air Force 1 '07 White", 'price' => 3700],
                        8 => ['name' => "Nike Air Force 1 '07 Black", 'price' => 3700],
                        9 => ['name' => 'Nike Dunk High Black Rosewood Pure Platinum', 'price' => 4500],
                        ],

                        "converse" =>[                        
                        1 => ['name' => 'Converse Chuck Taylor All Star Canvas Black Low', 'price' => 2300],
                        2 => ['name' => 'Converse Chuck Taylor All Star Canvas White Low', 'price' => 2300],
                        3 => ['name' => 'Converse Chuck 70 Canvas Black', 'price' => 3000],
                        4 => ['name' => 'Converse Chuck 70 Canvas White', 'price' => 3000],
                        5 => ['name' => 'Converse Chuck 70 Black', 'price' => 2800],
                        6 => ['name' => 'Converse Chuck 70 White', 'price' => 2800],
                        7 => ['name' => "Converse El Distrito 2.0 Canvas", 'price' => 2000],
                        8 => ['name' => "Converse AS-1 Pro Black", 'price' => 3300],
                        9 => ['name' => 'Converse AS-1 Pro Obsidian White', 'price' => 3300],
                        10 => ['name' => 'Converse Run Star Hike Canvas Platform', 'price' => 3400]
                        ],

                        "adidas" =>[                        
                        1 => ['name' => 'ADIDAS SAMBAE W CBLACK/FTWWHT/GOLDMT', 'price' => 3800],
                        2 => ['name' => 'ADIDAS SAMBAE W FTWWHT/CBLACK/GOLDMT', 'price' => 3800],
                        3 => ['name' => 'ADIDAS ADIFOM STAN MULE W LUCPNK/LUCPNK/CBLACK', 'price' => 2500],
                        4 => ['name' => 'ADIDAS ADIFOM SUPERSTAR CORE BLACK/FTWWHT/CBLACK', 'price' => 2800],
                        5 => ['name' => "ADIDAS GAZELLE INDOOR 'OLYMPIC RED'", 'price' => 4300],
                        6 => ['name' => 'ADIDAS GAZELLE INDOOR CBLACK/ALMYEL/GUM2', 'price' => 4300],
                        7 => ['name' => "ADIDAS HANDBALL SPEZIAL CBLACK/FTWWHT/GUM5", 'price' => 3800],
                        8 => ['name' => "ADIDAS SAMBA ADV FTWWHT/CBLACK/GUM5", 'price' => 3800],
                        9 => ['name' => 'ADIDAS SAMBA OG BLACK', 'price' => 3800],
                        10 => ['name' => 'ADIDAS SAMBA OG FTWWHT/GREEN/SUPCOL', 'price' => 3800],
                        11 => ['name' => 'ADIDAS SUPERSTAR ADV CBLACK/FTWWHT/GOLDMT', 'price' => 4000],
                        12 => ['name' => 'ADIDAS SUPERSTAR FTWWHT/CBLACK/FTWWHT', 'price' => 4000],
                        13 => ['name' => 'ADIDAS SUPERSTAR CBLACKvv/YELLOW/CGREEN', 'price' => 2800]
                        ],

                        "puma" =>[          
                        1 => ['name' => 'Speedcat OG Sneakers Unisex (PUMA Black-PUMA White)', 'price' => 3800],
                        2 => ['name' => 'Speedcat OG Sneakers Unisex (For All Time Red-PUMA White)', 'price' => 3800],
                        3 => ['name' => 'Palermo Vintage Black-Frosted Ivory-Gum', 'price' => 3500],
                        4 => ['name' => 'Palermo Lth Alpine Snow-Desert Dust-Gum', 'price' => 3500],
                        5 => ['name' => "Scuderia Ferrari Drift Cat Decima Motorsport Shoes Youth (PUMA Black-PUMA White-Asphalt)", 'price' => 2500],
                        6 => ['name' => 'Scuderia Ferrari Drift Cat Decima Motorsport Shoes Youth (Rosso Corsa-PUMA White-PUMA Black)', 'price' => 2500],
                        7 => ['name' => "MB.03 Kid Super Basketball Shoes", 'price' => 5600],
                        8 => ['name' => "MB.03 Be You Basketball Shoes", 'price' => 5600],
                        9 => ['name' => 'All-Pro NITRO Basketball Shoes(Lime Squeeze-PUMA White)', 'price' => 5600],
                        10 => ['name' => 'PUMA X SPONGBOB Rider FV Sneakers (Carnation Pink-PUMA White)', 'price' => 4500],
                        ],

                        "vans" =>[                        
                        1 => ['name' => 'VANS Slip-On Reissue 98 LX HOUNDSTOOTH BLUSH', 'price' => 3590],
                        2 => ['name' => 'VANS X LIBERAIDERS LX Slip-On Reissue 98 BLUE/MARSHMALLOW', 'price' => 5500],
                        3 => ['name' => 'VANS Slip-On Reissue 98 LX CHECKERBOARD BLACK/OFF WHITE', 'price' => 3590],
                        4 => ['name' => 'VANS Slip-On Reissue 98 LX BMX Maroon/Pink', 'price' => 3290],
                        5 => ['name' => "VANS Authentic Reissue 44 LX CHECKERBOARD BLACK/OFF WHITE", 'price' => 3690],
                        6 => ['name' => 'VANS Authentic Reissue 44 LX BLACK/WHITE', 'price' => 3490],
                        7 => ['name' => "VANS LX Era Reissue 95 BMX DOUGLAS FIR", 'price' => 3290],
                        8 => ['name' => "VANS LX Era Reissue 95 BMX FOXGLOVE", 'price' => 3290],
                        9 => ['name' => 'VANS Old Skool 36 LX CHECKERBOARD BLACK/OFF WHITE', 'price' => 3890],
                        10 => ['name' => 'VANS OLD SKOOL 36 LX PIG SUEDE BARITONE BLUE', 'price' => 4190],
                        ]


                    ];

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $totalPrice = 0; 
                        $shoes_data = [];
                        if ($_POST['brand']== "nike"){
                            $shoes_data = $shoes["nike"];                        
                        }elseif ($_POST['brand']== "converse"){
                            $shoes_data = $shoes["converse"];                        
                        }elseif ($_POST['brand']== "adidas"){
                            $shoes_data = $shoes["adidas"];
                        }elseif ($_POST['brand']== "vans"){
                            $shoes_data = $shoes["vans"];
                        }elseif ($_POST['brand']== "puma"){
                            $shoes_data = $shoes["puma"];
                        }
                        echo "<h1>Your Order Summary:</h1>";

                        foreach ($_POST['purchase'] as $purchase) {
                            if (isset($purchase['selected'])) {
                                $id = $purchase['id'];
                                $quantity = $purchase['quantity'];
                                $size = $purchase['size'];

                                // Fetch the shoe details by ID
                                if (isset($shoes_data[$id])) {
                                    $shoeName = $shoes_data[$id]['name'];
                                    $shoePrice = $shoes_data[$id]['price'];

                                    // Calculate price for this shoe
                                    $subtotal = $shoePrice * $quantity;
                                    $totalPrice += $subtotal;

                                    // Fixing the discount logic
                                    if($_POST['brand']== "nike"){
                                        if ($totalPrice >= 7000) {
                                            $disc_totalPrice = $totalPrice * 0.2; // 20% discount
                                        } elseif ($totalPrice >= 5000) {
                                            $disc_totalPrice = $totalPrice * 0.1; // 10% discount
                                        } else {
                                            $disc_totalPrice = $totalPrice * 0.03; // 3% discount
                                        }
                                    }elseif($_POST['brand']== "converse"){
                                        if ($totalPrice >= 7000) {
                                            $disc_totalPrice = $totalPrice * 0.2; // 20% discount
                                        } elseif ($totalPrice >= 5000) {
                                            $disc_totalPrice = $totalPrice * 0.1; // 10% discount
                                        } else {
                                            $disc_totalPrice = $totalPrice * 0.03; // 3% discount
                                        }
                                    }elseif($_POST['brand']== "adidas"){
                                        if ($totalPrice >= 7000) {
                                            $disc_totalPrice = $totalPrice * 0.4; // 40% discount
                                        } elseif ($totalPrice >= 5000) {
                                            $disc_totalPrice = $totalPrice * 0.1; // 10% discount
                                        } else {
                                            $disc_totalPrice = $totalPrice * 0.03; // 3% discount
                                        }
                                    }elseif($_POST['brand']== "vans"){
                                        if ($totalPrice >= 7000) {
                                            $disc_totalPrice = $totalPrice * 0.5; // 50% discount
                                        } elseif ($totalPrice >= 5000) {
                                            $disc_totalPrice = $totalPrice * 0.2; // 20% discount
                                        } else {
                                            $disc_totalPrice = $totalPrice * 0.03; // 3% discount
                                        }
                                    }elseif ($_POST['brand']== "puma"){
                                        if ($totalPrice >= 10000) {
                                            $disc_totalPrice = $totalPrice * 0.3; // 30% discount
                                        } elseif ($totalPrice >= 5000) {
                                            $disc_totalPrice = $totalPrice * 0.2; // 20% discount
                                        } else {
                                            $disc_totalPrice = $totalPrice * 0.1; // 10% discount
                                        }
                                    }

                                    // Display shoe details
                                    echo "Product: $shoeName<br>";
                                    echo "Quantity: $quantity<br>";
                                    echo "Size: $size<br>";
                                    echo "Subtotal: ฿" . number_format($subtotal) . "<br><br>";
                                }
                            }
                        }

                                    // Display total price
                                    echo "<h3>Price before discount: ฿" . number_format($totalPrice) . "</h3>";
                                    echo "<h3>Discount: ฿" . number_format($disc_totalPrice) . "</h3>";
                                    echo "<h1>Total Price: ฿" . number_format($totalPrice - $disc_totalPrice) . "</h1>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="columns is-full" style="padding: 0rem 0rem 14rem;">
            <div class="column">
                <button class="button">
                    <a href="<?php echo  $_POST["brand"].".php"?>">Back</a>
                </button>
                <!-- Submit button for proceeding to payment -->
                <input type="submit" value="Payment" class="submit">
            </div>
        </div>

    </form>
</body>

</html>