<!-- to add component -->
<!-- to print dynamic message in component -->
<x-message-banner msg="Dynamic Message" class="success"/>

<!-- to include another blade file -->
<!-- includeIf is to check if the file exists or not if it doesn't exists then it dont give error but it run the further code  -->
@includeIf('common.header',['page' => 'this is header page and added as subview'])
<h1>About Page</h1>
<h3>{{$user}}</h3>
<h3>{{$users[0]}}</h3>
<a href="/home">Home Page</a>
<!-- <h1>{{rand()}}</h1> -->

<!-- conditional statement in php blade -->
 @if($user == 'Meet')
 <h2>This is Meet Prajapati</h2>
 @elseif($user == 'Prajapati')
 <h2>This is Prajapati</h2>
 @else
 <h2>other User</h2>
 @endif

 <!-- for loop in php blade -->
 <div>
    @for($i = 0; $i < 5; $i++)
    <h3>{{$i}}</h3>
    @endfor
</div>

<!-- foreach loop in php blade -->
 <div>
    @foreach($users as $name)
    <h2>{{$name}}</h2>
    @endforeach
</div>

<style>
    .success{
        background : lightgreen;
        color: green;
        padding : 3px 10px;
    }

    
</style>