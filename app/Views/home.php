<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <?php include(VIEW_PATH.'/layout/header.php') ?>
    <body>
        <div class="wrapper">
            <div class="container-title">
                <h2>NBA PLAYERS STATISTICS</h2>
            </div>
            <table>
                 <thead>
                    <th>FULL NAME</th>
                    <th>TEAM</th>
                    <th>AGE</th>
                    <th>GAMES</th>
                    <th>MINUTES PLAYED</th>
                    <th>FREE THROWS ATTEMPTED</th>
                    <th>OFFENSIVE REBOUNDS</th>
                    <th>DEFENSIVE REBOUNDS</th>
                    <th>ASSISTS</th>
                    <th>STEALS</th>
                    <th>BLOCKS</th>
                </thead>

                <tbody>
                    <?php foreach($data["players"] as $player) { ?>
                        <tr>
                            <td>
                                <a href="/player?id=<?php echo $player['id'] ?>"><?php echo $player["name"]; ?></a>
                            </td>
                            <td><?php echo $player["team_code"]; ?></td>
                            <td><?php echo $player["age"]; ?></td>
                            <td><?php echo $player["games"]; ?></td>
                            <td><?php echo $player["minutes_played"]; ?></td>
                            <td><?php echo $player["free_throws_attempted"]; ?></td>
                            <td><?php echo $player["offensive_rebounds"]; ?></td>
                            <td><?php echo $player["defensive_rebounds"]; ?></td>
                            <td><?php echo $player["assists"]; ?></td>
                            <td><?php echo $player["steals"]; ?></td>
                            <td><?php echo $player["blocks"]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        
        <?php include(VIEW_PATH.'/layout/scripts.php') ?>
    </body>
</html>