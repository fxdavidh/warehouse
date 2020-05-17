
 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style/styles/index3.css">
    <meta charset="UTF-8">
    <meta name="viewvpoint" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="sec1">
        <div class="sec1-1">
            <div class="name">
                <p> Warehouse Management</p> 
            </div>
            <div class="home">     
                <a href="{{url('home')}}">
                    Back to home
                </a>
            </div>
            
        </div>
    </section>

    <section class="sec2">
        <div class="gede">
            <div class="hitam">
                <form action="{{ url('home/'.$item->id) }}" method= "POST">
                    @csrf
                    <h1 class="up1">
                    Add New Item
                    </h1>
                    <p>
                        New Item Name :
                    </p>
                        <div class="input">
                        <div>
                            <input type="text" class="input1" name="name" value="{{$item->name}}">
                        </div>
                        <div class="yey">
                            <p>
                                *max 500 characters
                            </p>
                        </div>
                    </div>
                    <p>
                        New Item Location :
                    </p>
                    <div class="input">
                        <div>
                            <input type="text" class="input1" name="location" value="{{$item->location}}">
                        </div>
                        <div class="yey">
                            <p>
                                *max 500 characters
                            </p>
                        </div>
                    </div>
                    <p>
                        New Item Quantity :
                    </p>
                    <div class="input">
                        <div>
                            <input type="text" class="input2" name="qty" value="{{$item->qty}}">
                        </div>
                        <div class="yey2">
                            <p>
                                *max 5000 Items
                            </p>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="button">Save</button>
                    </div>
                </form>
            </div>
                
            <div class="putih">
                <img class="img" src="/style/assets/gamber.png" alt="">
            </div>
        </div>
    </section>
</body>
</html>