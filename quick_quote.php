<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



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
		


<button type="button" onclick="generatePrice()" class="btn btn-primary">Generate Quote</button> <br /><br />

			Your price:<INPUT type="text" id="generated_quote" readonly style="color:red;" class="form-control"/>

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

<script type="text/javascript">

function paperCosts() {

	var qnty_1 = document.getElementById("qty_1").value;
	var qnty_2 = document.getElementById("qty_2").value;
	var qnty_3 = document.getElementById("qty_3").value;
	var qnty_4 = document.getElementById("qty_4").value;
	var qnty_5 = document.getElementById("qty_5").value;
	var qnty_6 = document.getElementById("qty_6").value;

	qnty_1 = parseInt(qnty_1);
  	qnty_2 = parseInt(qty_2);
  	qnty_3 = parseInt(qty_3);
  	qnty_4 = parseInt(qty_4);
  	qnty_5 = parseInt(qty_5);
  	qnty_6 = parseInt(qty_6);

  	var paper_type = document.getElementById("paper");
	var paper_price = paper_type.options[paper_type.selectedIndex].value;

	var paper_total = paper_price*qnty_1;
	var paper_cost = paper_total*0.15;
	var paper_cost_1 = paper_total+paper_cost;

	return paper_cost_1;
}


function indigoCosts(){

	var front_inks = document.getElementById("ink_front");
	var ink_front = front_inks.options[front_inks.selectedIndex].value;
	ink_front = parseInt(ink_front);

	var back_inks = document.getElementById("ink_back");
	var ink_back = back_inks.options[back_inks.selectedIndex].value;
	ink_back = parseInt(ink_back);

	var qnty_1_1 = document.getElementById("qty_1").value;
	var qnty_2_1 = document.getElementById("qty_2").value;
	var qnty_3_1 = document.getElementById("qty_3").value;
	var qnty_4_1 = document.getElementById("qty_4").value;
	var qnty_5_1 = document.getElementById("qty_5").value;
	var qnty_6_1 = document.getElementById("qty_6").value;

	qnty_1_1 = parseInt(qnty_1_1);
  	qnty_2 = parseInt(qty_2);
  	qnty_3 = parseInt(qty_3);
  	qnty_4 = parseInt(qty_4);
  	qnty_5 = parseInt(qty_5);
  	qnty_6 = parseInt(qty_6);

	var inks = ink_front+ink_back;
	var indigo = 0.019*inks;
	var indigo1 = indigo*qnty_1_1;
	var indigo2 = indigo1*1.15;
	var indigo3 = Math.round(indigo2*100)/100;

	return indigo3;
}

function aq_hard() {

	var qnty_1_2 = document.getElementById("qty_1").value;
	var qnty_2_2 = document.getElementById("qty_2").value;
	var qnty_3_2 = document.getElementById("qty_3").value;
	var qnty_4_2 = document.getElementById("qty_4").value;
	var qnty_5_2 = document.getElementById("qty_5").value;
	var qnty_6_2 = document.getElementById("qty_6").value;

	qnty_1_2 = parseInt(qnty_1_2);
  	qnty_2 = parseInt(qty_2);
  	qnty_3 = parseInt(qty_3);
  	qnty_4 = parseInt(qty_4);
  	qnty_5 = parseInt(qty_5);
  	qnty_6 = parseInt(qty_6);

	var aq_coat_cost3=0;
	var aq_sides = 0;

	var aq_opt = document.getElementById("aq");
	var include_aq = aq_opt.options[aq_opt.selectedIndex].value;

	include_aq = parseInt(include_aq);

	if (include_aq == 1 || include_aq == 3){
		var aq_sides = 1;
	} else if (include_aq == 2 || include_aq == 4) {
		var aq_sides = 2;
	} else {
		var aq_sides = 0;
	}

				    //If they checked the box set candlePrice to 5
	if(aq_sides != 0) {
		var aq_coat_cost = 0.017*qnty_1_2;
		var aq_coat_cost1 = aq_coat_cost*aq_sides;
		var aq_coat_cost2 = aq_coat_cost1*1.15;
		var aq_coat_cost3 = Math.round(aq_coat_cost2*100)/100;
	} else {
		var aq_coat_cost3 = 0;
	}

	
	return aq_coat_cost3;
}


	function generatePrices() {

	var qty_1 = document.getElementById("qty_1");
	var qty_2 = document.getElementById("qty_2");
	var qty_3 = document.getElementById("qty_3");
	var qty_4 = document.getElementById("qty_4");
	var qty_5 = document.getElementById("qty_5");
	var qty_6 = document.getElementById("qty_6");




	//AQ --------

	var front_inks = document.getElementById("ink_front");
	var ink_front = front_inks.options[front_inks.selectedIndex].value;

	var back_inks = document.getElementById("ink_back");
	var ink_back = back_inks.options[back_inks.selectedIndex].value;

	//PARSE --------------

	qty_1 = parseInt(qty_1);
  	qty_2 = parseInt(qty_2);
  	qty_3 = parseInt(qty_3);
  	qty_4 = parseInt(qty_4);
  	qty_5 = parseInt(qty_5);
  	qty_6 = parseInt(qty_6);

	

	flat_length = parseInt(flat_length);
  	flat_width = parseInt(flat_width);
	


	

	//INDIGO CLICK COST + MARKUP -------



}

