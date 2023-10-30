<?php
//calculater 

       $result= $_GET["number1"]+ $_GET["number2"];
  
?>
<body>
    <div class="container">
<form action="calc.php" method="GET" class="form">

<div>
<label>Enter Number1</label>
<br>
<input type="number"  name="number1" class="form-control">
</div>


<div>

    <label>Enter Number2</label>
    <br>
    <input type="number"  name="number2" class="form-control">
    </div>


    <div class="alert alert-success">
  <?php echo $result ?>
    </div>
    <br>
    <input type="submit" class="btn btn-primary">
    </form>
</body>

