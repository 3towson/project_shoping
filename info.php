<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
<link rel="stylesheet" href="info.css">

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="index.html" >
                <img src="online_shoping/img/Layer 2 (1).png" alt="gerb club" style="height: 100px; width: 150px;">
            </a>
        </div>
    </nav>

    <!-- content -->
    <form action="checklist.php" method="post">
        <div class="columns is-full" style="column-gap: 30px;">
            <div class="column">
                <div class="column-left">
                    <!-- Your Information -->
                    <h1 align="center">Your Information</h1>
                    <br>
                    <p align="center">
                        Name : <input type="text" name="name" required><br><br>
                        Email : <input type="text" name="email" required><br><br>
                        Address : <input type="text" name="address" required><br><br>
                        Phone Number : <input type="text" name="number" required><br><br>
                        Code : <input type="text" name="code"><br><br>
                        Payment :
                        <select name="payment">
                            <option value="Cash">Cash</option>
                            <option value="Qr Code">Qr Code</option>
                            <option value="Credit Card">Credit Card</option>
                        </select>
                    </p>

                </div>
            </div>
        </div>

        <div class="columns is-full" style="padding: 0rem 0rem 14rem;">
            <div class="column">
                <!-- ปุ่ม submit -->
                <input type="submit" value="Next" class="submit">
            </div>
        </div>
    </form>
</body>

</html>