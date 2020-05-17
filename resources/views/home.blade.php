<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="/style/styles/index5.css">
    <title>Document</title>
</head>
<body>
    <section class="sec1">
        <div class="sec1-1">
            <p>Warehouse Management</p>
        </div>
        <div class="sec1-1">
            <input type="text" placeholder="   Search here...">
        </div>
    </section>
    <section class="sec2">
        <div class="sec2-1">
            <div>
                <a href="" class="sec2-btn1">Search</a>
            </div>
            <div>
                <a href="{{url('home/create')}}" class="sec2-btn2">Add data</a>
            </div>            
        </div>
    </section>
    <section class="sec3">
        <table>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td><p>{{$item->name}}</p></td>
                <td><p>{{$item->location}}</p></td>
                <td><p>{{$item->qty}}</p></td>
              <td>
                <div class="sec3-last">
                  <div>
                    <a href="{{url('home/edit')}}" class="but1">Edit</a>
                  </div>
                  <div>
                    <a href="" class="but2">delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </table>
    </section>
    <section class="sec4">
        <button>1</button>
    </section>
</body>
</html>