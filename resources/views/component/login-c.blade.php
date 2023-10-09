 <link rel="stylesheet" href="{{ asset('css/login-c.css') }}">

 <div style="text-align: center">

     <h2 style="color: green" class="success-hide ">
         @if (isset($success) && $role == 1)
             You have Registered Successfully !!! <br> wait for Admin approval !!!
         @elseif (isset($success) && $role == 2)
             You have Registered Successfully !!! <br> Login to Continue !!!
         @endif
     </h2>

     <h2 style="color: red">
         @if (@Session()->has('failed'))
             {{ @Session()->get('failed') }}
         @endif
     </h2>
 </div>

 <div class="login-container">
     <h2>LOG IN</h2>
     <br>
     <hr>

     <p>Log In To Your Account</p>

     <form action="/login" method="POST">
         @csrf
         <input type="text" name="userName" placeholder=" Username"><br>
         <span style="color: red">
             @error('userName')
                 {{ $message }}
             @enderror
         </span>
         <input type="password" name="password" placeholder=" Password">

         <br>
         <span style="color: red">
             @error('password')
                 {{ $message }}
             @enderror
         </span>
         <button type="submit">Log in</button>
     </form>
     <a href="{{ url('/register') }}">SignUp ?</a>

 </div>


 <!-- <hr><br><br><br> -->
