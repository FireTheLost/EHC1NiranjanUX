<?php
include 'header.php';
include '../includes/conn.php';
?>

<h1 id="join-h1">Have Any Questions?</h1>
<h3 id="join-h3">Ask Fellow Penguins Here For Help!</h3>

<div id="forum-all">
<section id="form">
  <div>
  <h2 id="ask-h1">Ask Question</h2>
  <form action="question.php" method="post">
  <div class="fields"><center>
    <br>
    <input class="text" type="text" name="name" placeholder="Enter A Username...">
    <br>
    <textarea class="textarea" type="text" name="message" placeholder="Ask Your Question Or Answer One..." maxlength="256"></textarea>
    <br>
    <br>
    <button id="subbutton" type="submit" name="submit">Post</button></center>
  </div>
  
  <?php
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "error")
    {
        echo '<p style="margin-top: 20px; color:red; font-size:20px; text-align: center">Sorry, Something Went Wrong</p>';
    }
    else if ($_GET["error"] == "none")
    {
        echo '<p style="margin-top: 20px; color:green; font-size:20px; text-align: center">Message Posted Successfully</p>';
    }
}
?>
  </div>
</section>

<div id="all">

<?php
$sql = "SELECT * FROM forum ORDER BY forumId desc";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<div class='post'>
                  <h2 id='user'>" . $row['forumUser'] . "</h2>
                  <p id='what'>Said: " . $row['forumMessage'] . "</p>
                  <h3 id='time'>At: " . $row['forumTime'] . "</h3>
                </div>
                <br>";
    }
}
else
{
	echo "<h1 id='no-post'>No Posts Yet<h1><h2 id='also-no-post'>Be The First To Post Now</h2>";
}
?>

</div>
</div>

<?php
include 'footer.php';
?>
