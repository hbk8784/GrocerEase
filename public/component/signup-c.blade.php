<link rel="stylesheet" href="{{ asset('css/signup-c.css') }}">

<div class="signup-container">
    <h2 class="title">SIGN UP</h2>
    <hr>
    <form action="">
        <div class="name-container input-container"> {{-- name start --}}
            <div class="f_name-container">
                <label for="f_name">First Name</label>
                <input type="text" id="f_name" required placeholder="First Name">
            </div>

            <div class="l_name-container">
                <label for="l_name">Last Name</label>
                <input type="text" id="l_name" required placeholder="Last Name">
            </div>
        </div> {{-- end name --}}

        {{-- gender start --}}
        <div class="gender-container input-container">
            <div>
                <p>Gender</p>
                <div class="radio-gender">
                    <label for="">Male</label>
                    <input type="radio" name="gender" value="male" required>
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="female" required>
                    <label for="">Others</label>
                    <input type="radio" name="gender" value="others" required>
                </div>
            </div>

            <div class="dob-container">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" required>
            </div>
        </div> {{-- end gender --}}

        <div class="email-phone input-container"> {{-- email and phone --}}
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="Email">
            </div>
            <div>
                <label for="phone">Phone number</label>
                <input type="tel" required min="0" max="9" placeholder="Phone Number">
            </div>
        </div> {{-- end email and phone --}}


        <div class="address input-container">
            <div>
                <label for="address">Address</label>
                <input type="text" required placeholder="Address">
            </div>
        </div>

        <div class="input-container">
            <div>
                <label for="user-name">User Name</label>
                <input type="text" required placeholder="User Name">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="password">
            </div>

            <div>
                <label for="confirm-passwrod">Confirm Passwrod</label>
                <input type="password" name="confirm-password" id="confirm-passwrod" required placeholder="password">
            </div>
        </div>
        <div class="signup-submit-btn">
            <button>Submit</button>
        </div>

    </form>
</div>
