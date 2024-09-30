<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puma</title>
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
                    If you purchase you will receive a 10% discount <br>
                    If you purchase 5,000 baht you will receive a 20% discount <br>
                    If you purchase 10,000 baht you will receive a 30% discount <br>
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
                            'name' => 'Speedcat OG Sneakers Unisex (PUMA Black-PUMA White)',
                            'img' => 'online_shoping/img_puma/1.PNG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_puma/',
                        ],
                        [
                            'id' => 2,
                            'name' => 'Speedcat OG Sneakers Unisex (For All Time Red-PUMA White)',
                            'img' => 'online_shoping/img_puma/2.PNG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_puma/',
                        ],
                        [
                            'id' => 3,
                            'name' => 'Palermo Vintage Black-Frosted Ivory-Gum',
                            'img' => 'online_shoping/img_puma/3.JPG',
                            'price' => 3500,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 4,
                            'name' => 'Palermo Lth Alpine Snow-Desert Dust-Gum',
                            'img' => 'online_shoping/img_puma/4.JPG',
                            'price' => 3500,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 5,
                            'name' => "Scuderia Ferrari Drift Cat Decima Motorsport Shoes Youth (PUMA Black-PUMA White-Asphalt)",
                            'img' => 'online_shoping/img_puma/5.PNG',
                            'price' => 2500,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Scuderia Ferrari Drift Cat Decima Motorsport Shoes Youth (Rosso Corsa-PUMA White-PUMA Black)',
                            'img' => 'online_shoping/img_puma/6.PNG',
                            'price' => 2500,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 7,
                            'name' => "MB.03 Kid Super Basketball Shoes",
                            'img' => 'online_shoping/img_puma/7.PNG',
                            'price' => 5600,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 8,
                            'name' => "MB.03 Be You Basketball Shoes",
                            'img' => 'online_shoping/img_puma/8.PNG',
                            'price' => 5600,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 9,
                            'name' => "All-Pro NITRO Basketball Shoes(Lime Squeeze-PUMA White)",
                            'img' => 'online_shoping/img_puma/9.PNG',
                            'price' => 5600,
                            'link' => 'online_shoping/img_puma2/',
                        ],
                        [
                            'id' => 10,
                            'name' => "PUMA X SPONGBOB Rider FV Sneakers (Carnation Pink-PUMA White)",
                            'img' => 'online_shoping/img_puma/10.PNG',
                            'price' => 4500,
                            'link' => 'online_shoping/img_puma2/',
                        ]
                        // Add more shoes as needed
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
                        echo '<input type="hidden" name="brand" value="puma">';
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
