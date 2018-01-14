<?php

$weekday = date('l');
$color = '';
$picture = '';
$greeting = '';
$comment = '';
$alt = '';
$year = date('Y');

switch($weekday)
			{
				case 'Monday':
				$picture='images/monday.jpg';
				$greeting="Monday's don't mean a thing to a cat";
				$color='#FCDEFD';
                $comment='Scratch leg; meow for can opener to feed me cat not kitten around for hiss at vacuum cleaner yet hide when guests come over, but refuse to leave cardboard box for always hungry or playing with balls of wool. This human feeds me, i should be a god human is washing you why halp oh the horror flee scratch hiss bite, kick up litter put toy mouse in food bowl run out of litter box at full speed thinking longingly about tuna brine.';
				break;
					
				case 'Tuesday':
				$picture='images/tuesday.jpg';
				$greeting="Tuesday is a breeze";
				$color='#D8D6E9';
                $comment='Have my breakfast spaghetti yarn howl uncontrollably for no reason, leave dead animals as gifts stares at human while pushing stuff off a table or flee in terror at cucumber discovered on floor. Meow meow, i tell my human thinking longingly about tuna brine. Refuse to drink water except out of a glass human is washing you why halp oh the horror flee scratch hiss bite.';
				break;
					
				case 'Wednesday':
				$picture='images/wednesday.jpg';
				$greeting="Hang In There, the week is half way over!";
				$color='#ECDEEA';
                $comment='up plays league of legends. Hide at bottom of staircase to trip human meowing non stop for food for have secret plans so get video posted to internet for chasing red dot, lay on arms while you are using the keyboard and going to catch the red dot today going to catch the red dot today. Scratch at the door then walk away sleep nap yet thug cat or scratch at the door then walk away roll on the floor purring your whiskers off for hack up furballs. Unwrap toilet paper. ';
				break;
					
				case 'Thursday':
				$picture='images/thursday.jpg';
				$greeting="Bird Watching Day";
				$color='#E9EAD7';
                $comment=' Need to chase tail please stop looking at your phone and pet me so mew but refuse to leave cardboard box. Hunt by meowing loudly at 5am next to human slave food dispenser attack feet swat at dog, yet kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff a nice warm laptop for me to sit on or lies down.';
				break;
					
				case 'Friday':
				$picture='images/friday.png';
				$greeting="TGIF";
				$color='##F1E3C9';
                $comment='Caticus cuteicus man running from cops stops to pet cats, goes to jail. Cat snacks. Intently stare at the same spot favor packaging over toy damn that dog . Meow all night having their mate disturbing sleeping humans stretch, but pelt around the house and up and down stairs chasing phantoms so rub face on owner. See owner, run in terror.';
				break;
					
				case 'Saturday':
				$picture='images/saturday.jpg';
				$greeting="Finally, I get to sleep in";
				$color='#FFDCDD';
                $comment='Purr for no reason put toy mouse in food bowl run out of litter box at full speed shove bum in owners face like camera lens bathe private parts with tongue then lick owners face sleep on dog bed, force dog to sleep on floor. Eat all the power cords i cry and cry and cry unless you pet me, and then maybe i cry just for fun yet ears back wide eyed but kick up litter, plan steps for world domination tuxedo cats always looking dapper.';
				break;
					
				case 'Sunday':
				$picture='images/sunday.jpg';
				$greeting="Where does the time go?!";
				$color='#D4F4F2';
                $comment=' Meow to be let out kitty scratches couch bad kitty but put toy mouse in food bowl run out of litter box at full speed lick sellotape so massacre a bird in the living room and then look like the cutest and most innocent animal on the planet. Intently stare at the same spot sleep nap yet hiss at vacuum cleaner and run outside as soon as door open for annoy owner until he gives you food say meow repeatedly until belly rubs, feels good.';
				break;
					
				default:
				$picture='images/default.jpg';
				$greeting="Everyday is Cat-erday!";
                $comment='With tail in the air dream about hunting birds, eat the fat cats food so knock over christmas tree plan steps for world domination and sit on human for spread kitty litter all over house. If it smells like fish eat as much as you wish then cats take over the world give attitude annoy owner until he gives you food say meow repeatedly until belly rubs, feels good. Hate dog this human feeds me, i should be a god plan steps for world domination sleep in the bathroom sink.';
				$color='#FCDEFD';
			}
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow" />

<title>A2: Caterday Home</title>
<link href="css/styles.css" id="mainStylesheet" rel="stylesheet" />
	<style>
        
       
        
        .feature{color:<?=$color?>;}
        
        
        div#wrapper {
			width:940px;
			margin:20px auto;
			padding:20px;
			background-color: <?php echo $color?>;
			}
		
		h2{
			font-size:2em;
			font-family:"comic-sans-ms", Cursive;
			color:#221fe0;
			clear:right;
			margin-bottom:7px;
			}
		
		img.cat {
			float:right;
			padding-left:20px;
			width:400px;
			}
	</style>
</head>

<body  class="feature">

<div id="wrapper">
<main>
<header>
	<h1>Happy Cat-erday!<img src="images/kitten.jpg" alt="kitten" class="kitten" id="kitten"></h1>
	<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
</header>


<h2 class="greeting">Welcome, <strong><?=$greeting?></strong></h2>


<img src=<?=$picture?> alt="Today's Cat" class="cat" id="cat"/>

<p><?=$comment?></p>
    
<p>Have a great <strong><?=$weekday?></strong> </p>

<p>Text provided by <a href="https://www.shopify.com/partners/blog/79940998-15-funny-lorem-ipsum-generators-to-shake-up-your-design-mockups" target="_blank">Hipster Ipsum</a></p>

</main>
<footer>
<ul>
<li>Copyright &copy; <?=date("Y")?></li>
<a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
<a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>

</ul>
	
</footer>

</div><!--end wrapper-->
        
 <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.day a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var day = $(this).attr("href");//contents of href attribute of this element
			var $shade
			var stylesheet = $('#mainStylesheet');
			day = day.toLowerCase();
			
			
			var day = "css/" + day + ".css";
			$(stylesheet).attr("href",day);
			});
		});
    </script>
	
</body>
</html>