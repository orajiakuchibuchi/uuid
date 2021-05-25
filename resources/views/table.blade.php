<table>
    <thead>
       <tr>
           <th>#</th>
        <th>
            UUID
        </th>
        <th>
            Created at
        </th>
       </tr>
    </thead>
    <tbody>
        @foreach ($lists as $key => $list)
        <tr>
            <td>{{($loop->index + 1)}}</td>
            <td>{{$key}}</td>
            <td>{{$list}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    th, tr{
        text-align: center;
    }
    td{
        padding: 5px;
    }
    table{
        width: 100%;
    }
</style>
