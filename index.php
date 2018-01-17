                

<!DOCTYPE html>
<html>
	<head>
		<title>FAQ Slider Accordion</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="assets/js/script.js"></script>
	</head>
	<body>
		<div id="container">
			<h1>jQuery FAQ Slider </h1>
			<ul class="faq" id="menu">
				<li class="q"><span>Section</span> <img src="assets/img/arrow.png"></li>
				<li class="a">
					 <?php $json = file_get_contents('http://design.propcom.co.uk/buildtest/accordion-data.json');
                      $json = json_decode($json, true);
                       //echo $json['blocks'][0][headings]
                        
                      $output .= "<ul>";
                        foreach($json["blocks"] as $blocks) {
                            $output .= "<li>".$blocks['heading']."</li>";
                            $output .= "<li>".$blocks['content']."</li>";
                        
                        }
                        $output .= "</ul>";
                        echo $output;

                        ?>
					</li>
				<li class="q"><span>Section 2 </span> <img src="assets/img/arrow.png"></li>
				<li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>
				
				<li class="q"><span>Section 3</span> <img src="assets/img/arrow.png"></li>
				<li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>
			</ul>
	
		
		<script>
			
			var $li = $('#menu li').click(function() {
				$li.removeClass('selected');
				$(this).addClass('selected');
			});
			
			
		</script>
			
		</div>
	</body>
</html>

<!-- <li class="q"> Section <i class="fa fa-chevron-right fa-rotate-90" aria-hidden="true"></i></li> -->