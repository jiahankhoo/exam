<div>
    <form method="POST">
        @csrf
        <label for="p_name">name</label>
        <input type="text" name="p_name" id="p_name" readonly value="{{ $product->p_name }}">
        <br>
        <label for="p_price">price</label>
        <input type="text" name="p_price" id="p_price" readonly value="{{ $product->price }}">
        <br>
        <label for="mass">mass</label>
        <input type="number" name="mass" id="mass" onchange="calculatePrice()" onkeyup="calculatePrice()" value="{{ $product->mass }}">
        <label for="totalprice">total price</label>
        <input type="text" readonly id="totalPrice" name="totalPrice" value="{{ $product->price/100 * $product->mass }}">
        <input type="submit" value="Add">
    </form>
</div>
<script>
    function calculatePrice() {
        var mass = document.getElementById("mass").value;
        var price = document.getElementById("p_price").value;
        var totalPrice = parseFloat(price)/100 * parseFloat(mass);
        document.getElementById("totalPrice").value = "RM" + totalPrice.toFixed(2);
    }
</script>