//INKS ---------------------





function runRate(front_ink, back_ink) {
    if (front_ink == 1 && back_ink == 0) {
      var runRate = 6400;

    } else if (front_ink == 2 && back_ink == 0) {
      var runRate = 3200;

    } else if (front_ink == 3 && back_ink == 0) {
      var runRate = 2135;

    } else if (front_ink == 4 && back_ink == 0) {
      var runRate = 1600;

    } else if (front_ink == 1 && back_ink == 1) {
      var runRate = 3200;
    } else if (front_ink == 2 && back_ink == 1) {
      var runRate = 2135;
    } else if (front_ink == 3 && back_ink == 1) {
      var runRate = 1600;
    } else if (front_ink == 4 && back_ink == 1) {
      var runRate = 1280;
    } else if (front_ink == 1 && back_ink == 2) {
      var runRate = 2135;
    } else if (front_ink == 2 && back_ink == 2) {
      var runRate = 1600;
    } else if (front_ink == 3 && back_ink == 2) {
      var runRate = 1280;
    } else if (front_ink == 4 && back_ink == 2) {
      var runRate = 1070;
    } else if (front_ink == 1 && back_ink == 3) {
      var runRate = 1600;
    } else if (front_ink == 2 && back_ink == 3) {
      var runRate = 1280;
    } else if (front_ink == 3 && back_ink == 3) {
      var runRate = 1070;
    } else if (front_ink == 4 && back_ink == 3) {
      var runRate = 915;
    } else if (front_ink == 1 && back_ink == 4) {
      var runRate = 1280;
    } else if (front_ink == 2 && back_ink == 4) {
      var runRate = 1070;
    } else if (front_ink == 3 && back_ink == 4) {
      var runRate = 915;
    } else if (front_ink == 4 && back_ink == 4) {
      var runRate = 800;
    } else {
      var runRate = "wrong";
    }

    return runRate;

  }

function press() {

	var front_inks_1 = document.getElementById("ink_front");
	var ink_front_1 = front_inks_1.options[front_inks_1.selectedIndex].value;
	ink_front_1 = parseInt(ink_front_1);

	var back_inks_1 = document.getElementById("ink_back");
	var ink_back_1 = back_inks_1.options[back_inks_1.selectedIndex].value;
	ink_back_1 = parseInt(ink_back_1);

	
	

	var qty_1_3 = document.getElementById("qty_1").value;
	var qty_2_3 = document.getElementById("qty_2").value;
	var qty_3_3 = document.getElementById("qty_3").value;
	var qty_4_3 = document.getElementById("qty_4").value;
	var qty_5_3 = document.getElementById("qty_5").value;
	var qty_6_3 = document.getElementById("qty_6").value;

	qty_1_3 = parseInt(qty_1_3);
  	qty_2_3 = parseInt(qty_2_3);
  	qty_3_3 = parseInt(qty_3_3);
  	qty_4_3 = parseInt(qty_4_3);
  	qty_5_3 = parseInt(qty_5_3);
  	qty_6_3 = parseInt(qty_6_3);	


	var run_rate = runRate(ink_front_1, ink_back_1);
	var press_rate = qty_1_3/run_rate;
	var press_bhr = press_rate*131.25;
	var press_efficiency = press_bhr/1;
	var press_cost = press_efficiency+20;
	var press_cost1 = Math.round(press_cost*100)/100;

	if (press_cost1 < 30) {
		var press_cost1 = 30;
	}


	return press_cost1;
    
}

