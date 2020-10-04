<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <?php include(VIEW_PATH.'/layout/header.php') ?>
    <body>
        <div class="wrapper">
            <div class="navigation-wrapper">
                <button><a href="/"> Back </a></button>
            </div>
            <div class="container-title">
                <h2><?php echo $data["player"]["name"];  ?></h2>
            </div>

            <div class="container-sub-title">
                <h3>Basic Details</h3>
            </div>

            
            <table>
                 <thead>
                    <th>NUMBER</th>
                    <th>POS</th>
                    <th>HEIGHT</th>
                    <th>WEIGHT</th>
                    <th>DATE OF BIRTH</th>
                    <th>NATIONALITY</th>
                    <th>YEARS OF EXPERIENCE</th>
                    <th>COLLEGE</th>
                </thead>

                <tbody>
                        <tr>
                            <td><?php echo $data["player"]["number"]; ?></td>
                            <td><?php echo $data["player"]["pos"]; ?></td>
                            <td><?php echo $data["player"]["height"]; ?></td>
                            <td><?php echo $data["player"]["weight"]; ?></td>
                            <td><?php echo $data["player"]["dob"]; ?></td>
                            <td><?php echo $data["player"]["nationality"]; ?></td>
                            <td><?php echo $data["player"]["years_exp"]; ?></td>
                            <td><?php echo $data["player"]["college"]; ?></td>
                        </tr>
                 
                </tbody>

            </table>



            <div class="container-sub-title">
                <h3>Player Statistics</h3>
            </div>

            
            <table style="margin-bottom:30px">
                 <thead>
                    <th>AGE</th>
                    <th>GAMES</th>
                    <th>GAMES STARTED</th>
                    <th>MINUTES PLAYED</th>
                    <th>FIELD GOALS</th>
                    <th>FIELD GOALS ATTEMPTED</th>
                    <th>3 POINTS</th>
                    <th>3 POINTS ATTEMPTED</th>

                </thead>

                <tbody>
                        <tr>
                            <td><?php echo $data["player"]["age"]; ?></td>
                            <td><?php echo $data["player"]["games"]; ?></td>
                            <td><?php echo $data["player"]["games_started"]; ?></td>
                            <td><?php echo $data["player"]["minutes_played"]; ?></td>
                            <td><?php echo $data["player"]["field_goals"]; ?></td>
                            <td><?php echo $data["player"]["field_goals_attempted"]; ?></td>
                            <td><?php echo $data["player"]["three_points"]; ?></td>
                            <td><?php echo $data["player"]["third_attempted"]; ?></td>
                        </tr>
                 
                </tbody>
            </table>



            
            <table>
                 <thead>
                    <th>2 POINTS</th>
                    <th>2 POINTS ATTEMPTED</th>
                    <th>FREE THROWS</th>
                    <th>FREE THROWS ATTEMPTED</th>
                    <th>OFFENSIVE REBOUNDS</th>
                    <th>DEFENSIVE REBOUNDS</th>
                    <th>ASSISTS</th>
                    <th>STEALS</th>
                    <th>BLOCKS</th>
                    <th>TURNOVERS</th>

                </thead>

                <tbody>
                        <tr>
                            <td><?php echo $data["player"]["two_points"]; ?></td>
                            <td><?php echo $data["player"]["second_attempt"]; ?></td>
                            <td><?php echo $data["player"]["free_throws"]; ?></td>
                            <td><?php echo $data["player"]["free_throws_attempted"]; ?></td>
                            <td><?php echo $data["player"]["offensive_rebounds"]; ?></td>
                            <td><?php echo $data["player"]["defensive_rebounds"]; ?></td>
                            <td><?php echo $data["player"]["assists"]; ?></td>
                            <td><?php echo $data["player"]["steals"]; ?></td>
                            <td><?php echo $data["player"]["blocks"]; ?></td>
                            <td><?php echo $data["player"]["turnovers"]; ?></td>
                        </tr>
                 
                </tbody>
            </table>




        </div>
        <?php include(VIEW_PATH.'/layout/scripts.php') ?>
    </body>
</html>