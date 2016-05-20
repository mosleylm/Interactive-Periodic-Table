<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Periodically Working: a Chemistry Helper</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Periodically Working <small>Interactive Periodic Table</small>
				</h1>
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Periodic table</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="eqList.php">Reactions</a>
						</li>
						<li>
							<a href="cmpList.php">Compounds</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					</ul>
				</div>
				
			</nav>
			<table style="width:70%" style="font-size:100%">
				<tbody>
				<?php
					try{
						$elemDB = new PDO('sqlite:prototype.db');
						$result = $elemDB->query("SELECT abbreviation, atomic_num, name FROM ELEMENT");
						$resArr = $result->fetchAll();

						echo "<tr>";
						echo "<td class='blank'><p class='groupName'>1A</p></td>";
						echo "<td colspan='16' class='blank'></td>";
						echo "<td class='blank'><p class='groupName'>8A</p></td>";
						echo "</tr>";

						/*
						 * Row 1
						 */
						echo "<tr>";

						echo "<td><p class='atomN'>";
						echo $resArr[0]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=1'";
						echo ">";
						echo $resArr[0]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[0]['name'];
						echo "</p>";
						echo "</td>";

						echo "<td class='blank'><p class='groupName'>2A</p></td>";
						echo "<td colspan='10' class='blank'></td>";
						echo "<td class='blank'><p class='groupName'>3A</p></td>";
						echo "<td class='blank'><p class='groupName'>4A</p></td>";
						echo "<td class='blank'><p class='groupName'>5A</p></td>";
						echo "<td class='blank'><p class='groupName'>6A</p></td>";
						echo "<td class='blank'><p class='groupName'>7A</p></td>";

						echo "<td><p class='atomN'>";
						echo $resArr[1]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=2'";
						echo ">";
						echo $resArr[1]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[1]['name'];
						echo "</p>";
						echo "</td>";

						echo "</tr>";

						/*
						 * Row 2
						 */
						echo "<tr>";

						echo "<td><p class='atomN'>";
						echo $resArr[2]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=3'";
						echo ">";
						echo $resArr[2]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[2]['name'];
						echo "</p>";
						echo "</td>";

						echo "<td><p class='atomN'>";
						echo $resArr[3]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=4'";
						echo ">";
						echo $resArr[3]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[3]['name'];
						echo "</p>";
						echo "</td>";

						echo "<td colspan='10' class='blank'></td>";

						echo "<td class='metalloid'><p class='atomN'>";
						echo $resArr[4]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=5'";
						echo ">";
						echo $resArr[4]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[4]['name'];
						echo "</p>";
						echo "</td>";

						$i=5;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "</tr>";

						/*
						 * Row 3
						 */
						echo "<tr>";

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td class='blank'><p class='groupName'>3B</p></td>";
						echo "<td class='blank'><p class='groupName'>4B</p></td>";
						echo "<td class='blank'><p class='groupName'>5B</p></td>";
						echo "<td class='blank'><p class='groupName'>6B</p></td>";
						echo "<td class='blank'><p class='groupName'>7B</p></td>";
						echo "<td class='blank'><p class='groupName'>8B</p></td>";
						echo "<td class='blank'><p class='groupName'>8B</p></td>";
						echo "<td class='blank'><p class='groupName'>8B</p></td>";
						echo "<td class='blank'><p class='groupName'>1B</p></td>";
						echo "<td class='blank'><p class='groupName'>2B</p></td>";

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td class='metalloid'><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "</tr>";

						/*
						 * Row 4
						 */
						echo "<tr>";

						$ind=0;
						echo "<tr>";

						while($ind < 18) {
							if($i == 31 or $i == 32) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}

						echo "</tr>";

						/*
						 * Row 5
						 */

						$ind=0;
						echo "<tr>";

						while($ind < 18) {
							if($i == 50 or $i == 51) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}

						echo "</tr>";

						/*
						 * Row 6
						 */
						echo "<tr>";

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td><p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = 71;

						$ind=0;
						while($ind < 15) {
							if($i == 83) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}

						echo "</tr>";

						/*
						 * Row 7
						 */

						echo "<tr>";

						echo "<td>";
						echo "<p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td>";
						echo "<p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = $i + 1;

						echo "<td>";
						echo "<p class='atomN'>";
						echo $resArr[$i]['atomic_num'];
						echo "</p>";
						echo "<p class='abbreviation'>";
						echo "<a href='ElementView.php?eID=";
						echo $i+1;
						echo "'>";
						echo $resArr[$i]['abbreviation'];
						echo "</a>";
						echo "<p class='name'>";
						echo $resArr[$i]['name'];
						echo "</p>";
						echo "</td>";
						$i = 103;

						$ind=0;
						while($ind < 9) {
							if($i == 83) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}

						echo "</tr>";

						echo "<tr>";
						echo "<td colspan='1' class='blank'></td>";
						echo "</tr>";

						/*
						 * 58-71
						 */
						echo "<tr>";
						echo "<td colspan='4' class='blank'></td>";
						$i=57;
						$ind=0;
						while($ind < 9) {
							if($i == 83) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}
						echo "</tr>";

						/*
						 * 90-103
						 */
						echo "<tr>";
						echo "<td colspan='4' class='blank'></td>";
						$i=89;
						$ind=0;
						while($ind < 9) {
							if($i == 83) {
								echo "<td class='metalloid'>";
							}
							else {
								echo "<td>";
							}

							echo "<p class='atomN'>";
							echo $resArr[$i]['atomic_num'];
							echo "</p>";
							echo "<p class='abbreviation'>";
							echo "<a href='ElementView.php?eID=";
							echo $i+1;
							echo "'>";
							echo $resArr[$i]['abbreviation'];
							echo "</a>";
							echo "<p class='name'>";
							echo $resArr[$i]['name'];
							echo "</p>";
							echo "</td>";
							$i = $i + 1;
							$ind = $ind + 1;
						}
						echo "</tr>";



					} catch (PDOException $e){
						echo $e;
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>