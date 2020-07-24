<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mockup</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
                width: 100%;
                overflow-x: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #app h1, #app h2, #app h6 {
                color: #3b3b3b;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
            }

            #app h3 {
                color: #555555;
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
            }

            #app h4, #app h5 {
                color: #555555;
                font-family: 'Montserrat', sans-serif;
                font-weight: 300;
            }

            #app h3 {
                font-size: 24px;
            }

            #app p, #app li {
                color: #4e4e4e;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <head-component></head-component>
            <navigation-bar></navigation-bar>
            <content-component></content-component>
            <share-section></share-section>
            <footer-section></footer-section>
        </div>

        <script type="text/javascript" src="../js/app.js"></script>
    </body>
</html>