function aq_soft() {

	var qty_1_4 = document.getElementById("qty_1").value;
	var qty_2_4 = document.getElementById("qty_2").value;
	var qty_3_4 = document.getElementById("qty_3").value;
	var qty_4_4 = document.getElementById("qty_4").value;
	var qty_5_4 = document.getElementById("qty_5").value;
	var qty_6_4 = document.getElementById("qty_6").value;

	qty_1_4 = parseInt(qty_1_4);
  	qty_2_4 = parseInt(qty_2_4);
  	qty_3_4 = parseInt(qty_3_4);
  	qty_4_4 = parseInt(qty_4_4);
  	qty_5_4 = parseInt(qty_5_4);
  	qty_6_4 = parseInt(qty_6_4);

  	var aq_this = document.getElementById("aq");
	var aq_selected = aq_this.options[aq_this.selectedIndex].value;
	aq_selected = parseInt(aq_selected);

	var aq_soft_total = 0

	if (aq_selected == 1 || aq_selected == 3) {
		var aq_time = qty_1_4/3600;
		var aq_bhr = aq_time*78.75;
		var aq_efficency = aq_bhr/1;
		var aq_soft_total = aq_efficency+45;
	}

	if (aq_selected == 2 || aq_selected == 4) {
		var double_qty_1 = qty_1_4*2;
		var aq_time = double_qty_1/3600;
		var aq_bhr = aq_time*78.75;
		var aq_efficency = aq_bhr/1;
		var aq_soft_total = aq_efficency+45;
	}
return aq_soft_total;


}


//END INKS -----------------	

//PROOFS--------------------	

function addPdf() {
	var pdfPrice=0;
			    //Get a reference to the form id="cakeform"
	var theForm_pdf = document.forms["quick_quote"];
			    //Get a reference to the checkbox id="includecandles"
	var includePDF = theForm_pdf.elements["pdf"];

			    //If they checked the box set candlePrice to 5
	if(includePDF.checked==true) {
		var pdfPrice=10;
	}
			    //finally we return the candlePrice
	return pdfPrice;
	
}

function addExternal() {
	var externalPrice=0;
			    //Get a reference to the form id="cakeform"
	var theForm_external = document.forms["quick_quote"];
			    //Get a reference to the checkbox id="includecandles"
	var includeExternal = theForm_external.elements["external"];

			    //If they checked the box set candlePrice to 5
	if(includeExternal.checked==true) {
		var externalPrice=25;
	}
			    //finally we return the candlePrice
	return externalPrice;		    
	
}

function proofs() {
	var proofTotals = addPdf() + addExternal();
	
	return proofTotals;
}
//End PROOFS--------------------			

//Finishing ---------------


function round_corners() {

	var qnty_1_5 = document.getElementById("qty_1").value;
	var qnty_2_5 = document.getElementById("qty_2").value;
	var qnty_3_5 = document.getElementById("qty_3").value;
	var qnty_4_5 = document.getElementById("qty_4").value;
	var qnty_5_5 = document.getElementById("qty_5").value;
	var qnty_6_5 = document.getElementById("qty_6").value;

	qnty_1_5 = parseInt(qnty_1_5);
  	qnty_2_5 = parseInt(qnty_2_5);
  	qnty_3_5 = parseInt(qnty_3_5);
  	qnty_4_5 = parseInt(qnty_4_5);
  	qnty_5_5 = parseInt(qnty_5_5);
  	qnty_6_5 = parseInt(qnty_6_5);

  	var rounded = document.getElementById("rounded_corner_options");
	var r_corners = rounded.options[rounded.selectedIndex].value;
	r_corners = parseInt(r_corners);

	var round_corners4 = 0;

	if (r_corners > 0) {
		var rounded_corners = qnty_1_5/5000;
		var round_corners_one = rounded_corners*47.25;
		var round_corners_two = round_corners_one/1;
		var round_corners_three = round_corners_two+20;
		var round_corners4 = Math.round(round_corners_three*100)/100;
	}
	return round_corners4;
	
}




var paper_sizes_2 = new Array();

paper_sizes_2["1"] = 1;
paper_sizes_2["2"] = 2;

