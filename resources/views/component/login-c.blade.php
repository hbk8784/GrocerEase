 <link rel="stylesheet" href="{{ asset('css/login-c.css') }}">

 <div style="text-align: center">

     <h2 style="color: green" class="success-hide ">
         @if (isset($success) && $success)
             You have Registered Successfully !!!
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
         <input type="password" name="password" placeholder=" Password"><br>
         <button type="submit">Log in</button>
     </form>
     <a href="{{ url('/signup') }}">SignUp ?</a>

 </div>


 <!-- <hr><br><br><br> -->
