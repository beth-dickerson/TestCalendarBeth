<?php
// $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
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
		],
	"2016-09-06" => [
		"cutting hair",
		"vr roller coaster"
		],
	"2016-08-26" => [
		"happy birthday, grandma!"
		]
];
// Get start of week
/*
homework:
1. make sure the GET value is the right date format (ex. y-m-d)
2. make sure the default date is always on Sunday
*/
if(isset($_GET["start"])){ 
	$dayStart = $_GET["start"];
} else {
	$dayStart = date("Y-m-d");
// get the numeric rep of the day of the week
// get a new date by subtracting the prev number of days from today
// make sure it's in the correct format Y-m-d	
}
$dayStartTimestamp = strtotime($dayStart);

// Get next week
$stamp = strtotime("$dayStart +1 week");
$nextWeekDayStart = date("Y-m-d", $stamp);

// Get previous week
$prevWeekDayStart = date("Y-m-d", strtotime("$dayStart -1 week"));
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
			<a href="?start=<?php echo $nextWeekDayStart;?>">next week</a>
			<a href="?start=<?php echo $prevWeekDayStart;?>">previous week</a>
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