function qtyUp() {

	var back_inks_2 = document.getElementById("ink_back");
	var ink_back_2 = back_inks_2.options[back_inks_2.selectedIndex].value;
	ink_back_2 = parseInt(ink_back_2);

	var flat_length_1 = document.getElementById("flat_length").value;
	var flat_width_1 = document.getElementById("flat_width").value;
	flat_length_1 = parseInt(flat_length_1);
	flat_width_1 = parseInt(flat_width_1);

	var theForm_4 = document.forms["quick_quote"];
    var selected_size = theForm_4.elements["paper_size"];
	
	for(var i = 0; i < selected_size.length; i++) {
        //if the radio button is checked
        if(selected_size[i].checked) {
           	var radio_paper = paper_sizes_2[selected_size[i].value];
            break;
        }
    }

    var flatTrimSizes = 0;

    if (radio_paper == 1) {

    	if (back_inks_2 > 0) {

	    	var flatTrimSize1 = flat_width_1+0.125;
	    	var flatTrimSize2 = flat_length_1+0.125;

	    	var flatTrimSize1_3 = 11.7/flatTrimSize1;
	    	var flatTrimSize1_4 = 17.25/flatTrimSize2;

	    	var flatTrimSize1_5 = 11.7/flatTrimSize2;
	    	var flatTrimSize1_6 = 17.25/flatTrimSize1;

	    	var roundTrimSize = Math.floor(flatTrimSize1_3);
	    	var roundTrimSize1 = Math.floor(flatTrimSize1_4);
	    	var roundTrimSize2 = Math.floor(flatTrimSize1_5);
	    	var roundTrimSize3 = Math.floor(flatTrimSize1_6);

	    	var product1 = roundTrimSize*roundTrimSize1;
	    	var product2 = roundTrimSize2*roundTrimSize3;

	    	if (product1 > product2) {
	    		var flatTrimSizes = product1;
	    		
	    	} else {
	    		var flatTrimSizes = product2;
	    		
	    	}

    	} else {

    		var flatTrimSize1 = flat_width_1+0.125;
	    	var flatTrimSize2 = flat_length_1+0.125;

	    	var flatTrimSize1_3 = 11.7/flatTrimSize1;
	    	var flatTrimSize1_4 = 17.5/flatTrimSize2;

	    	var flatTrimSize1_5 = 11.7/flatTrimSize2;
	    	var flatTrimSize1_6 = 17.5/flatTrimSize1;

	    	var roundTrimSize = Math.floor(flatTrimSize1_3);
	    	var roundTrimSize1 = Math.floor(flatTrimSize1_4);
	    	var roundTrimSize2 = Math.floor(flatTrimSize1_5);
	    	var roundTrimSize3 = Math.floor(flatTrimSize1_6);

	    	var product1 = roundTrimSize*roundTrimSize1;
	    	var product2 = roundTrimSize2*roundTrimSize3;

	    	if (product1 > product2) {
	    		var flatTrimSizes = product1;
	    	
	    	} else {
	    		var flatTrimSizes = product2;
	    		
	    	}

    	}
    }

    if (radio_paper == 2) {
    	var flatTrimSize1 = flat_width_1+0.125;
    	var flatTrimSize2 = flat_length_1+0.125;

    	var flatTrimSize1_3 = 12.48/flatTrimSize1;
    	var flatTrimSize1_4 = 18.26/flatTrimSize2;

    	var flatTrimSize1_5 = 12.48/flatTrimSize2;
    	var flatTrimSize1_6 = 18.26/flatTrimSize1;

    	var roundTrimSize = Math.floor(flatTrimSize1_3);
    	var roundTrimSize1 = Math.floor(flatTrimSize1_4);
    	var roundTrimSize2 = Math.floor(flatTrimSize1_5);
    	var roundTrimSize3 = Math.floor(flatTrimSize1_6);

    	var product1 = roundTrimSize*roundTrimSize1;
    	var product2 = roundTrimSize2*roundTrimSize3;

    	if (product1 > product2) {
    		var flatTrimSizes = product1;
    		
    	} else {
    		var flatTrimSizes = product2;
    		
    	}
    }

    return flatTrimSizes;


} 

