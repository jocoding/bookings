<!Doctype html>
<html>
<head>
    <title>My bookings</title>
    
    
</head>
<body>
    <h1>My Restaurant</h1>
    <h2>Book a table</h2>
    <!--this is a booking form-->
    <form method="POST" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <label>Date</label>
        <input type="date" name="datebox" required>
        <label>Time</label>
        <input type="time" name="timebox" required>
        <!--this allows to check what type of form is being used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
        
    </form>
    
    <h2>search for booking</h2>
    
</body>
</html>
<?php

?>