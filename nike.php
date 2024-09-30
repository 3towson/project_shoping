<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="nike1.css">

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
                    If you purchase 7,000 baht you will receive a 20% discount <br>
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
                            'name' => 'Dunk Low Retro Black',
                            'img' => 'online_shoping/img_nike/dunk-low-black.jpg',
                            'price' => 3700,
                            'link' => 'online_shoping/img_nike/',
                        ],
                        [
                            'id' => 2,
                            'name' => 'Nike Dunk Low University Blue',
                            'img' => 'online_shoping/img_nike/dunk-low-university-blue.jpg',
                            'price' => 3700,
                            'link' => 'online_shoping/img_nike/',
                        ],
                        [
                            'id' => 3,
                            'name' => 'SB Dunk Low Pro Chicago',
                            'img' => 'online_shoping/img_nike/dunk-low-chicago.jpg',
                            'price' => 3700,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 4,
                            'name' => 'Air Jordan 1 Low x Travis Scott Medium Olive',
                            'img' => 'online_shoping/img_nike/air-jordan-1-low-x-travis-scott.jpg',
                            'price' => 5700,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 5,
                            'name' => 'Air Jordan 1 Low Travis Scott x Fragment',
                            'img' => 'online_shoping/img_nike/air-jordan-1-low-“travis-scott-x-fragment”.jpg',
                            'price' => 5500,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Air Jordan 1 Low OG x Travis Scott Canary',
                            'img' => 'online_shoping/img_nike/air-jordan-1-low-og-x-travis-scott-canary.jpg',
                            'price' => 5700,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 7,
                            'name' => "Nike Air Force 1 '07 White",
                            'img' => 'online_shoping/img_nike/AIR+FORCE+1+07.png',
                            'price' => 3700,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 8,
                            'name' => "Nike Air Force 1 '07 Black",
                            'img' => 'online_shoping/img_nike/AIR+FORCE+1+07black.png',
                            'price' => 3700,
                            'link' => 'online_shoping/img_nike2/',
                        ],
                        [
                            'id' => 9,
                            'name' => "Nike Dunk High Black Rosewood Pure Platinum",
                            'img' => 'online_shoping/img_nike/W+NIKE+DUNK+HIGH (1).png',
                            'price' => 4500,
                            'link' => 'online_shoping/img_nike2/',
                        ],
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
                        echo '<input type="hidden" name="brand" value="nike">';
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