function addTrim() {

	var qnty_1_9 = document.getElementById("qty_1").value;
	var qnty_2_9 = document.getElementById("qty_2").value;
	var qnty_3_9 = document.getElementById("qty_3").value;
	var qnty_4_9 = document.getElementById("qty_4").value;
	var qnty_5_9 = document.getElementById("qty_5").value;
	var qnty_6_9 = document.getElementById("qty_6").value;

	qnty_1_9 = parseInt(qnty_1_9);
  	qnty_2_9 = parseInt(qnty_2_9);
  	qnty_3_9 = parseInt(qnty_3_9);
  	qnty_4_9 = parseInt(qnty_4_9);
  	qnty_5_9 = parseInt(qnty_5_9);
  	qnty_6_9 = parseInt(qnty_6_9);


		var trimPrice=0;
			    //Get a reference to the form id="cakeform"
		var theForm_trim = document.forms["quick_quote"];
			    //Get a reference to the checkbox id="includecandles"
		var includeTrim = theForm_trim.elements["trim"];

			    //If they checked the box set candlePrice to 5
		if(includeTrim.checked==true) {
			var get_Up = qtyUp();
			if (get_Up >= 1) {
				var getUp = 6000;
			} else if (get_Up >= 6) {
				var getUp = 3000;
			} else if (get_Up >= 13) {
				var getUp = 1000;
			}
			var trimTime = qnty_1_9/getUp;
			var trimBHR = trimTime*47.25;
			var trimEfficency = trimBHR/1;
			var trimPrice = trimEfficency+15;
		}
			    //finally we return the candlePrice
		return trimPrice;
}

function addFold() {

	var qnty_1_11 = document.getElementById("qty_1").value;
	var qnty_2_11 = document.getElementById("qty_2").value;
	var qnty_3_11 = document.getElementById("qty_3").value;
	var qnty_4_11 = document.getElementById("qty_4").value;
	var qnty_5_11 = document.getElementById("qty_5").value;
	var qnty_6_11 = document.getElementById("qty_6").value;

	qnty_1_11 = parseInt(qnty_1_11);
  	qnty_2_11 = parseInt(qnty_2_11);
  	qnty_3_11 = parseInt(qnty_3_11);
  	qnty_4_11 = parseInt(qnty_4_11);
  	qnty_5_11 = parseInt(qnty_5_11);
  	qnty_6_11 = parseInt(qnty_6_11);


	var foldPrice=0;
	var theForm_fold = document.forms["quick_quote"];
	var includeFold = theForm_fold.elements["fold"];

	if(includeFold.checked==true) {
		var foldTime = qnty_1_11/6000;
		var foldBHR = foldTime*73.5;
		var foldEfficency = foldBHR/1;
		var foldPrice=foldEfficency+40;

		if (foldPrice < 60) {
			var foldPrice = 60;
		}
	}
	return foldPrice;
}

function addScore() {

	var qnty_1_12 = document.getElementById("qty_1").value;
	var qnty_2_12 = document.getElementById("qty_2").value;
	var qnty_3_12 = document.getElementById("qty_3").value;
	var qnty_4_12 = document.getElementById("qty_4").value;
	var qnty_5_12 = document.getElementById("qty_5").value;
	var qnty_6_12 = document.getElementById("qty_6").value;

	qnty_1_12 = parseInt(qnty_1_12);
  	qnty_2_12 = parseInt(qnty_2_12);
  	qnty_3_12 = parseInt(qnty_3_12);
  	qnty_4_12 = parseInt(qnty_4_12);
  	qnty_5_12 = parseInt(qnty_5_12);
  	qnty_6_12 = parseInt(qnty_6_12);

  	  	var alreadyFolding = addFold();

	var scorePrice=0;
	var theForm_score = document.forms["quick_quote"];
	var includeScore = theForm_score.elements["score"];

	if(includeScore.checked==true) {

		if (alreadyFolding > 0) {

			var scorePrice = 10;

		} else {

			var scoreTime = qnty_1_12/6000;
			var scoreBHR = scoreTime*73.5;
			var scoreEfficency = scoreBHR/1;
			var scorePrice= scoreEfficency+40;

			if (scorePrice < 50) {
				var scorePrice = 50;
			} 
		}


	}
	return scorePrice;
}


