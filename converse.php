<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converse</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="converse.css">

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
                            'name' => 'Converse Chuck Taylor All Star Canvas Black Low',
                            'img' => 'online_shoping/img_converse/Converse Chuck Taylor All Star Canvas Black Low.png',
                            'price' => 2300,
                            'link' => 'online_shoping/img_converse/',
                        ],
                        [
                            'id' => 2,
                            'name' => 'Converse Chuck Taylor All Star Canvas White Low',
                            'img' => 'online_shoping/img_converse/Converse Chuck Taylor All Star Canvas White Low.png',
                            'price' => 2300,
                            'link' => 'online_shoping/img_converse/',
                        ],
                        [
                            'id' => 3,
                            'name' => 'Converse Chuck 70 Canvas Black',
                            'img' => 'online_shoping/img_converse/Converse Chuck 70 Canvas Black.png',
                            'price' => 3000,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 4,
                            'name' => 'Converse Chuck 70 Canvas White',
                            'img' => 'online_shoping/img_converse/Converse Chuck 70 Canvas White.png',
                            'price' => 3000,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 5,
                            'name' => 'Converse Chuck 70 Black',
                            'img' => 'online_shoping/img_converse/Converse Chuck 70 Black.png',
                            'price' => 2800,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Converse Chuck 70 White',
                            'img' => 'online_shoping/img_converse/Converse Chuck 70 White.png',
                            'price' => 2800 ,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 7,
                            'name' => "Converse El Distrito 2.0 Canvas",
                            'img' => 'online_shoping/img_converse/Converse El Distrito 2.0 Canvas.png',
                            'price' => 2000,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 8,
                            'name' => "Converse AS-1 Pro Black",
                            'img' => 'online_shoping/img_converse/Converse AS-1 Pro Black.png',
                            'price' => 3300,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 9,
                            'name' => "Converse AS-1 Pro Obsidian White",
                            'img' => 'online_shoping/img_converse/Converse AS-1 Pro Obsidian White.png',
                            'price' => 3300,
                            'link' => 'online_shoping/img_converse2/',
                        ],
                        [
                            'id' => 10,
                            'name' => "Converse Run Star Hike Canvas Platform",
                            'img' => 'online_shoping/img_converse/Converse Run Star Hike Canvas Platform.png',
                            'price' => 3400,
                            'link' => 'online_shoping/img_converse2/',
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
                        echo '<input type="hidden" name="brand" value="converse">';
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
                <div class="columns is-multiline is-8">
                    <button class="button" >
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
