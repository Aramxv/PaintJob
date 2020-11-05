
<h1 class="text-center font-heading">JUAN'S AUTO PAINT</h1> 

<h3 class="font-heading-3">New Paint Job</h3>

<h2 class="text-center font-heading-2">New Paint Job</h2>

<img id="currentImage" class="left-image" src="assets/Default.png" alt="">
<img id="targetImage" class="right-image" src="assets/Default.png" alt="">

<h2 class="text-center font-heading-2-left">Car Details</h2>

<?php
    include 'database/database_connection.php';
    include 'action/submit.php';
?>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="row">
        <div class="col-25 font-par">
        <label for="plateNo">Plate No.</label>
        </div>
    <div class="col-75">
        <input type="text" id="plateNo" name="plateNo" value="<?php echo $plateNo ?>" placeholder="Plate number">
        </div>
    </div>
  <div class="row">
    <div class="col-25 font-par">
      <label for="currentColor">Current Color</label>
    </div>
    <div class="col-75">
      <select id="currentColor" name="currentColor" value="<?php echo $currentColor ?>">
        <option value="0">Default</option>
        <option value="1">Red</option>
        <option value="2">Blue</option>
        <option value="3">Green</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25 font-par">
      <label for="targetColor">Target Color</label>
    </div>
    <div class="col-75">
      <select id="targetColor" name="targetColor" value="<?php echo $targetColor ?>">
        <option value="0">Default</option>
        <option value="1">Red</option>
        <option value="2">Blue</option>
        <option value="3">Green</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <input class="submit-button" type="submit" value="Submit">
  </div>
  </form>
</div>