function addPerf() {

	var qnty_1_10 = document.getElementById("qty_1").value;
	var qnty_2_10 = document.getElementById("qty_2").value;
	var qnty_3_10 = document.getElementById("qty_3").value;
	var qnty_4_10 = document.getElementById("qty_4").value;
	var qnty_5_10 = document.getElementById("qty_5").value;
	var qnty_6_10 = document.getElementById("qty_6").value;

	qnty_1_10 = parseInt(qnty_1_10);
  	qnty_2_10 = parseInt(qnty_2_10);
  	qnty_3_10 = parseInt(qnty_3_10);
  	qnty_4_10 = parseInt(qnty_4_10);
  	qnty_5_10 = parseInt(qnty_5_10);
  	qnty_6_10 = parseInt(qnty_6_10);

  	var alreadyFold = addFold();
  	var alreadyScore = addScore();

	var perfPrice=0;
			    //Get a reference to the form id="cakeform"
	var theForm_perf = document.forms["quick_quote"];
			    //Get a reference to the checkbox id="includecandles"
	var includePerf = theForm_perf.elements["perf"];

	if(includePerf.checked==true) {

		if (alreadyScore > 0 || alreadyFold > 0 ) {
			var perfPrice = 10;
		} else {

		var perfRate = qnty_1_10/6000;
		var perfBHR = perfRate*73.5;
		var perfEfficency = perfBHR/1;
		var perfPrice = perfEfficency+40;

			if (perfPrice < 100 ) {
				var perfPrice = 100;
			} 

		}
		

			
	} 
		
	return perfPrice;
}

function addDrill() {
	var qnty_1_6 = document.getElementById("qty_1").value;
	var qnty_2_6 = document.getElementById("qty_2").value;
	var qnty_3_6 = document.getElementById("qty_3").value;
	var qnty_4_6 = document.getElementById("qty_4").value;
	var qnty_5_6 = document.getElementById("qty_5").value;
	var qnty_6_6 = document.getElementById("qty_6").value;

	qnty_1_6 = parseInt(qnty_1_6);
  	qnty_2_6 = parseInt(qnty_2_6);
  	qnty_3_6 = parseInt(qnty_3_6);
  	qnty_4_6 = parseInt(qnty_4_6);
  	qnty_5_6 = parseInt(qnty_5_6);
  	qnty_6_6 = parseInt(qnty_6_6);

			    var drillPrice=0;
			    //Get a reference to the form id="cakeform"
			    var theForm_drill = document.forms["quick_quote"];
			    //Get a reference to the checkbox id="includecandles"
			    var includeDrill = theForm_drill.elements["drill"];

			    //If they checked the box set candlePrice to 5
			    if(includeDrill.checked==true)
			    {
			        var drill_rate = qnty_1_6/5000;
					var drill_bhr = drill_rate*47.25;
					var drill_efficiency = drill_bhr/1;
					var drillPrice = drill_efficiency+20;

			    }
			    //finally we return the candlePrice

			    return drillPrice;
			}

function finishing() {
	var addPerf = addPerf();
	var addScore = addScore();
	var addFold = addFold();
	var addTrim = addTrim();
	var addDrill = addDrill();

	addPerf = parseInt(addPerf);
	addScore = parseInt(addScore);
	addFold = parseInt(addFold);
	addTrim = parseInt(addTrim);
	addDrill = parseInt(addDrill);

	var finishingTotals = addPerf+addScore+addFold+addTrim+addDrill;
	
	
}

//End Finishing ---------------


//Delivery---------------
function ups_delivery() {
				    var upsPrice=0;
				    //Get a reference to the form id="cakeform"
				    var theForm = document.forms["quick_quote"];
				    //Get a reference to the checkbox id="includecandles"
				    var includeUPS = theForm.elements["ups"];

				    //If they checked the box set candlePrice to 5
				    if(includeUPS.checked==true)
				    {
				        var upsPrice=5;
				    }
				    //finally we return the candlePrice

				    return upsPrice;
				}

function pickup_delivery() {
				    var pickupPrice=0;
				    //Get a reference to the form id="cakeform"
				    var theForm_pickup = document.forms["quick_quote"];
				    //Get a reference to the checkbox id="includecandles"
				    var includepickup = theForm_pickup.elements["pickup_option"];

				    //If they checked the box set candlePrice to 5
				    if(includepickup.checked==true)
				    {
				        var pickupPrice=5;
				    }
				    
				   return pickupPrice;
				}

function thirdparty_delivery() {
				    var third_party_Price=0;
				    //Get a reference to the form id="cakeform"
				    var theForm_third = document.forms["quick_quote"];
				    //Get a reference to the checkbox id="includecandles"
				    var includeThird_Party = theForm_third.elements["third_party_option"];

				    //If they checked the box set candlePrice to 5
				    if(includeThird_Party.checked==true)
				    {
				        var third_party_Price=5;
				    }
				    //finally we return the candlePrice
				    return third_party_Price;
				}

