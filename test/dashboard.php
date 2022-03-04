<?php
     $posinter = $inspectioncomp = $inspectionpend = $inspectioninit = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Musk - Dashboard </title>
</head>
<body>
    <div class = "header">
        <div id = "">
            <div><a class = "header_links"href="/test/sign_in.php">Home</a></div>
        </div>
        <div id = "">
            <div>About</div>
        </div>
        <div id = "">
            <div>Services</div>
        </div>
        <div id = "">
            <div>Careers</div>
        </div>
        <div id = "">
            <div>Contact</div>
        </div>

    </div>
    <div class = "dash_container">
        <div id = "dash">
            <a href="#" class = "dash_ent">
                <div class = dash_ent_head>Total Inspection Initiated</div>
                <div class = dash_ent_count>
                    <?php echo $inspectioninit; ?>
                </div>
            </a>    
            <a href="#" class = "dash_ent">
                <div class = dash_ent_head>Completed Inspections</div>
                <div class = dash_ent_count>
                    <?php echo $inspectioncomp; ?>
                </div>
            </a> 
            <a href="#" class = "dash_ent">
                <div class = dash_ent_head>Pending Inspections </div>
                <div class = dash_ent_count>
                    <?php echo $inspectionpend; ?>
                </div>
            </a>                    
            <a href="#" class = "dash_ent">
                <div class = dash_ent_head>Positive Interventions</div>
                <div class = dash_ent_count>
                    <?php echo $posinter; ?>
                </div>
            </a>                                       
        </div>

    </div>
</body>
</html>