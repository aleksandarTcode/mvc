<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
<h1>DOBAR DAN IZ MOG POGLEDA</h1>
<p><?php echo $this->viewbag["hello"]; ?></p>
<ul>
    <?php foreach($this->viewbag["cars"] as $car): ?>
        <li><?php echo $car; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>