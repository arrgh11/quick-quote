<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script type="text/javascript" src="js/quick_quote.js"></script>

</head>
<title>
Quick Quote
</title>

<body>


<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<h2>O'Neil Printing Quick Quote</h2>
		<form name="quick_quote">

		<div class="row">
			<div class="col-md-4">
				<h2><small>Client Company:</small></h2><input type="text" id="company" class="form-control" />
			</div>
			<div class="col-md-4">
				<h2><small>Client Contact:</small></h2><input type="text" id="contact" class="form-control" />
			</div>
			<div class="col-md-4">
				<h2><small>Client Email:</small></h2><input type="text" id="email" class="form-control" />
			</div>
		</div>

		<div class="row">
			<div class="col-md-12"><h2><small>Sales Rep:</small></h2>
				<select id="sales_rep" class="form-control">
					<option value="anthony_narducci_sig.jpg">Anthony Narducci</option>
					<option value="anthony_narducci_sig.jpg">Bob Alderson</option>
					<option value="anthony_narducci_sig.jpg">Brent Gehre</option>
					<option value="anthony_narducci_sig.jpg">Bruce VanderHaar</option>
					<option value="anthony_narducci_sig.jpg">Candice Scott</option>
					<option value="anthony_narducci_sig.jpg">Chandler Yelton</option>
					<option value="anthony_narducci_sig.jpg">Connie Forney</option>
					<option value="anthony_narducci_sig.jpg">Cynthia Brussels</option>
					<option value="anthony_narducci_sig.jpg">Dick Ganzert</option>
					<option value="anthony_narducci_sig.jpg">Jason Hogue</option>
					<option value="anthony_narducci_sig.jpg">Lucy Lawrence</option>
					<option value="anthony_narducci_sig.jpg">Michael Szymanski</option>
					<option value="anthony_narducci_sig.jpg">Nicole Kuszynski</option>
					<option value="anthony_narducci_sig.jpg">Norb Rasmussen</option>
					<option value="anthony_narducci_sig.jpg">Scott Maines</option>
					<option value="anthony_narducci_sig.jpg">Sean Laizure</option>
					<option value="anthony_narducci_sig.jpg">Rhonda O'Shea</option>
				</select>
			</div>
		</div>

		<h2><small>Description:</small></h2>
		<textarea class="form-control" rows="3" id="desc"></textarea>

		<div class="row">
			<div class="col-md-12">
				<h2><small>Quantities:</small></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				<h5>QTY1</h5>
				<input type="text" id="qty_1" class="form-control" />
			</div>
			<div class="col-md-2">
				<h5>QTY2</h5>
				<input type="text" id="qty_2" class="form-control" />
			</div>
			<div class="col-md-2">
				<h5>QTY3</h5>
				<input type="text" id="qty_3" class="form-control"/>
			</div>
			<div class="col-md-2">
				<h5>QTY4</h5>
				<input type="text" id="qty_4" class="form-control"/>
			</div>
			<div class="col-md-2">
				<h5>QTY5</h5>
				<input type="text" id="qty_5" class="form-control"/>
			</div>
			<div class="col-md-2">
				<h5>QTY6</h5>
				<input type="text" id="qty_6" class="form-control"/>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h2><small>Flat Trim Size:</small></h2>
					<input type="text" id="flat_length" class="form-control"/> X <input type="text" id="flat_width" class="form-control"/>
			</div>
			<div class="col-md-6">
				<h2><small>Folded Size:</small></h2>
					<input type="text" id="fold_length" class="form-control"/> X <input type="text" id="fold_width" class="form-control"/>
			</div>
		</div>

		<div class="row">
			<h2><small>Ink:</small></h2>
			<div class="col-md-4">
				<h5>Front:</h5>
				 <select id="ink_front" class="form-control">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			    </select>
			</div>
			<div class="col-md-4">
				<h5>Back:</h5>
					<select id="ink_back" class="form-control">
					    <option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
			</div>
			<div class="col-md-4">
				<h5>AQ:</h5>
					<select id="aq" class="form-control">
						<option value="0">None</option>
						<option value="1" id="OA_Gloss_1">OA Gloss AQ 1 Side</option>
						<option value="2" id="OA_Gloss_2">OA Gloss AQ 2 Sides</option>
						<option value="3" id="OA_Satin_1">OA Satin AQ 1 Side</option>
						<option value="4" id="OA_Satin_2">OA Satin AQ 2 Sides</option>
					</select>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8">
				<h2><small>Paper:</small></h2>
					<select id="paper" class="form-control">
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->sixtyuncoated;
								?>">60# Text Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->seventyuncoated;
								?>">70# Text Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightytextgloss;
								?>">80# Text Gloss</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightytextmatte;
								?>">80# Text Matte</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightytextsilk;
								?>">80# Text Silk (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightytextuncoated;
								?>">80# Text Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredtextgloss;
								?>">100# Text Gloss</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredtextmatte;
								?>">100# Text Matte</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredtextsilk;
								?>">100# Text Silk (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredtextuncoated;
								?>">100# Text Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightycovergloss;
								?>">80# Cover Gloss</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightycovermatte;
								?>">80# Cover Matte</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightycoversilk;
								?>">80# Cover Silk (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->eightycoveruncoated;
								?>">80# Cover Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredcoverclassic;
								?>">100# Cover Classic Crest-Solar (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredcovergloss;
								?>">100# Cover Gloss</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredcovermatte;
								?>">100# Cover Matte</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredcoversilk;
								?>">100# Cover Silk (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->hundredcoveruncoated;
								?>">100# Cover Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->elevencovercoated;
								?>">111# Cover Coated Silk (12x18 Only)</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->twentycovergloss;
								?>">120# Cover Gloss</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->twentycoveruncoated;
								?>">120# Cover Uncoated</option>
						<option value="<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->thirtycovermatte;
								?>">130# Cover Matte</option>
					</select>
			</div>
			<div class="col-md-4">
				<h2><small>Paper Size:</small></h2> 
					<input type="radio" value="1" name="paper_size"> 12x18</input>
					<input type="radio" value="2" name="paper_size"> 13x19</input>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2><small>Proofs:</small></h2>
			</div>
			<div class="col-md-6">
				<input type="checkbox" value="PDF / Internal Proof" name="proof" id="pdf"> PDF / Internal Proof</input>
			</div>
			<div class="col-md-6">
				<input type="checkbox" value="External Proof" name="proof" id="external"> External Proof</input>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2><small>Finishing:</small></h2>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-2">
				<input type="checkbox" value="Trim" name="finishing" id="trim"> Trim</input>
			</div>
			<div class="col-md-2">
				<input type="checkbox" value="Fold (Score if needed)" name="finishing" id="fold"> Fold (Score if needed)</input>
			</div>
			<div class="col-md-2">
				<input type="checkbox" value="Score (Only)" name="finishing" id="score"> Score (Only)</input>
			</div>
			<div class="col-md-2">
				<input type="checkbox" value="Perf" name="finishing" id="perf"> Perf</input>
			</div>
			<div class="col-md-2">
				<input type="checkbox" value="Drill" name="finishing" id="drill"> Drill</input>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3><small>Round Corner:</small></h3>
					<select id="rounded_corner_options" class="form-control">
						<option value="0">None</option>
						<option value="1">1/8"</option>
						<option value="2">1/4"</option>
						<option value="3">3/8"</option>
						<option value="4">1/2"</option>
					</select>	
			</div>
			<div class="col-md-4">
				<h3><small>Pad In:</small></h3>
					<input type="text" id="pad_in" class="form-control"></input>	
			</div>
			<div class="col-md-4">
				<h3><small>Shrink In:</small></h3>
					<input type="text" id="shrink" class="form-control"></input>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2><small>Miscellaneous:</small></h2>
					<textarea class="form-control" id="misc" rows="2"></textarea>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2><small>Delivery:</small></h2>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-3">
				<input type="checkbox" name="delivery" id="ups"> O'Neil UPS, FedEx</input>
			</div>
			<div class="col-md-3">
				<input type="checkbox" name="delivery" id="local_delivery_option"> O'Neil Local Delivery</input>
			</div>
			<div class="col-md-3">
				<input type="checkbox" name="delivery" id="third_party_option"> 3rd Party Carrier</input>
			</div>
			<div class="col-md-3">
				<input type="checkbox" name="delivery" id="pickup_option"> Pickup</input>
			</div>
			
		</div>

<br />
<br />
		


<button type="button" onclick="generatePrice()" class="btn btn-primary">Generate Price</button> <br /><br />

			Your price:<INPUT type="text" id="generated_price" readonly style="color:red;" class="form-control"/>

			</form>

</div>
</div>

<br><br><br>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form method="post" action="loq_qq.php">
		    <input type="hidden" id="get_desc" name="get_desc" value="">
		    <input type="hidden" id="get_trim" name="get_trim" value="">
		    <input type="hidden" id="get_paper" name="get_paper" value="">
		    <input type="hidden" id="get_ink" name="get_ink" value="">
		    <input type="hidden" id="get_media" name="get_media" value="">
		    <input type="hidden" id="get_proofs" name="get_proofs" value="">
		    <input type="hidden" id="get_finishing" name="get_finishing" value="">
		    <input type="hidden" id="get_misc" name="get_misc" value="">
		    <input type="hidden" id="get_delivery" name="get_delivery" value="">
		    <input type="hidden" id="get_total" name="get_total" value="">

		    <button type="submit" class="btn btn-info btn-lg" label="Generate Quote" onclick="generateQuote()">Generate Letter of Quote</button>
		</form>
	</div>
</div>




</body>

</html>
