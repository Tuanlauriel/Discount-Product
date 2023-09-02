<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
        }

        .container {
            margin-top: 2rem;
            border: 5px solid #4e48f8;
            padding: 2rem;
        }

        .d-block {
            display: block;
        }

        .form-title {
            color: #4e48f8;
            margin-bottom: 1rem;
        }

        .form-control {
            margin: 10px 0;
            padding: 5px;
        }

        .ml-5 {
            margin-left: 1.5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="<?php ?>" method="post">
        <h1 class="form-title">Future Value Calculator</h1>
        <div style="display: flex; justify-content: start;">
            <div>
                <p class="d-block form-control">Investment Amount:</p>
                <p class="d-block form-control">Yearly Interest Rate:</p>
                <p class="d-block form-control">Number Of Years:</p>
                <p class="d-block form-control">Future Value:</p>
            </div>
            <div>
                <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $investment = $_POST['investment'];
                    $interest = $_POST['interest'];
                    $years = $_POST['years'];

                    if($investment > 0 and $interest > 0 and $years > 0) {
                        $investmentFormat = number_format($investment, 2, '.', ',');
                        echo "<p class='d-block form-control'>$$investmentFormat</p>";
                        echo "<p class='d-block form-control'>$interest%</p>";
                        echo "<p class='d-block form-control'>$years</p>";
                        $result = number_format($investment * pow(1 + $interest / 100, $years), 2, '.', '');
                        echo "<p class='d-block form-control'>$$result</p>";
                    }

                }
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>
