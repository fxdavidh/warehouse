<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="/style/styles/index5.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
            <form action="{{url('/logout')}}" method="POST">
              @csrf
              <button type="submit">Logout</button>
            </form>
            <div>
                <a href="{{url('home/create')}}" class="sec2-btn2">Add data</a>
            </div>            
        </div>
    </section>
    <section class="sec3">
        <table>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Location</th>
              <th>Quantity</th>
              <th>Photos</th>
              <th>Action</th>
            </tr>
            @foreach($items as $item)
            <tr>
              <td><p>{{$item->id}}</p></td>
              <td><p>{{$item->name}}</p></td>
              <td><p>{{$item->location}}</p></td>
              <td><p>{{$item->qty}}</p></td>
              <td>
                <img src="storage/images/{{$item->image}}" style="width:100%" alt="NoImage">
              </td>
              <td>
                <div class="sec3-last">
                  <div>
                    <a href="{{url('home/'.$item->id.'/edit')}}" class="but1">Edit</a>
                  </div>
                  <div>
                    <form action="{{ url('home/'.$item->id) }}" method="POST">
                      @csrf
                      {{method_field('DELETE')}}
                      <button type='submit' class="but2">Delete</button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </table>
    </section>
    <section class="sec4">
       {{ $items->links("pagination::bootstrap-4") }}
    </section>
</body>
</html>