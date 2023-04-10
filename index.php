<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Генератор QR кодів</title>
    <script src="/input.js"></script>
</head>
<body>
    <main>
        <section class="main">
            <div class="container main-container">
                <h1 class="main-header">Генератор QR</h1>
                <form action="generate.php" method="post">
                    <input class="input" type="text" name="input-text" placeholder="Вкажіть текст для QR">
                    <button class="button" type="submit">Згенерувати</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>