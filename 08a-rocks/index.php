<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("rock_collector") or die(mysql_error());

$rocks = mysql_query("SELECT * FROM rock") or die(mysql_error());
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rocks</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-2.0.3.min.js"></script>
  <script src="js/onload.js"></script>
</head>
<body>
  <div class="wrap">
    <header id="main-header">
      <h1>Rocks I have collected</h1>
      <p>I picks ’em up, I gives ’em away.</p>
    </header>
    <table class="rocks-list">
      <tr>
        <th>Where</th>
        <th>Diameter</th>
        <th>Color</th>
        <th>Who is it for?</th>
        <th colspan="2">Given away?</th>
        <th>&nbsp;</th>
      </tr>
      <?php while ($rock = mysql_fetch_array($rocks)) { ?>
        <tr>
          <td><?php echo($rock['whereFound']); ?></td>
          <td><?php echo($rock['diameter']); ?> cm</td>
          <td><?php echo($rock['color']); ?></td>
          <td><?php echo($rock['who']); ?></td>
          <?php
          if ( ($rock['given']) == '1' ) {
            $given = "Yes";
          } else {
            $given = "No";
          }
          ?>
          <td><?php echo($given); ?></td>
          <?php if ( $given == "No" ) { ?>
            <td><a href="give.php?id=<?php echo($rock['id'])?>">[Give it away]</a></td>
          <?php } else { ?>
            <td>&nbsp;</td>
          <?php } ?>
          <td><a href="delete.php?id=<?php echo($rock['id'])?>">Put it back</a></td>
        </tr>
      <?php } ?>
    </table>
    <a href="#" id="add-rock-button" class="button">New rock</a>
    <form action="create.php" id="add-rock-form" method="post">
      <ul>
        <li>
          <label for="where">Where did I find it?</label>
          <select name="where">
            <option value="High Park">High Park</option>
            <option value="Sibelius Park">Sibelius Park</option>
            <option value="Algonquin Park">Algonquin Park</option>
            <option value="Cowan Parkette">Cowan Parkette</option>
            <option value="Waterfront Marshes">Waterfront Marshes</option>
          </select>
        </li>
        <li>
          <label for="diameter">Diameter</label>
          <input id="diameter" type="text" name="diameter">
        </li>
        <li>
          <label for="color">Color</label>
          <input id="color" type="text" name="color">
        </li>
        <li>
          <label for="who">Who am I going to give it to?</label>
          <select name="who">
            <option value="Max Hughes">Max Hughes</option>
            <option value="Andree Weisman">Andree Weisman</option>
            <option value="Chris Banks">Chris Banks</option>
            <option value="Mom">Mom</option>
            <option value="Michael Jones">Michael Jones</option>
          </select>
        </li>
        <li>
          <input type="submit" value="Add it.">
        </li>
      </ul>
    </form>

  </div>
</body>
</html>