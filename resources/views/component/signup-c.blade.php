<link rel="stylesheet" href="{{ asset('css/signup-c.css') }}">

<div class="signup-container">
    <h2 class="title">SIGN UP</h2>
    <hr>
    <form action="/register" method="POST">
        @csrf
        <div class="name-container input-container"> {{-- name start --}}
            <div class="f_name-container">
                <label for="f_name">First Name</label>
                <input type="text" id="f_name" name="firstName" required placeholder="First Name"
                    value="{{ old('firstName') }}">
            </div>

            <div class="l_name-container">
                <label for="l_name">Last Name</label>
                <input type="text" id="l_name" name="lastName" required placeholder="Last Name"
                    value="{{ old('lastName') }}">
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
                <input type="date" name="dob" id="dob" required value="{{ old('dob') }}">
            </div>
        </div> {{-- end gender --}}

        <div class="email-phone input-container"> {{-- email and phone --}}
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                <span style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div>
                <label for="phone">Phone number</label>
                <input type="tel" name="phone" required min="0" max="9" placeholder="Phone Number"
                    value="{{ old('phone') }}">
                <span style="color: red">
                    @error('phone')
                        {{ $message }}
                    @enderror
                </span>
            </div>

        </div> {{-- end email and phone --}}


        <div class="address input-container">
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" required placeholder="Address" value="{{ old('address') }}">
            </div>
        </div>

        <div class="input-container">
            <div>
                <label for="user-name">User Name</label>
                <input type="text" name="userName" required placeholder="User Name" value="{{ old('userName') }}">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="password">
            </div>

            <div>
                <label for="confirm-passwrod">Confirm Passwrod</label>
                <input type="password" name="confirmPassword" id="confirm-passwrod" required placeholder="password">
                <span style="color: red">
                    @if (isset($message))
                        {{ $message }}
                    @endif
                </span>
            </div><br>


        </div>
        <div>
            <label for="">Account Type</label>
            <select name="role" id="role">
                <option value="2">Customer</option>
                <option value="1">Seller</option>
            </select>
        </div>

        <div class="signup-submit-btn">
            <button>Submit</button>
        </div>

    </form>
</div>
