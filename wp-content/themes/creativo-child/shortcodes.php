<?php
/**
* Theme Shortcodes
* 
* Contains all shortcodes used in this theme
* 
* @access 	public
* @author	Ben Moody
*/

/**
* Shortcode Example
* 
* DESCRIPTION
* 
* @param	array	$atts 		- Shortcode attributes
* @param	string	$content 	- Post content
* @var		type	name
* @return	string	$content
* @access 	public
* @author	Ben Moody
*/
/*
add_shortcode( 'tab', 'EXAMPLE' );
function EXAMPLE( $atts, $content ){
	
    extract(shortcode_atts(array(
	), $atts));
	
    if( !empty($content) ) {
	    
	    //Add shortcode actions here
	    
	    
	    //NOTE: You may need to manually apply wpautop to content in your shortcode
	    //		If you want the user to be able to add P and BR with tinymce
	    $content = wpautop( trim($content) );
	    
    }
    
    return $content;
}
*/

add_shortcode( 'trex-calc', 'wg_trex_calc' );
function wg_trex_calc( $atts, $content ) {

	extract( shortcode_atts( array(), $atts ) );

	ob_start();
	?>
	<section class="graph" id="printGraph">
		<form name="Form1">
			<div class="row">
				<div class="col-xs-6 col-sm-2">
					<p>You Invest</p>
					<input type="text" name="YouInvest" value="10000">
				</div>
				<div class="col-xs-6 col-sm-2">
					<p>Annual Return(%)</p>
					<input type="text" name="AnnualReturn" value="6.4">
				</div>
				<div class="col-xs-6 col-sm-2">
					<p>Annual Fees(%)</p>
					<input type="text" name="AnnualFees" value="1.75">
				</div>
				<div class="col-xs-6 col-sm-2">
					<p>Time (years)</p>
					<input type="text" name="Years" value="25">
				</div>
				<div class="col-xs-12 col-sm-2">
					<button class="trexButton" type="button" onclick="javascript: recalculateChart(YouInvest.value, Number(AnnualReturn.value), Number(AnnualFees.value), Years.value)">Update</button>
				</div>
			</div>
			<div id="chartdiv"></div>
			<div id="chartInformation">
				<h2>T-Rex Score: <span id="tRexScoreOutput">0</span></h2>
				<h3><span id="GrossIncome">$0</span><br />Total Gain</h3>
				<h3><span id="LostIncome">$0</span><br />Lost in Fees</h3>
				<h3><span id="NetIncome">$0</span><br />Gain You Keep</h3>
				<h3><span id="TotalValue">$0</span><br />Total Value</h3>
			</div>
		</form>
		<div id="trexOut" ></div>
	</section>
	<?php
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

