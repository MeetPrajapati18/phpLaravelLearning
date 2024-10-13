<div>
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type= "text" placeholder = "Please enter your name" name = "userName"/>
        </div>
        <br>
        <div class="input-wrapper">
            <input type= "text" placeholder = "Please enter your email" name = "emial"/>
        </div>
        <br>
        <div class="input-wrapper">
            <input type= "text" placeholder = "Please enter your City" name = "city"/>
        </div>
        <br>
        <div class="input-wrapper">
            <button> Add User </botton >
        </div>

    </form>
</div>

<style>
    input{
        height : 30px;
        width : 200px;
        border-radius : 10px;
        color : orange;
        barder : orange 2px solid;
        margin-left : 10px;
    }
</style>

