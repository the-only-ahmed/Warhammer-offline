<?php
        require_once("play.php");
            turn();
?>
<html>
<head>
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <script language="javascript">
            var MAX_PP = <?php if ($_SESSION['order']) echo $_SESSION['ship_power']; else if ($_SESSION['mvt']) echo $_SESSION['ship_speed'];?>;
            function incremente(val)
            {
                if (val == 1)
                    var iNumber = parseInt(document.getElementById("incrementation1" ).value);
                else if (val == 2)
                    var iNumber = parseInt(document.getElementById("incrementation2" ).value);
                else if (val == 3)
                    var iNumber = parseInt(document.getElementById("incrementation3" ).value);
                if (MAX_PP)
                {
                    iNumber = iNumber+1;
                    MAX_PP--;
                }
                if (val == 1)
                    document.getElementById("incrementation1").value = iNumber;
                else if (val == 2)
                    document.getElementById("incrementation2").value = iNumber;
                else if (val == 3)
                    document.getElementById("incrementation3").value = iNumber;
                document.getElementById("PP").value = MAX_PP;
            }

            function desincremente(val)
            {
                if (val == 1)
                    var iNumber = parseInt(document.getElementById("incrementation1" ).value);
                else if (val == 2)
                    var iNumber = parseInt(document.getElementById("incrementation2" ).value);
                 else if (val == 3)
                    var iNumber = parseInt(document.getElementById("incrementation3" ).value);
                if (iNumber != 0)
                {
                    iNumber = iNumber-1;
                    MAX_PP++;
                }
                if (val == 1)
                  document.getElementById("incrementation1").value = iNumber;
                else if (val == 2)
                  document.getElementById("incrementation2").value = iNumber;
                else if (val == 3)
                  document.getElementById("incrementation3").value = iNumber;
                document.getElementById("PP").value = MAX_PP;
             }

            function checkCheckBox()
            {
                alert("sfgsdfghfhsjgfhfgsjfghsfghx");
                if (document.form.ship_to_play.checked == false)
                {
                    alert('Vous devez cocher la case avant de continuer.');
                    return false;
                }else{
                    alert('Merci pour votre don');
                }
                return true;
            }
    </script>

    <embed src="music.mp3" autostart="true" loop="true" hidden="true"></embed>
    <div id="content">
    <div id="board">

        <?php
            $i = 0;
            $j = 0;
            $grid = $_SESSION['board'];
            while($i < 100)
            {
                $j = 0;
                while ($j < 150)
                {
                    if ($grid[$i][$j] === 11)
                    echo "<div id='carre'> <img id='bat_p1_middle' title='Star of the Galaxy' src='img/w/1.png'> </div>";
                    else if ($grid[$i][$j] === 13)
                    echo "<div id='carre'> <img id='bat_p1' title='Ultramarines' src='img/w/2.png'> </div>";
                    else if ($grid[$i][$j] === 14)
                    echo "<div id='carre'> <img id='bat_p1' title='Dreadclaw' src='img/w/3.png'> </div>";
                    else if ($grid[$i][$j] === 10)
                    echo "<div id='carre'> <img id='bat_p1_big' title='Wrath of the Empire' src='img/w/11.png'>  </div>";
                    else if ($grid[$i][$j] === 15)
                    echo "<div id='carre'> <img id='bat_p1' title='Storm Bird' src='img/w/5.png'> </div>";
                    else if ($grid[$i][$j] === 16)
                    echo "<div id='carre'> <img id='bat_p1' title='Vengeful Spirit' src='img/w/3.png'> </div>";
                    else if ($grid[$i][$j] === 12)
                    echo "<div id='carre'> <img id='bat_p1_middle' title='Blood Angels' src='img/w/4.png'> </div>";
                    else if ($grid[$i][$j] === 18)
                    echo "<div id='carre'> <img id='bat_p2_middle' title='Rabbi Jacob' style='-webkit-transform:rotate(180deg)' src='img/w/1.png'> </div>";
                    else if ($grid[$i][$j] === 20)
                    echo "<div id='carre'> <img id='bat_p2' title='Shabbat Shalom' style='-webkit-transform:rotate(180deg)' src='img/w/2.png'> </div>";
                    else if ($grid[$i][$j] === 21)
                    echo "<div id='carre'> <img id='bat_p2' title='Jew Counter-Attacks' style='-webkit-transform:rotate(180deg)' src='img/w/3.png'> </div>";
                    else if ($grid[$i][$j] === 17)
                    echo "<div id='carre'> <img id='bat_p2_big' title='Drone Tsahal' style='-webkit-transform:rotate(180deg)' src='img/w/11.png'> </div>";
                    else if ($grid[$i][$j] === 22)
                    echo "<div id='carre'> <img id='bat_p2' title='David's Death Star' style='-webkit-transform:rotate(180deg)' src='img/w/5.png'> </div>";
                    else if ($grid[$i][$j] === 23)
                    echo "<div id='carre'> <img id='bat_p2' title='Casher Enterprise' style='-webkit-transform:rotate(180deg)' src='img/w/3.png'> </div>";
                    else if ($grid[$i][$j] === 19)
                    echo "<div id='carre'> <img id='bat_p2_middle' title='Israel Battleship' style='-webkit-transform:rotate(180deg)' src='img/w/4.png'> </div>";
                    else if ($grid[$i][$j] === 24)
                    echo "<div id='carre'> <img id='obstacle_big' title='Asteroid' src='img/w/asteroid-1.gif'> </div>";
                    else if ($grid[$i][$j] === 25)
                    echo "<div id='carre'> <img id='obstacle' title='Asteroid' src='img/w/asteroid-2.gif'> </div>";
                    else if ($grid[$i][$j] === 26)
                    echo "<div id='carre'> <img id='obstacle' title='Asteroid' src='img/w/asteroid-3.gif'> </div>";
                    else if ($grid[$i][$j] === 27)
                    echo "<div id='carre'> <img id='obstacle' title='Asteroid' src='img/w/asteroid-4.gif'> </div>";
                    else if ($grid[$i][$j] === 28)
                    echo "<div id='carre'> <img id='obstacle' title='Asteroid' src='img/w/asteroid-4.gif'> </div>";
                    else if ($grid[$i][$j] === 29)
                    echo "<div id='carre'> <img id='obstacle_big' title='Asteroid' src='img/w/asteroidAn.gif'> </div>";
                    else
                    echo "<div id='carre'></div>";
                    $j++;
                }
                echo "<br>";
                $i++;
            }
        ?>
    </div>
    <div id="panel">
        <span id="title">
            <?php if ($_SESSION['move']) echo $_SESSION['player2_name']; else echo $_SESSION['player1_name']; echo "'s turn !" ?>
        </span>
        <form action='playground.php' method='POST' name="form">
        <?php
               if ($_SESSION['select'] == 1)
                {
                    end_turn();
                    foreach ($_SESSION['print_ship'] as $value)
                    {
                        echo ("<div id='ship_name'>");
                        echo ("<input type='radio' name='ship_to_play' value='".$value."'>".$value);
                        echo ("</div>");
                    }
                }
               else if ($_SESSION['order'] == 1)
                {
                   end_turn(); ?>
                    <input type="text" id="PP"s disabled>
                        <input type="button" name="bouton" value="-" onclick="desincremente(1);">
                        <input type="text" name="bonus_speed" id="incrementation1" value="0">
                        <input type="button" name="bouton" value="+" onclick="incremente(1);">
                        Speed <br>
                        <input type="button" name="bouton" value="-" onclick="desincremente(2);">
                        <input type="text" name="bonus_shield" id="incrementation2" value="0">
                        <input type="button" name="bouton" value="+" onclick="incremente(2);">
                        Shield <br>
                        <input type="button" name="bouton" value="-" onclick="desincremente(3);">
                        <input type="text" name="bonus_weapon" id="incrementation3" value="0">
                        <input type="button" name="bouton" value="+" onclick="incremente(3);">
                        Weapon <br>
        <?php   }
               else if ($_SESSION['mvt'] == 1)
                {
                   end_turn(); ?>
                    <input type="radio" name="ship_orientation" value="up">Up<br>
                    <input type="radio" name="ship_orientation" value="down">Down<br>
                    <input type="radio" name="ship_orientation" value="right">Right<br>
                    <input type="radio" name="ship_orientation" value="left">Left<br>

                    <input type="button" name="bouton" value="-" onclick="desincremente(1);">
                    <input type="text" name="deplacement" id="incrementation1" value="0">
                    <input type="button" name="bouton" value="+" onclick="incremente(1);">
            <?php
            } else end_turn();
            ?>
                <input type="submit" value="next" class="button">
            </form>
        </div>
    </div>
    </div>
</body>
</html>
