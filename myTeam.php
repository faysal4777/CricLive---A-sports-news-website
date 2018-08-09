<?php
	session_start();
	error_reporting(0);

	if(!isset($_SESSION['log']))
    {
        header("location: login.html");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CricLive - Cricket Score, News</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body>
    <table width="100%" style="color:green;" height="50px">
        <tr >
            <td width="10%"><a href="user.php"><center>CricLive</center></a></td>
            <td width="10%" style="color:green;"><a href="viewScore.php"><center>Live Score</center></a></td>
            <td width="10%"><a href="#"><center>Series</center></a></td>
            <td width="50%"></td>
            <td width="10%"><a href="profile.php"><center>Profile</center></a></td>
            <td width="10%"><a href="logout.php"><center>Log Out</center></a></td>
            
        </tr>
    </table >
    <br/>
    <table width="100%">
        <tr>
            <td  width="20%" valign="top">
                
                <table  width="100%" border="1">
                    <tr>
                        <center>
                            <td>

                                <ul>
                                <li><a href="user.php">Timeline</a></li>
                                <li><a href="#"> My Team</a></li>
                                <li><a href="ranking.php"> My Ranking</a></li>
                                <li><a href="poll.php"> Current Polls </a></li>
                              </ul>

                            </td>
                            
                        </center>
                    </tr>
                </table>
                
            </td>
            <td  width="5%"></td>
            <td width="75%">
                <table  width="100%" border="1">
                    <tr>
                        <td>
                            <div>
                              <center><h3>Available Balance: $665</h3></center>
                              <h3>My Squad</h3>
                            </div>
                              <table width="100%">
                                <thead>
                                <tr role="row">
                                    <th><center>Position</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Country</center></th>
                                    <th><center>Type</center></th>
                                    <th><center>Rating</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td><center>1</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Batsman</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>2</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Batsman</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>3</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Batsman</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>4</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Batsman</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>5</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Wicket Keeper</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>6</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>All Rounder</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>7</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>All Rounder</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>8</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Bowler</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>9</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Bowler</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>10</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Bowler</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                      <td class="sorting_1"><center>11</center></td>
                                      <td><center>ABC</center></td>
                                      <td><center>Australia</center></td>
                                      <td><center>Bowler</center></td>
                                      <td><center>8</center></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1"><center>Position</center></th>
                                        <th rowspan="1" colspan="1"><center>Name</center></th>
                                        <th rowspan="1" colspan="1"><center>Country</center></th>
                                        <th rowspan="1" colspan="1"><center>Type</center></th>
                                        <th rowspan="1" colspan="1"><center>Rating</center></th>
                                    </tr>
                                </tfoot>
                          </table>
                        </td>
                    </tr>
                   
                </table>
            </td>
        </tr>
    </table>
    <br/>
    <?php include 'footer.php';?>
</body>
</html>
