
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
       <div class="sec1-3">
            <p>Don't have an Account? <a href="register">Create an Account</a></p>
       </div>
    </section>
    <section class="sec2">
        <div class="sec2-1">
            <h1>Manage Your Warehouse</h1>
            <img src="/style/assets/gamber.png" alt="Gambar">
        </div>
        <div class="sec2-2">
            <div class="sec2-2-1">
               <h1 class="sec2-2-1-h1">Already have an Account?</h1>
               <h1 class="sec2-2-1-h2">Login here</h1> 
            </div>
            <div class="sec2-2-2">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <p>Username</p>
                    <input id="username" type="text" class="sec2-2-2-input @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    <p>Password</p>
                    <input name="password" type="password" class="sec2-2-2-input @error('password') is-invalid @enderror" id="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
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