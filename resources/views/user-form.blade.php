<!-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<form action="userSubmit" method="post">
    <div>    
        <input type="text" name="username" placeholder="Enter Username"><br>
        <br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <div class="language">
            <h4>choose language</h4>
            <input type="checkbox" name="language[]" value="javascript" id="javascript"><label for="javascript">javascript</label><br>
            <input type="checkbox" name="language[]" value="php" id="php"><label for="php">php</label><br>
            <input type="checkbox" name="language[]" value="laravel" id="laravel"><label for="laravel">laravel</label><br>
        </div>
        <div class="gender">
            <h4>choose gender</h4>
            <input type="radio" value="male" name="gender" id="male"><label for="male">Male</label><br>
            <input type="radio" value="female" name="gender" id="female"><label for="female">Female</label><br>
            <input type="radio" value="other" name="gender" id="other"><label for="other">Other</label><br>
        </div>
        <div class="city">
            <h4>choose city</h4>
            <select name="city" id="city">
                <option value="newyork">New York</option>
                <option value="losangeles">Los Angeles</option>
                <option value="chicago">Chicago</option>
                <option value="houston">Houston</option>
            </select>
        </div>
        <br>
        <div>
            <label for="about">About You:</label><br>
            <textarea name="about" id="about" cols="30" rows="5" placeholder="Tell us about yourself..."></textarea>
        </div>
        <br>
        <div>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br>
        <input type="submit" value="Submit">
        @csrf
    </div>

</form>