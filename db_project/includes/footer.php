</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
        $( function() {
            $( "#departure_date" ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0",//i can see up to 100 years
                dateFormat: "yy-mm-dd"
                //this format is done to make it more php friendly for it was giving the date with 0's but after applying this format it worked out
            });
    });
  </script>
  <script>
        $( function() {
            $( "#arrival_date" ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0",//i can see up to 100 years
                dateFormat: "yy-mm-dd"
                //this format is done to make it more php friendly for it was giving the date with 0's but after applying this format it worked out
            });
    });
  </script>
</body>
</html> 