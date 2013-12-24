<h2>Taking a Quiz Problem</h2>

<div id="hint"><p style="margin-left:auto; text-align:center;">Hint (click me!): The Solar System Basic Data</p></div>

<form method='POST' action="/quiz/result?q_id=<?php echo $q_id; ?>">
    <p><?php echo $qstn; ?></p>
    <p>
    <?php
        foreach ($choice as $key => $value) {
            echo "<input type='radio' name='answer' value='".$value."'>".$value."</input><br />"; 
            echo "<br>";
            ;
        }
    ?>
    </p>
    <p style="margin-top: -10px;">
        <input type='submit' value='Submit'>
    </p>
</form>


<div id="ss_info" title="The Solay System Basic Data" hidden>
    <table style="text-align: center;">
        <tr>
            <th style="width: 100px;">Object</th>
            <th style="width: 95px;">Classification</th>
            <th style="width: 95px;">Average Distance from the Sun</th>
            <th style="width: 95px;">Radius</th>
            <th style="width: 100px;">Mass</th>
            <th style="width: 95px;">Rings?</th>
            <th style="width: 220px;">Composition</th>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Sun</td>
            <td>Star</td>
            <td>0 AU</td>
            <td>108 R<sub>Earth</sub></td>
            <td>333,000 M<sub>Earth</sub></td>
            <td>No</td>
            <td>H &amp; He gas (98% by mass)</td>
        </tr>
        <tr>
            <td>Mercury</td>
            <td>Planet</td>
            <td>0.39 AU</td>
            <td>0.38 R<sub>Earth</sub></td>
            <td>0.055 M<sub>Earth</sub></td>
            <td>No</td>
            <td>Rocks, metals</td>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Venus</td>
            <td>Planet</td>
            <td>0.72 AU</td>
            <td>0.95 R<sub>Earth</sub></td>
            <td>0.82 M<sub>Earth</sub></td>
            <td>No</td>
            <td>Rocks, metals</td>
        </tr>
        <tr>
            <td>Earth</td>
            <td>Planet</td>
            <td>1 AU</td>
            <td>1 R<sub>Earth</sub></td>
            <td>1 M<sub>Earth</sub></td>
            <td>No</td>
            <td>Rocks, metals</td>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Mars</td>
            <td>Planet</td>
            <td>1.52 AU</td>
            <td>0.53 R<sub>Earth</sub></td>
            <td>0.11 M<sub>Earth</sub></td>
            <td>No</td>
            <td>Rocks, metals</td>
        </tr>
        <tr>
            <td>Jupiter</td>
            <td>Planet</td>
            <td>5.20 AU</td>
            <td>11.2 R<sub>Earth</sub></td>
            <td>318 M<sub>Earth</sub></td>
            <td>Yes</td>
            <td>H, He, hydrogen compounds</td>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Saturn</td>
            <td>Planet</td>
            <td>9.54 AU</td>
            <td>9.4 R<sub>Earth</sub></td>
            <td>95.2 M<sub>Earth</sub></td>
            <td>Yes</td>
            <td>H, He, hydrogen compounds</td>
        </tr>
        <tr>
            <td>Uranus</td>
            <td>Planet</td>
            <td>19.2 AU</td>
            <td>4.0 R<sub>Earth</sub></td>
            <td>14.5 M<sub>Earth</sub></td>
            <td>Yes</td>
            <td>H, He, hydrogen compounds</td>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Neptune</td>
            <td>Planet</td>
            <td>30.1 AU</td>
            <td>3.9 R<sub>Earth</sub></td>
            <td>17.1 M<sub>Earth</sub></td>
            <td>Yes</td>
            <td>H, He, hydrogen compounds</td>
        </tr>
        <tr>
            <td>Pluto</td>
            <td>Dwarf Planet</td>
            <td>39.5 AU</td>
            <td>0.18 R<sub>Earth</sub></td>
            <td>0.0022 M<sub>Earth</sub></td>
            <td>No</td>
            <td>Ices, rock</td>
        </tr>
        <tr style="background-color:#CCFFCC;">
            <td>Eris</td>
            <td>Dwarf Planet</td>
            <td>67.7 AU</td>
            <td>0.19 R<sub>Earth</sub></td>
            <td>0.0028 M<sub>Earth</sub></td>
            <td>?</td>
            <td>Ices, rock</td>
        </tr>
    </table>
</div>