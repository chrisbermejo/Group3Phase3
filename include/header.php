<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
/* 

    CSC350 Sample code to create a navigation panel and a News section that can be used
    in an INCLUDE php statement.
    Note:  CSS class use the normalize.css and skeleton.css files from GPL sources
    Function:  get_task_news() retrieves a string of concatenated columns and text literals
    from the projectdb table and assigned as News column.  mysqli functions utilized to
    get the results and print in the html page.  rowcount is returned.

    Required modifications:  
      Change the connection and SQL to retrieve current rows from the task table.
      Change the navigation button href values to call the correct module from each group

    Author:  Prof Jose Ramon Santos 2022-10-19
*/
function get_task_news($projectid) {
  // require ('../mysqli_connect_cscdb.php');z
  // $userpath=getenv("USERPROFILE");
  require ("../local_mysqli_connect_cscdb.php");
  mysqli_set_charset($dbc, 'utf8mb4');
  // Run INSERT SQL
    // $query = "select concat(description,' completed on ',date_target ,' by ', m.name) as 'News'
    // from task t join member m on t.memberid = m.memberid
    // where taskid < (select max(taskid) from task) and taskid > (select min(taskid) - 8 from task);";
    // $result = mysqli_query($dbc,$query);
    // $rowcount = $result->num_rows;
    // if ($rowcount > 0) {
    //   print '<p>Todays news</p>';
    //   print '<p>';
    //   for ($r = 0;$r < $rowcount;$r++) {
    //     $newsitems = $result->fetch_assoc();
    //     print $r+1 . '-' . $newsitems['News'] . '<br>';
    //   }
    //   print '</p>';   
    // } else {
    //   print '<p>' . mysqli_error($dbc) . '</p>';
    // }
    // mysqli_close($dbc); // Close the connection.
    // return $rowcount;
    return 0;
}
?>
<div class="container">
<a class="button" href="index.php">Home</a>
<a class="button" href="view_project.php">Project</a>
<a class="button" href="view_team.php">Group</a>
<a class="button" href="view_task.php">Task</a>
<a class="button" href="view_member.php">Member</a>
<a class="button" href="view_issue.php">Issue</a>
</div>
<div class="container">
		<h1>CSC350 Project 1 Project Management Tool</h1>
    <?php
    $newslines = get_task_news(1);
    print '<p>Reported ' . $newslines . ' updates.</p>';
    ?>
</div>