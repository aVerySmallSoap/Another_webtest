<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/votingVerification.css">
    <title>Document</title>
</head>
<body>

    <div class="toast">
        <div class="toast-inner">
            <span class="toast-icon">I</span>
            <span class="toast-message">test</span>
            <button onclick="closeToast()" class="toast-close">X</button>
        </div>
    </div>

    <div id="container">
        <div class="title-container">
            <div id="title-style-layer">
                <span class="title">Age Verification</span>
            </div>
            <div id="inner-container">
                <form onsubmit="return sanitize()" method="post" id="main-form">
                    <div class="form-row">
                        <label for="age-field">Input age: </label>
                        <input type="text" name="age-input" size="30" id="age-input">
                        <div class="badge">
                            <span class="badge-danger">!</span>
                        </div>
                    </div>
                    <div class="form-row btn-row">
                        <button type="submit" class="btn btn-verify">Verify</button>
                        <button type="reset" class="btn btn-cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../JS/btn-exit.js"></script>
    <script src="../JS/ageValidation.js"></script>
    <script src="../JS/toast.js"></script>
</body>
</html>

<?php
    if(isset($_POST["age-input"])){
        echo "true with value";
    }
?>