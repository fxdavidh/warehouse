<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="/style/styles/index.css">
    <link rel="stylesheet" href="index.js">
</head>
<body>
    <section class="sec1">
        <div class="sec1-1">
            <h1>Warehouse Management</h1>
        </div>
        <div class="sec1-2">
            <p\>Username</p>
            <input type="text" placeholder="Username*" >
        </div>
        <div class="sec1-3">
            <p\>Password</p>
            <input type="password" placeholder="Password*" class="sec-1-3-input" id="myInput">
            <button onclick="myFunction()" id="MyInput">Show password</button>
        </div>
        <div class="sec1-4">
            <a href="">Log in</a>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2-1">
            <h1>Manage Your Warehouse</h1>
            <img src="/style/assets/gamber.png" alt="Gambar">
        </div>
        <div class="sec2-2">
            <div class="sec2-2-1">
               <h1 class="sec2-2-1-h1">Don't have an account?</h1>
               <h1 class="sec2-2-1-h2">Join Now</h1> 
            </div>
            <div class="sec2-2-2">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf    
                <div>
                    <p>Username</p>
                    <!-- <input type="text" placeholder="Username*" class="sec2-2-2-input" name="username" > -->
                    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus >
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    <p>Date of birth</p>
                    <!-- <input type="number" min="1" max="31" placeholder="Date" class="sec2-2-2-inputlain">
                    <input type="month" class="month"> -->
                    <input name="dob" type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault11" placeholder="Date of Birth" required>
                    <p>Password</p>
                    <div class="last">
                        <div>
                            <!-- <input type="password" class="sec2-2-2-i" placeholder="Password*" id="myinput"> -->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div>
                            <input type="checkbox" onclick="myfunction()" class="cek">
                        </div>
                    </div>
                    <p>Confirm Password</p>
                    <div class="last">
                        <div>
                            <!-- <input type="password" class="sec2-2-2-i" placeholder="Confirm Password*" id="Myinput"> -->
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div>
                            <input type="checkbox" onclick="Myfunction()" class="cek">
                        </div>
                    </div>               
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="sec3">
      <div class="sec3-1">
        <div>
          <h1>Language</h1>
        </div>
        <div>
          <a>English</a>
        </div>
        <div>
          <a href="index2.html">Indonesian</a>
        </div>
        <div>
          <p> Copyright by &copy; warehouse<p>
        </div>
      </div>
    </section>
</body>
<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      var y = document.getElementById("MyInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      if (y.textContent === "Show password") {
        y.textContent = "Don't Show";
      } else {
        y.textContent = "Show password";
      }  
    }

    function myfunction() {
      var x = document.getElementById("myinput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    function Myfunction() {
      var x = document.getElementById("Myinput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>
</html>