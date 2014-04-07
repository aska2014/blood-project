<html>
<head>

</head>
<body>
    <h1>Profile page</h1>

    Fullname: <?php echo $donor->full_name; ?><Br/>
    Gender: <?php echo $donor->gender; ?><Br/>
    Address: <?php echo $donor->address; ?><Br/>
    City name: <?php echo $donor->city_name; ?><Br/>
    Blood type: <?php echo $donor->blood_type; ?><Br/>

    <div>
        <a href="logout">Logout</a>
    </div>
</body>
</html>