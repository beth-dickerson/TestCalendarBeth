<?php
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
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
function toItalics($word){
	$word = "<em>" . $word . "</em>";
	return $word;
}
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
				<h1>This <?php echo toItalics("Week");?></h1>
			</div>
			<ul class="calendar-week-list">
				<?php foreach($days as $dayIndex => $day): ?>
					<li class="calendar-week-list-day">
						<h4><?php echo toItalics($day);?></h4>
						<?php if(isset($result[$dayIndex])): ?>
							<ol>
								<?php foreach($result[$dayIndex] as $description): ?>
									<li> <?php echo $description; ?>
									</li>
								<?php endforeach; ?>
							</ol>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

	</body>
</html>
