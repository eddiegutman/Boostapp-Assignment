<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <title>חנות וירטואלית</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <h1 class="display-6 text-end">סל מוצרים</h1>
                <div>

                </div>
            </div>
            <div class="col-9">
                <h1 class="display-6 text-end">קופה</h1>
                <nav>
                    <ul class="nav nav-tabs justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/favorites">מועדפים</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">מוצרים</a>
                        </li>
                    </ul>
                </nav>
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
</body>

</html>
