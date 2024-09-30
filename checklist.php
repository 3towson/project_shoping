<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="checklist.css">

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="index.html" >
                <img src="online_shoping/img/Layer 2 (1).png" alt="gerb club" style="height: 100px; width: 150px;">
            </a>
        </div>
    </nav>

    <div class="columns is-full" style="column-gap: 30px;">
        <div class="column">
            <div class="column-left">
                <?php
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $add = $_POST["address"];
                    $number = $_POST["number"];
                    $code = $_POST["code"];
                    $payment = $_POST["payment"];

                    // เรียกใช้ฟังก์ชันตรวจสอบข้อมูล
                    $check_number = checknumber($number);
                    $check_code = checkcode($code);
                    $check_payment = checkpayment($payment);

                    function checkpayment($payment){
                        if ($payment == "Cash"){
                            return $payment;
                        }elseif ($payment == "Qr Code"){
                            return $payment;
                        }elseif ($payment == "Credit Card"){
                            return $payment;
                        }else {
                            return 0;
                        }
                    }

                    function checkEmailDomain($email, $domain) {
                        // ตรวจสอบว่าโดเมนอยู่ในอีเมลหรือไม่
                        return strpos($email, $domain) !== false;
                    }

                    function checknumber($num) {
                        // ตรวจสอบเบอร์โทรว่ามีความยาว 10 ตัวอักษรหรือไม่
                        return (strlen($num) == 10) ? 1 : 0;
                    }

                    function checkcode($code) {
                        // ตรวจสอบว่ารหัสมีความยาวมากกว่า 5 ตัวอักษรหรือไม่
                        return (strlen($code) > 5) ? 1 : 0;
                    }

                    // ตรวจสอบว่าอีเมลมีโดเมนที่ถูกต้องหรือไม่
                    $isGmail = checkEmailDomain($email, "@gmail.com");
                    $isHotmail = checkEmailDomain($email, "@hotmail.com");
                    $isCmu = checkEmailDomain($email, "@cmu.ac.th");

                    // Flag to track if there are any errors
                    $hasErrors = false;

                    // แสดงข้อความเตือนถ้าข้อมูลไม่ถูกต้อง
                    if (!$isGmail && !$isHotmail && !$isCmu && $check_number == 0 && $check_code == 0) {
                        echo "<p style='color: red;'>Check Your Email. It should be @gmail.com, @hotmail.com, or @cmu.ac.th</p>";
                        echo "<p style='color: red;'>Check your Number. It should be 10 digits long.</p>";
                        echo "<p style='color: red;'>Check your Code. It should be more than 5 characters.</p>";
                        $hasErrors = true;
                    } elseif (!$isGmail && !$isHotmail && !$isCmu && $check_number == 0) {
                        echo "<p style='color: red;'>Check Your Email. It should be @gmail.com, @hotmail.com, or @cmu.ac.th</p>";
                        echo "<p style='color: red;'>Check Your Number. It should be 10 digits long.</p>";
                        $hasErrors = true;
                    } elseif (!$isGmail && !$isHotmail && !$isCmu && $check_code == 0) {
                        echo "<p style='color: red;'>Check Your Email. It should be @gmail.com, @hotmail.com, or @cmu.ac.th</p>";
                        echo "<p style='color: red;'>Check Your Code. It should be more than 5 characters.</p>";
                        $hasErrors = true;
                    } elseif ($check_code == 0 && $check_number == 0) {
                        echo "<p style='color: red;'>Check Your Number. It should be 10 digits long.</p>";
                        echo "<p style='color: red;'>Check Your Code. It should be more than 5 characters.</p>";
                        $hasErrors = true;
                    } elseif (!$isGmail && !$isHotmail && !$isCmu) {
                        echo "<p style='color: red;'>Check Your Email. It should be @gmail.com, @hotmail.com, or @cmu.ac.th</p>";
                        $hasErrors = true;
                    } elseif ($check_number == 0) {
                        echo "<p style='color: red;'>Check Your Number. It should be 10 digits long.</p>";
                        $hasErrors = true;
                    } elseif ($check_code == 0) {
                        echo "<p style='color: red;'>Check Your Code. It should be more than 5 characters.</p>";
                        $hasErrors = true;
                    } elseif ($check_payment == 0){
                        echo "<p style='color: red;'>Check Your Payment. It should be one of the accepted methods.</p>";
                        $hasErrors = true;
                    } else {
                        // Display the summary if no errors
                        echo "<h1 >Summary</h1>";
                        echo "<table align='center'>";
                        echo "<tr><td>Name  :  </td><td>" .$name . "</td><tr>";
                        echo "<tr><td>Email  :  </td><td> " .$email . "</td><tr>";
                        echo "<tr><td>Address  :  </td><td> " .$add. "</td><tr>";
                        echo "<tr><td>Number  :  </td><td> " .$number. "</td><tr>";
                        echo "<tr><td>Code  :  </td><td> " .$code. "</td><tr>";
                        echo "<tr><td>Payment :  </td><td> " .$payment. "</td><tr></table>";
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="columns is-full" style="padding: 0rem 0rem 22em;">
        <div class="column">
            <?php if ($hasErrors): ?>
                <button class="button" onclick="window.location.href='info.php';">
                    Try Again
                </button>
            <?php else: ?>
                <button class="button">
                    <a href="index.html">Back To Menu</a>
                </button>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
