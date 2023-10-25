<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{Route::CurrentRouteName(). "  -  ". config('app.name')}}</title>
    @include('jscss')
</head>
<body>
    <div class="container">
        <div class="card container py-3">
            <div class="row">
                <div class="col-6"><a href="../hasOne">HasOne</a></div>
                <div class="col-6"><a href="../">HasMany</a></div>
            </div>
            @yield('main')

        </div>
    </div>
    
</body>
</html>