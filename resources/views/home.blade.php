<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
@session('success')
<script>
    alert("{{ session('success') }}");
</script>
@endsession
<div>
 <form action="" method="post">
    @csrf
    <table>
        <thead>
            <th>Name</th>
            <th>Mass</th>
            <th>price</th>
            <th>action</th>
        </thead>
        <tbody>
            @foreach($products as $planet)
            <tr>
                <td>{{ $planet->p_name }}</td>
                <td>{{ $planet->mass }}</td>
                <td>{{ $planet->price }}</td>
                <td><a href="{{ route('add', $planet->id) }}">add</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
 </form>
</div>
