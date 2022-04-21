<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagsasanay V2</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container">
            <a href="" class="logo">
                <img src="https://picsum.photos/50" alt="">
            </a>
            <div class="links">
                <a href="#">About Us</a>
                <a href="#">Store</a>
                <a href="#">Inspiration</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="buttons-wrapper">
                <button><img src="https://picsum.photos/20" alt=""></button>
                <button><img src="https://picsum.photos/20" alt=""></button>
            </div>
        </div>
    </nav>

    <div id="app">
        <section class="hero">
            <div class="container">
                <div class="left">
                    <div class="social-wrapper">
                        <a href="#"><img src="https://picsum.photos/20" alt=""></a>
                        <a href="#"><img src="https://picsum.photos/20" alt=""></a>
                        <a href="#"><img src="https://picsum.photos/20" alt=""></a>
                    </div>
                    <div class="heading-texts">
                        <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                        <img src="https://picsum.photos/100" alt="">
                        <h3>Lorem.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illum maiores neque fugiat quaerat fuga omnis illo ut repudiandae architecto quis tenetur ea repellendus, ipsum, deleniti quisquam sed nulla voluptas. Ea magni qui ab debitis quas explicabo incidunt, laboriosam vel nostrum repudiandae provident dignissimos nisi repellat perferendis nihil cupiditate. Ducimus.</p>
                    </div>
                    <div class="buttons-wrapper">
                        <button>Discover</button>
                    </div>
                </div>
                <div class="right">
                    <div class="columns-wrapper">
                        @for($i = 0; $i < 3; $i++)
                            <div class="box">
                                <div class="real-box">
                                    <div class="background">
                                        <img src="https://picsum.photos/300" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>TITLE</h2>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>