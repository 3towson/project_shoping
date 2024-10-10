<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vans</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="vans.css">

<body>
    <form action="order.php" method="post">

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="index.html" >
                    <img src="online_shoping/img/Layer 2 (1).png" alt="gerb club" style="height: 100px; width: 150px;">
                </a>
            </div>
        </nav>

        <div class="columns is-full" style="padding: 2rem 0rem 0rem; text-align: center;" >
            <div class="column">
                <p>Promotions <br>
                    If you purchase you will receive a 3% discount <br>
                    If you purchase 5,000 baht you will receive a 20% discount <br>
                    If you purchase 7,000 baht you will receive a 50% discount <br>
                </p>
            </div>
        </div>

        <div class="columns is-full">
            <div class="column">

                <div class="columns is-multiline" style="row-gap:50px ">
                    <?php
                    // Array to hold shoe data
                    $shoes = [
                        [
                            'id' => 1,
                            'name' => 'VANS Slip-On Reissue 98 LX HOUNDSTOOTH BLUSH',
                            'img' => 'online_shoping/img_vans/1.JPG',
                            'price' =>  3590,
                            'link' => 'online_shoping/img_vans/',
                        ],
                        [
                            'id' => 2,
                            'name' => 'VANS X LIBERAIDERS LX Slip-On Reissue 98 BLUE/MARSHMALLOW',
                            'img' => 'online_shoping/img_vans/2.JPG',
                            'price' => 5500,
                            'link' => 'online_shoping/img_vans/',
                        ],
                        [
                            'id' => 3,
                            'name' => 'VANS Slip-On Reissue 98 LX CHECKERBOARD BLACK/OFF WHITE',
                            'img' => 'online_shoping/img_vans/3.JPG',
                            'price' => 3590,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 4,
                            'name' => 'VANS Slip-On Reissue 98 LX BMX Maroon/Pink',
                            'img' => 'online_shoping/img_vans/4.JPG',
                            'price' => 3290,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 5,
                            'name' => 'VANS Authentic Reissue 44 LX CHECKERBOARD BLACK/OFF WHITE',
                            'img' => 'online_shoping/img_vans/5.JPG',
                            'price' => 3690,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 6,
                            'name' => 'VANS Authentic Reissue 44 LX BLACK/WHITE',
                            'img' => 'online_shoping/img_vans/6.JPG',
                            'price' => 3490,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 7,
                            'name' => "VANS LX Era Reissue 95 BMX DOUGLAS FIR",
                            'img' => 'online_shoping/img_vans/7.JPG',
                            'price' => 3290,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 8,
                            'name' => "VANS LX Era Reissue 95 BMX FOXGLOVE",
                            'img' => 'online_shoping/img_vans/8.JPG',
                            'price' => 3290,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 9,
                            'name' => "VANS Old Skool 36 LX CHECKERBOARD BLACK/OFF WHITE",
                            'img' => 'online_shoping/img_vans/9.JPG',
                            'price' => 3890,
                            'link' => 'online_shoping/img_vans2/',
                        ],
                        [
                            'id' => 10,
                            'name' => "VANS OLD SKOOL 36 LX PIG SUEDE BARITONE BLUE",
                            'img' => 'online_shoping/img_vans/10.JPG',
                            'price' => 4190,
                            'link' => 'online_shoping/img_vans2/',
                        ]
                    ];

                    // Loop through shoes array and generate HTML
                    foreach ($shoes as $shoe) {
                        echo '<div class="column is-one-third">';
                        echo '<div class="nike">';
                        echo '<img src="' . $shoe['img'] . '" alt="Nike">';
                        echo '</div>';
                        echo '<p>';
                        echo $shoe['name'] . '<br>';
                        echo '฿'.number_format($shoe['price']) . '<br>';

                        // Hidden input to send the product ID
                        echo '<input type="hidden" name="brand" value="vans">';
                        echo '<input type="hidden" name="purchase[' . $shoe['id'] . '][id]" value="' . $shoe['id'] . '">';

                        echo '<input type="checkbox" name="purchase[' . $shoe['id'] . '][selected]" min="1">';
                        echo 'Quantity <input type="number" name="purchase[' . $shoe['id'] . '][quantity]" min="1" style="width: 50px;">';
                        echo ' Size <input type="number" name="purchase[' . $shoe['id'] . '][size]" min="39" max="47" style="width: 50px;">';
                        echo '<br>';
                        echo '<a href="' . $shoe['link'] . '">Read More</a>';
                        echo '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="columns is-full" style="padding: 0 11.5rem 4rem;">
            <div class="column">
                <div class="columns is-multiline">
                    <button class="button">
                        <a href="index.html">Back</a>
                    </button>
                    <!-- ปุ่ม submit -->
                    <input type="submit" value="Next" class="submit">
                </div>
            </div>
        </div>
    </form>
</body>

</html>
