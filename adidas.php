<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="adidas.css">

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
                    If you purchase 5,000 baht you will receive a 10% discount <br>
                    If you purchase 7,000 baht you will receive a 40% discount <br>
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
                            'name' => 'ADIDAS SAMBAE W CBLACK/FTWWHT/GOLDMT',
                            'img' => 'online_shoping/img_adidas/ADIDAS SAMBAE W CBLACK.JPG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas/',
                        ],
                        [
                            'id' => 2,
                            'name' => 'ADIDAS SAMBAE W FTWWHT/CBLACK/GOLDMT',
                            'img' => 'online_shoping/img_adidas/ADIDAS SAMBAE W FTWWHT.jpg',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas/',
                        ],
                        [
                            'id' => 3,
                            'name' => 'ADIDAS ADIFOM STAN MULE W LUCPNK/LUCPNK/CBLACK',
                            'img' => 'online_shoping/img_adidas/ADIDAS ADIFOM STAN MULE W.JPG',
                            'price' => 2500,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 4,
                            'name' => 'ADIDAS ADIFOM SUPERSTAR CORE BLACK/FTWWHT/CBLACK',
                            'img' => 'online_shoping/img_adidas/ADIDAS ADIFOM SUPERSTAR CORE BLACK.JPG',
                            'price' => 2800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 5,
                            'name' => "ADIDAS GAZELLE INDOOR 'OLYMPIC RED'",
                            'img' => "online_shoping/img_adidas/ADIDAS GAZELLE INDOOR 'OLYMPIC RED'.JPG",
                            'price' => 4300,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 6,
                            'name' => 'ADIDAS GAZELLE INDOOR CBLACK/ALMYEL/GUM2',
                            'img' => 'online_shoping/img_adidas/ADIDAS GAZELLE INDOOR GUM2.JPG',
                            'price' => 4300,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 7,
                            'name' => "ADIDAS HANDBALL SPEZIAL CBLACK/FTWWHT/GUM5",
                            'img' => 'online_shoping/img_adidas/ADIDAS HANDBALL SPEZIAL CBLACK.JPG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 8,
                            'name' => "ADIDAS SAMBA ADV FTWWHT/CBLACK/GUM5",
                            'img' => 'online_shoping/img_adidas/ADIDAS SAMBA ADV FTWWHT.JPG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 9,
                            'name' => "ADIDAS SAMBA OG BLACK",
                            'img' => 'online_shoping/img_adidas/ADIDAS SAMBA OG BLACK.JPG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 10,
                            'name' => "ADIDAS SAMBA OG FTWWHT/GREEN/SUPCOL",
                            'img' => 'online_shoping/img_adidas/ADIDAS SAMBA OG FTWWHT GREEN.JPG',
                            'price' => 3800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 11,
                            'name' => "ADIDAS SUPERSTAR ADV CBLACK/FTWWHT/GOLDMT",
                            'img' => 'online_shoping/img_adidas/ADIDAS SUPERSTAR ADV CBLACK.JPG',
                            'price' => 4000,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 12,
                            'name' => "ADIDAS SUPERSTAR FTWWHT/CBLACK/FTWWHT",
                            'img' => 'online_shoping/img_adidas/ADIDAS SUPERSTAR FTWWHT.JPG',
                            'price' => 4000,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
                        [
                            'id' => 13,
                            'name' => "ADIDAS SUPERSTAR CBLACKvv/YELLOW/CGREEN",
                            'img' => 'online_shoping/img_adidas/ADIDAS SUPERSTAR CBLACKvv.JPG',
                            'price' => 2800,
                            'link' => 'online_shoping/img_adidas2/',
                        ],
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
                        echo '<input type="hidden" name="brand" value="adidas">';
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
