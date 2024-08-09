<html>
    <head>
        <title>db facate</title>
    </head>
    <body>

@if(isset($datass))


<form action="{{ url('update/' . $datass[0]->id) }}" method="post">

            <br>
            <input type="text" name="name" value="{{$datass[0]->name}}">
            <br>
            @csrf 
            <br>
            <button>Submit</button>
        </form>
        
@endif
    </body>
</html>