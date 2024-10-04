<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <style>
    table {
      width: 10%;
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
  <?php session_start(); ?>

  <h1>Menu</h1>
  <table border="2">
    <tbody>
      <tr>
        <td>Item</td>
        <td>Price</td>
      </tr>
      <tr>
        <td>Sandwich</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Chips</td>
        <td>75</td>
      </tr>
      <tr>
        <td>Grill</td>
        <td>150</td>
      </tr>
    </tbody>
  </table>
  <form action="handleform.php" method="get">
    <label for="menuItem">Select an item</label>
    <select name="menuItem" id="menuItem">
      <option value="sandwich">Sandwich</option>
      <option value="chips">Chips</option>
      <option value="grill">Grill</option>
    </select>
    <p>Quantity <input type="number" name="itemQty"></p>
    <p>Payment <input type="text" name="payment" required></p>
    <input type="submit" value="Order">
  </form>
</body>

</html>
