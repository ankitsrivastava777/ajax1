<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>
<body>


  <center><h1>Displayed Data from Database Using JSON</h1></center>


   
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>message</th>
            <th>Date</th>
        </thead>
        <tbody id="dbdata">

        </tbody>
    </table>
 
    

    <script type="text/javascript">
   $(document).ready(function() {
    display();

    function display() {
        $.ajax({

            url: 'insert1.php',
            type: 'POST',
            datatype: 'JSON',
            success: function(data) {
                console.log(jQuery.parseJSON(data));
                var l = jQuery.parseJSON(data);



                l.forEach(function(dt) {
                    $("#dbdata").append("<tr>" +

                        "<td>" + dt.id + "</td>" +
                        "<td>" + dt.name + "</td>" +
                        "<td>" + dt.email + "</td>" +
                        "<td>" + dt.message + "</td>" +
                        "<td>" + dt.date + "</td>" +
                        "</tr>"
                    );
                });

                setTimeout(function() {
                    location = 'display.php'
                }, 5000)



            }



        });

    }


});
</script>




  </body>
  </html>

  