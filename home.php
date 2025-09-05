<!-- Michael DeVito II -->

<?php
    session_start();

    if (!isset($_SESSION['username'])) { // checks to make sure that anyone not logged in is not on this page
        header("Location: login.php");
    }

    echo '<h1>Welcome ' . $_SESSION['username'].'</h1>';

?>

<!DOCTYPE html>
<html lang='en'>
    <head>

        <!-- Meta for the character set -->
        <meta charset="utf-8">

        <!-- Title, External CSS, and Favicon -->
        <title>MDeVito - Task Manager</title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        
        <!-- Linking cool fonts I found from Google (code from Google) -->

    </head>
    <body>  
        <div class="task-manager-window">

            <header class="window-header">

                <div class="header-left">
                    <h1>Welcome to Task Manager</h1>
                </div>
                
                <nav class="header-right">
                    <a href='logout.php'>Logout</a>
                </nav>
            </header>


            <div class="window-content">

                <div class="window-sidebar">
                    <p>Sort by:</p>
                    <p>Importance</p>
                    <p>First Created<p>
                    <p>Last Created</p>
                </div>
                
                <table class="all-tasks">
                    
                    <tr>
                        <td>Task #</td>
                        <td>Importance</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Due Date</td>
                        <td>Details</td>
                    </tr>

                    <!-- PHP will dynamically update below this line -->
                    <tr>
                        <td>01</td>
                        <td>High</td>
                        <td>Example</td>
                        <td>Web Dev</td>
                        <td>Wednesday</td>
                        <td>Finish this website!</td>
                    </tr>

                </table>

            </div>

        </div>

    </body>
</html>