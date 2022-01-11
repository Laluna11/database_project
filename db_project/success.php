<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    


    //we are cheking if submit exist
    //even if its empty we are just checking if it exist
    if(isset($_POST['submit'])){

        $from = $_POST['from'];
        $To = $_POST['To'];
        $departure_date = $_POST['departure_date'];
        $departure_time = $_POST['departure_time'];
        $arrival_date = $_POST['arrival_date'];
        $arrival_time = $_POST['arrival_time'];
        $seats = $_POST['seats'];


        

    
    
     echo '<h1 class ="text-center text-success">You Have Successfully Added A Flight  </h1>';
   


    }



?>


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php 
                    echo $_POST['from'].' To '. $_POST['To'];
                    
                 ?>
                <i class="fas fa-plane"></i>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php 
                echo $_POST['seats']
                ?>
                <i class="fas fa-chair"></i>
            </h6>
            <p class="card-text">
                Departure Date :
                <?php 
                    echo $_POST['departure_date'];
                ?>
            </p>
            <p class="card-text">
                Departure Time :
                <?php 
                    echo $_POST['departure_time'];
                ?>
            </p>
            <p class="card-text">
                Arrival Date : 
                <?php 
                    echo $_POST['arrival_date'];
                ?>
            </p>
            <p class="card-text">
                Arrival Time : 
                <?php 
                    echo $_POST['arrival_time'];
                ?>
            </p>
            
        </div>
    </div>

    


<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
