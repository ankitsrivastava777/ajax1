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

<form class="text-center border border-light p-5" action="insert.php" method="POST"  id="myForm">

    <p class="h4 mb-4">FORM</p>
        <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Name">
          
        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

              
        <textarea class="form-control mb-4" name="message" id="message" placeholder="Write your message"></textarea>
        <input type="date" id="date" name="date" class="form-control datepicker" placeholder="Date">
        <input type="submit" class="btn btn-info btn-block my-4" name="submit" value="submit" id="submit">
 
</form>
<!-- To show the submit success or failed message. -->
<div id="result">
    </div>
   
 
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
    var formdata = $('#myform');


$("#submit").click(function() {


    $.post(
        $("#myForm").attr("action"),
        $("#myForm :input").serializeArray(),
        function(info) {
            $("#result").html(info);
            // clear input fields after submition
            clearInput();
        });


});

$("#myForm").submit(function() {
    return false;
});


function clearInput() {
    $("#myForm :input").each(function() {
        $(this).val('');
    });

}




$(document).ready(function() {

    display();

    function display() {
        $.ajax({

            url: 'displaydata.php',
            type: 'POST',

            success: function(responsedata) {
                $('#dbdata').html(responsedata);

            }


        });


    }

    setInterval(function() {
        $('#dbdata').load("displaydata.php").fadeIn("slow");
    }, 5000);

});
</script>

</body>
</html>