<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "privatetweet";
  
// Password is empty
$password = "privatetweet";
  
// Creating a connection
$conn = mysqli_connect($servername, 
            $username, $password);

mysqli_select_db( $conn, 'privatetweet_tweets' );
 
$sql="INSERT INTO jenna_tweets (tweet_content, time)
VALUES
('$_POST[paragraph_text]', CURRENT_TIMESTAMP())";
 
if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysql_error());
  }
echo "Tweet saved. Click back to submit another tweet.";
 
mysqli_close($conn)
?>
<p>
<a href="index.php">Back</a>
</body>
</html>