<div>
    <h2>Add New User</h2>

    <!-- 
    To show the error message if user leave any required field empty.
    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    
    2nd Methid is in the below code
    <span style = "color:red">@error(''){{$message}}@enderror</span>
    -->

    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type= "text" placeholder = "Please enter your name" name = "userName" class="textBox"/>
            <span style = "color:red">@error('userName'){{$message}}@enderror</span>
            <br><br>
            <input type= "text" placeholder = "Please enter your email" name = "email" class="textBox"/>
            <span style = "color:red">@error('email'){{$message}}@enderror</span>
            <br><br>
            <input type= "text" placeholder = "Please enter your city" name = "city" class="textBox"/>
            <span style = "color:red">@error('city'){{$message}}@enderror</span>
            <br><br>
        </div>

        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" value= "php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value= "js" id="Js">
            <label for="Js">Js</label>
            <input type="checkbox" name="skill[]" value= "java" id="Java">
            <label for="Java">Java</label>
        </div>

        <div>
            <h4>Gender</h4>
            <input type="Radio" name="Gender" value= "male" id="Male">
            <label for="Male">Male</label>
            <input type="Radio" name="Gender" value= "female" id="Female">
            <label for="Female">Female</label>
        </div>

        <div>
            <h4>City</h4>
            <select name="City">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Mahesana">Mahesana</option>
                <option value="Gandinagar">Gandhinagar</option>
            </select>
        </div>

        <br>
        <div>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br><br>
        <button> Add User </botton >
    </form>
</div>

<style>
    .textBox{
        height : 30px;
        width : 200px;
        border-radius : 10px;
        color : orange;
        barder : orange 2px solid;
        margin-left : 10px;
    }
</style>

<!--  

Protection Against CSRF Attacks: The CSRF token ensures that the request being made to your application is intentional and originated from your application.

Unique per Session: The CSRF token is unique to each user session, making it difficult for attackers to guess or reuse the token.

Validation: Laravel automatically validates the CSRF token on every state-changing request (like POST, PUT, DELETE).

Omitting @csrf: If you forget to include the CSRF token in your forms, Laravel will reject the request, resulting in a 419 status code (Page Expired).

-->

