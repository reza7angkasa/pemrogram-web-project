<!DOCTYPE html>
<html lang="en">
<head>
  
  
</head>

<body>
    <br>
<div class="container">
 
    <form action="fungsilatihan.php" method="POST">
    
        <fieldset>

        <div class="form-group">
            <label for="namad">Nama Depan: </label>
            <input type="text" name="namad" class="form-control" placeholder="Nama Depan" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')">
        </div>
    
        
        <div class="form-group">
            <label for="namab">Nama Belakang: </label>
            <input type="text" name="namab" class="form-control" placeholder="Nama Belakang" required oninvalid="this.setCustomValidity('Please fill out this field')"
          oninput="this.setCustomValidity('')">
        </div>
    
            <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="text" class="form-control" name="email" placeholder="email" required oninvalid="this.setCustomValidity('Please fill out this field')" oninput="this.setCustomValidity('')">
            </div>
            

    <input type="submit" class="btn btn-success btn-block" name="daftar" value="Daftar" />
    </input>
    <br>
    <a class="btn btn-danger btn-block" href="latihan.php"><i class="fas fa-times-circle"></i></a>
        </fieldset>
    </form>
</diV>
    </body>
</html>