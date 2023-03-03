<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>DATA NA TS</h1>
    <form method="get">
        <p>YYYY-MM-DD HH:MM:SS</p>
        <input type="text" name="date">
        <input type="submit" value="Wyslij">
    </form>

    <?php
    if (isset($_GET['date'])) {
        $date = $_GET['date'];
        $timestamp = strtotime($date);
        echo "$timestamp";
    }
    ?>
    <h1>TS NA DATE</h1>
    <form method="get">
        <p>PUT A TS</p>
        <input type="text" name="timestamp">
        <input type="submit" value="Wyslij">
    </form>

    <?php
    if (isset($_GET['timestamp'])) {
        $timestamp = $_GET['timestamp'];
        $date = date("Y-m-d H:i:s", $timestamp);
        echo "$date";
    }
    ?>
</body>

</html>
