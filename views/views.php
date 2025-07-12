<!DOCTYPE html>	
<html>	
    <head>	
        <title>Journal</title>	
        <link rel="stylesheet" href="/css/styles.css">	
    </head>	
    <body>	
        <div class="container">
            <h1>Journal Entry</h1>   
                <p>Name: <?= htmlspecialchars($name) ?></p>
                <p>Date: <?= htmlspecialchars($currentDate) ?></p>
                <p>Entry: <?= htmlspecialchars($entry) ?></p>
        </div>
    </body>	
</html>	