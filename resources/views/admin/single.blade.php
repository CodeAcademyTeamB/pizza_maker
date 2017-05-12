@extends ('admin.main')

@section ('admin.single')
<h2>admin single blade </h2>
<div class="container">
    <h2>Table</h2>
        <table class="table table-hover">
@foreach  ($item as $key => $value)
    <th> {{$key}}</th>

        <tr><td> {{$value}}</td>

            @endforeach
        </tr>
        </table>
</div>

</thead>



