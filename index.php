<?php
// $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$dayStart = "2016-08-07";
$result = [
	"2016-08-07" => [
		"go to brunch", 
		"meet up with jamie and tori"
		],
	"2016-08-09" => [
		"back to work",
		"go rock climbing"
		],
	"2016-08-10" => [
		"rock climbing gym closes :("
		]
];

/*
$basicArray = ["red", "hi" => "green", "blue"];
$basicArray[1];

$fancyArray = ["color" => "red", "shape" => "circle"];
$fancyArray["color"];

function toItalics($word){
	$word = "<em>" . $word . "</em>";
	return $word;
}
$i = 0;
// for($i = 0; $i < 7; $i = $i + 1)
while($i < 7){
	echo $days[$i++];
}
*/
?>

<!DOCTYPE html>
<html>
	<head>
			<title>My Calendar Page</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="calendar-week">
			<div class="calendar-week-title">
				<h1>This <?php echo ("Week");?></h1>
			</div>
			<ul class="calendar-week-list">
				<?php for($dayAdd = 0; $dayAdd < 7; $dayAdd++): 
					// 2016-08-07 +1 days
					$timestamp = strtotime("$dayStart +$dayAdd days");
					$dayKey = date("Y-m-d", $timestamp);
					?>
					<li class="calendar-week-list-day">
						<h4><?php echo date("l", $timestamp);?>
							<strong> <?php echo date("M. jS", $timestamp);?></strong>
						</h4>
						<?php if(isset($result[$dayKey])): ?>
							<ol>
								<?php foreach($result[$dayKey] as $description): ?>
									<li> <?php echo $description; ?>
									</li>
								<?php endforeach; ?>
							</ol>
						<?php endif; ?>
					</li>
				<?php endfor; ?>
			</ul>
		</div>

	</body>
</html>
