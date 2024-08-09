<html>
    <head>
        <title>db facate</title>
    </head>
    <body>
        <form action="insert" method="post">
            <br>
            <input type="text" name="name">
            <br>
            @csrf 
            <br>
            <button>Submit</button>
        </form>

        <br>
        <table>
            <tr>
            <th>name</th>
            <th>Action</th>
            <th>Delete</th>
</tr>
            @php 
            use Illuminate\Support\Facades\DB;

            $value = DB::select("select * from tests");
            @endphp
 @foreach($value as $datas)
 <tr>
            <td>
{{ $datas->name }}
            </td>

            <td>

            <a href="edit/{{ $datas->id }}"> Edit </a>
            </td>
            <td>

            <a href="delete/{{ $datas->id }}"> Delete </a>
            </td>
</tr>
            @endforeach
        </table>
    </body>
</html>