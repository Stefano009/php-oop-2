<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- all my links -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-oop-2</title>
    <?php require_once ('./classes/require.php') ?>
</head>
<body>
 <div id="root" class="wrapper">
    <header>
        <nav>
            <div class="logo">
            <h2>FAKE</h2>
            <img id="logo" src="./img/logo.png" alt="fakezon">
            </div>
            <div class="user">
                <h2>
                    Username
                </h2>
                <i class="fas fa-shopping-cart"></i>
            </div>
        </nav>
        <div class="jumbo">
            <h2>
                Il pacco da giù ora in offerta! </br> 30€ più spese di spedizione
             </h2>
        </div>
    </header>
    <main>
        <div class="card">

        </div>
    </main>
    <footer>

    </footer>
 </div>
<!-- calling my js file -->
<script src="./js/main.js"></script>
</body>
</html>