<?php
    include 'Functions/Functions.php';
    // echo $_SESSION['user_id'];
    loginCheck();
    setlocale(LC_ALL,'nl_NL.UTF-8');
    $today = date("j F Y, G:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afvalstroom Invullen - Road Maintenance Support</title>
    <link rel="shortcut icon" href="Images/RMS_kegel.png" sizes="256x256">
    <link rel="stylesheet" href="css/afvalstroomreymstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
    <script src="js/functions.js"></script>
</head>
<body>
    <nav>
    </nav>

    <section class="main">
        <h1><bold>AFVALSTROOM INVOEREN</bold></h1>
        <form class="form" action ="ingeleverd.php" method="POST">
             <input class="Normaal" disabled type="text" name="Datum" value="<?php echo($today)?>" required>
             <select id="kenteken" class="Normaal" type="text" name="Kenteken" placeholder="Kenteken" required>
                 <option value="KiesKenteken" disabled selected>Kies Kenteken</option>
                 <option value="BV-NV-99">BV-NV-99</option>
                 <option value="52-BRF-4">52-BRF-4</option>
                 <option value="Anders">Anders....</option>
             </select>
             <input class="hidden Normaal" type="text" id="anderKenteken" type="text" name="Kenteken" placeholder="Anders....">
             <input class="Normaal" type="text" name="Bedrijven" placeholder="Stort Bedrijf" value="Reym" required>
             <input class="Normaal" type="text" name="AfvalstrmNum" placeholder="Afvalstroom Nummer" required>
             <input class="Normaal" type="text" name="LocatieVervuiling" placeholder="Locatie Vervuiling" required>
             <label class="Toevoeging" type="text">Bijv. A10 Re 10.2</label>
             <select id="opdrgever" class="Normaal" type="text" name="Ontdoener" placeholder="Ontdoener" required>
                 <option value="Opdrachtgever" disabled selected>Kies Opdrachtgever</option>
                 <option value="CCY">Coentunnel Company</option>
                 <option value="DJZ">De Jong Zuurmond</option>
                 <option value="Wilchem">Wilchem</option>
                 <option value="Anders">Anders....</option>
             </select>
             <input class="hidden Normaal" type="text" id="anderOpdrgever" name="Ontdoener" placeholder="Anders....">
             <input class="Normaal" type="text" name="Werkbon" placeholder="Werkbon Nummer" required>
             <input class="Normaal" type="text" name="Chauffeur" placeholder="Chauffeur" value="<?php echo $_SESSION['gebruikersnaam']?>" required>
             <button class="btn btn1" type="submit">Lever In</button>
        </form>
        <section class="terug">
            <a href="afvalstroomkeuze.php"><button class="terugbtn">Terug</button></a>
        </section>
    </section>

    <section class="footer">
        <p>Powered By DSRTech © 2022</p>
    </section>
</body>
</html>

