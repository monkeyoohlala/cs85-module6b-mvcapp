<!DOCTYPE html>	
<html>	
    <head>	
        <title>Journal</title>	
        <link rel="stylesheet" href="/css/styles.css">	
    </head>	
    <body>	
        <div class="container">
            <h1>Journal Entry</h1>   
                <p>Name: <?php echo htmlspecialchars($user->getName()) ?></p>
                <p>Date: <?php echo htmlspecialchars($journal->getCurrentDate()) ?></p>
                <p>Entry: <?php echo htmlspecialchars($journal->getEntry()) ?></p>
                <p>Word Count: <?php echo htmlspecialchars($journal->countWords($journal->getEntry())) ?></p>
        </div>
    </body>	
</html>	