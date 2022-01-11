<?php 
    $title = 'Add Flight';
    require_once 'includes/header.php';
    
?>

<figure class="text-center">
  <blockquote class="blockquote">
    <h1>Add Flight </h1>
  </blockquote>
  <figcaption class="blockquote-footer">
    <i class="fas fa-plane"></i> <i class="fas fa-plane"></i> <i class="fas fa-plane"></i> 
    <i class="fas fa-plane"></i> 
  </figcaption>
</figure>

    
    <form method="post" action="success.php" >
        <div class="mb-3">
                <label for="from" class="form-label">From </label>
                <input type="text" class="form-control" id="from" name= "from" >
        </div>
        <div class="mb-3">
                <label for="To" class="form-label">To </label>
                <input type="text" class="form-control" id="To" name = " To"  >
        </div>
        <div class="mb-3">
                <label for="departure_date" class="form-label">Departure Date </label>
                <input type="text" class="form-control" id="departure_date" name = "departure_date"  >
        </div>
        <div class="mb-3">
                <label for="departure_time" class="form-label">Departure Time </label>
                <input type="text" class="form-control" id="departure_time" name = "departure_time"  >
        </div>
        <div class="mb-3">
            <label for="arrival_date" class="form-label">Arrival Date</label>
            <input type="text" class="form-control" id="arrival_date" name ="arrival_date" >
        </div>
        <div class="mb-3">
            <label for="arrival_time" class="form-label">Arrival Time</label>
            <input type="text" class="form-control" id="arrival_time" name ="arrival_time" >
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Seats</label>
            <input type="text" class="form-control" id="seats" name ="seats" >
        </div>
        
        
        <button type="submit" name ="submit"class="btn btn-success btn-block">Add</button>
    </form>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
