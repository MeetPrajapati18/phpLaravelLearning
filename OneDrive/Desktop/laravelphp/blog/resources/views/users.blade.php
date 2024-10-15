<div>
    <h1>Users List</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user -> id}}</td>
            <td>{{$user -> email}}</td>
            <td>{{$user -> name}}</td>
        </tr>        
        @endforeach
    </table>
</div>