function local_delivery() {
				    var localPrice=0;
				    //Get a reference to the form id="cakeform"
				    var theForm_local = document.forms["quick_quote"];
				    //Get a reference to the checkbox id="includecandles"
				    var include_local = theForm_local.elements["local_delivery_option"];

				    //If they checked the box set candlePrice to 5
				    if(include_local.checked==true)
				    {
				        var localPrice=15;
				    }
				    //finally we return the candlePrice
				    return localPrice;
				}

function delivery() {


	var deliveryCosts = deliveryMath(ups_delivery(), pickup_delivery(), thirdparty_delivery(), local_delivery() );
	
}

function deliveryMath(a,b,c,d) {

return a+b+c+d;

}				
//End Delivery-------------


  //convert data to integers
  	


	//AQ COATING MATERIAL COSTS -------



	

//END HARD COSTS -------------------

//SOFT COSTS -------------



	//PAD --------

	function addPad() {

	var qnty_1_7 = document.getElementById("qty_1").value;
	var qnty_2_7 = document.getElementById("qty_2").value;
	var qnty_3_7 = document.getElementById("qty_3").value;
	var qnty_4_7 = document.getElementById("qty_4").value;
	var qnty_5_7 = document.getElementById("qty_5").value;
	var qnty_6_7 = document.getElementById("qty_6").value;

	qnty_1_7 = parseInt(qnty_1_7);
  	qnty_2_7 = parseInt(qnty_2_7);
  	qnty_3_7 = parseInt(qnty_3_7);
  	qnty_4_7 = parseInt(qnty_4_7);
  	qnty_5_7 = parseInt(qnty_5_7);
  	qnty_6_7 = parseInt(qnty_6_7);

	var padPrice=0;
  	var includePad = document.getElementById("pad_in").value;
  	includePad = parseInt(includePad);

	if(includePad > 0) {
		var pad_in_qty = qnty_1_7/includePad;
		var pad_rate = pad_in_qty*0.2;
		var padPrice = pad_rate+5;
	}

	return padPrice;
}

	//SHRINK

		function addShrink() {

	var qnty_1_8 = document.getElementById("qty_1").value;
	var qnty_2_8 = document.getElementById("qty_2").value;
	var qnty_3_8 = document.getElementById("qty_3").value;
	var qnty_4_8 = document.getElementById("qty_4").value;
	var qnty_5_8 = document.getElementById("qty_5").value;
	var qnty_6_8 = document.getElementById("qty_6").value;

	qnty_1_8 = parseInt(qnty_1_8);
  	qnty_2_8 = parseInt(qnty_2_8);
  	qnty_3_8 = parseInt(qnty_3_8);
  	qnty_4_8 = parseInt(qnty_4_8);
  	qnty_5_8 = parseInt(qnty_5_8);
  	qnty_6_8 = parseInt(qnty_6_8);

	var shrinkPrice=0;
	var includeShrink = document.getElementById("shrink").value;
  	includeShrink = parseInt(includeShrink);

	if(includeShrink > 0) {
	var shrink_in_qty = qnty_1_8/includeShrink;
	var shrink_rate = shrink_in_qty*0.15;
	var shrinkPrice = shrink_rate+5;
	}

	return shrinkPrice;
}

//TOTALS =======

function addShrinkPad() {
	var shrinkPad = addShrink() + addPad();

	return shrinkPad;
}

function hardCosts(){
	var prep = 73.5*0.5;
	var packaging = 10;
	var hard_costs_sub = paperCosts() + indigoCosts() + aq_hard() + prep + addShrinkPad() + packaging + press() + proofs() + aq_soft() + ups_delivery() + pickup_delivery() + thirdparty_delivery() + local_delivery() + addDrill() + addTrim() + addFold() + addScore() + addPerf() + round_corners();

	return hard_costs_sub;
	
}


function generatePrice() {

	var subTotals = hardCosts();
	var globalMarkup = subTotals*0.3;
	var TotalSubs = subTotals+globalMarkup;
	var grandTotal1 = Math.round(TotalSubs*100)/100;

	var totalGrand1 = grandTotal1;

	if (grandTotal1 > 500) {
		var totalGrand = grandTotal1*0.9;
		var totalGrand1 = Math.round(totalGrand*100)/100;
	}

	
	document.getElementById("generated_quote").value = totalGrand1;

	// document.getElementById("generated_quote").value = TotalSubs;


}


</script>


</html>
