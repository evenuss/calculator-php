<!-- 

Author      : Arjuna Efenus De Silalahi 
Application : Calculator

-->
<?php
if($_SERVER['REQUEST_METHOD'] === "GET")
{
    
    
    if(isset($_GET['op']))
    {
      $bil1 = $_GET['bil1'];
      $bil2 = $_GET['bil2'];
      $operasi = $_GET['op'];
      if($operasi == "bagi")
      {

        $result = $bil1 / $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
      }
      elseif($operasi == "kali")
      {
        $result = $bil1 * $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
          

      
      }
      elseif($operasi == "kurang")
      {
        $result = $bil1 - $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");

      
      }
      elseif($operasi == "tambah")
      {
        $result = $bil1 + $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
      }
      else
      {
        echo "Jenis operasi tidak di temukan";
      }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
<div class="container">
  <form method="POST" action="hasil.php">
    <table>
        <tr>
          <td>Masukan Angka Pertama </td>
          <td><input type="text" id="angka1" name="bil1" value="<?php if(isset($_GET['bil1'])){echo $_GET['bil1'];}else{0;} ?>"></td> 
        </tr>
        <tr>
          <td>Masukan Angka Kedua </td>
          <td><input type="text" id="angka2" name="bil2" value="<?php if(isset($_GET['bil2'])){echo $_GET['bil2'];}else{0;} ?>"></td>

        </tr>
        <tr>
          <td>Pilih Operasi </td>
          <td>
            <select name="operasi">
              <option value="/" >/ (bagi)</option>
              <option value="*" >x (kali)</option>
              <option value="-" >- (kurang)</option>
              <option value="+" >+ (tambah)</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Hasil</td>
          <td><input type="text" name="hitung" value="<?php if(isset($_GET['hasil'])){ echo $_GET['hasil'];}else{ echo 0;} ?>" disabled></td>
        </tr>
    </table>
    <input type="submit" name="hitung" onclick="myFunction()">
  </form>
</div>
</body>
</html>
