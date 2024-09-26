<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
        font-size: 250%;
        font-display: block;
        font-family: monospace;

    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    .btn{
        width: 100%;
        font-size: 200px;
        padding: 200px
    }
</style>
<div>
   <table>

    <tr>
        <th>Product Name</th>
        <th>mass</th>
        <th>price</th>
        <th>action</th>
        <th>date</th>
        <th> <a href="/home">home</a></th>
    </tr>
    @foreach($product as $item)
    <tr>
        <td>{{ $item['p_name'] }}</td>
        <td>{{ $item['c_mass'] }}</td>
        <td>{{ number_format($item['c_mass']*$item['price']/100,2) }} </td>
        <td>{{ $item['c_status'] }}</td>
        <td>{{ $item['checkout_date'] }}</td>
        <td>
        </td>
    </tr>
    @endforeach
   </table>
    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        @method('PUT');
        <input type="submit" value="checkout" class="btn">
    </form>
</div>
