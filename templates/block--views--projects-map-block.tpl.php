<?php

/**
 * @file
 * touch theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>

  <?php if (!empty($block->subject)): ?>

  <?php endif;?>


  <div class="content"<?php print $content_attributes; ?>>

    
<?php
//drupal_add_css( drupal_get_path('module','{mymodule}') . '/{mycssfile}.css' );
drupal_add_css( drupal_get_path('theme','CSFL_theme') . '/js/tooltipster-master/css/tooltipster.css' );
drupal_add_css( drupal_get_path('theme','CSFL_theme') . '/js/tooltipster-master/css/themes/tooltipster-light.css' );
drupal_add_js( drupal_get_path('theme','CSFL_theme') . '/js/jquery.rwdImageMaps.min.js' );
drupal_add_js( drupal_get_path('theme','CSFL_theme') . '/js/tooltipster-master/js/jquery.tooltipster.min.js' );
?>
   



<div style="position:relative;">
<img src="https://www.cslforum.org/cslf/sites/default/files/images/projects-map-v1_0.png" usemap="#Map" width="1633" height="899" style="max-width:100%;height:auto;position:relative;">
<map name="Map">
<area shape="circle" coords="1427,774,12" href="Projects/Summaries#CarbonNet" alt="CarbonNet Project" class="CarbonNet">
<area shape="circle" coords="1403,767,12" href="Projects/Summaries#CO2CRCOtwayStage2" alt="CO2CRC Otway Project, Stage 2" class="CO2CRCOtwayStage2">
<area shape="circle" coords="1375,767,12" href="Projects/Summaries#CO2CRCOtway" alt="CO2CRC Otway Project" class="CO2CRCOtway">
<area shape="circle" coords="1301,740,12" href="Projects/Summaries#SouthWestHub" alt="South West Hub Geosequestration Project" class="SouthWestHub">
<area shape="circle" coords="1290,691,12" href="Projects/Summaries#Gorgon" alt="Gorgon CO2 Injection Project" class="Gorgon">
<area shape="circle" coords="1385,325,12" href="Projects/Summaries#CO2Separation" alt="CO2 Separation from Pressurized Gas Stream" class="CO2Separation">
<area shape="circle" coords="1328,346,12" href="Projects/Summaries#DrySolid" alt="Dry Solid Sorbent CO2 Capture Project" class="DrySolid">
<area shape="circle" coords="1270,315,12" href="Projects/Summaries#RegionalOpps" alt="Regional Opportunities for CO2 Capture and Storage in China (Project Completed)" class="RegionalOpps">
<area shape="circle" coords="1253,359,12" href="Projects/Summaries#ChinaCoalbedMethane" alt="China Coalbed Methane Technology/CO2 Sequestration Project (Project Completed)" class="ChinaCoalbedMethane">
<area shape="circle" coords="1226,359,12" href="Projects/Summaries#Jingbian" alt="Jingbian CCS Project" class="Jingbian">
<area shape="circle" coords="998,446,12" href="Projects/Summaries#OxyCombustion" alt="Oxy-Combustion of Heavy Liquid Fuels Project" class="OxyCombustion">
<area shape="circle" coords="971,447,12" href="Projects/Summaries#Uthmaniyah" alt="Uthmaniyah CO2-EOR Demonstration Project" class="Uthmaniyah">
<area shape="circle" coords="983,421,12" href="Projects/Summaries#CarbonCapture" alt="Carbon Capture and Utilization Project / CO2 Network Project" class="CarbonCapture">
<area shape="circle" coords="811,346,12" href="Projects/Summaries#Dynamis" alt="Dynamis (Project Completed)" class="Dynamis">
<area shape="circle" coords="803,322,12" href="Projects/Summaries#CGSEurope" alt="CGS Europe Project (Project Completed)" class="CGSEurope">
<area shape="circle" coords="823,295,12" href="Projects/Summaries#Ketzin" alt="Ketzin Test Site Project (formerly CO2 SINK) (Project Completed)" class="Ketzin">
<area shape="circle" coords="797,297,12" href="Projects/Summaries#CCSRotterdam" alt="CCS Rotterdam" class="CCSRotterdam">
<area shape="circle" coords="796,273,12" href="Projects/Summaries#RotterdamOpslag" alt="Rotterdam Opslag en Afvang Demonstratieproject (ROAD)" class="RotterdamOpslag">
<area shape="circle" coords="810,252,12" href="Projects/Summaries#Norcem" alt="Norcem CO2 Capture Project" class="Norcem">
<area shape="circle" coords="837,252,12" href="Projects/Summaries#CASTOR" alt="CASTOR (Project Completed)" class="CASTOR">
<area shape="circle" coords="844,206,12" href="Projects/Summaries#CO2Field" alt="CO2 Field Lab Project" class="CO2Field">
<area shape="circle" coords="817,218,12" href="Projects/Summaries#CO2Technology" alt="CO2 Technology Centre Mongstad Project (formerly European CO2 Technology Centre Mongstad Project)" class="CO2Technology">
<area shape="circle" coords="788,236,12" href="Projects/Summaries#CO2STORE" alt="CO2STORE (Project Completed)" class="CO2STORE">
<area shape="circle" coords="758,266,12" href="Projects/Summaries#DemonstrationofOxyfuel" alt="Demonstration of an Oxyfuel Combustion System (Project Completed)" class="DemonstrationofOxyfuel">
<area shape="circle" coords="766,293,12" href="Projects/Summaries#ENCAP" alt="ENCAP (Project Completed)" class="ENCAP">
<area shape="circle" coords="776,318,12" href="Projects/Summaries#CO2GeoNet" alt="CO2 GeoNet" class="CO2GeoNet">
<area shape="circle" coords="779,346,12" href="Projects/Summaries#Lacq" alt="Lacq CO2 Capture and Storage Project (Project Completed)" class="Lacq">
<area shape="circle" coords="789,422,12" href="Projects/Summaries#Geologic" alt="Geologic CO2 Storage Assurance at in Salah, Algeria (project located in Algeria)" class="Geologic">
<area shape="circle" coords="330,377,12" href="Projects/Summaries#AirProducts" alt="Air Products CO2 Capture from Hydrogen Facility Project" class="AirProducts">
<area shape="circle" coords="356,384,12" href="Projects/Summaries#FrioProject" alt="Frio Project (Project Completed)" class="FrioProject">
<area shape="circle" coords="385,384,12" href="Projects/Summaries#SECARB" alt="SECARB Early Test at Cranfield Project" class="SECARB">
<area shape="circle" coords="406,401,12" href="Projects/Summaries#SECARBPhaseIII" alt="SECARB Phase III Anthropogenic Test and Plant Barry CCS Project" class="SECARBPhaseIII">
<area shape="circle" coords="412,376,12" href="Projects/Summaries#Kemper" alt="Kemper County Energy Facility" class="Kemper">
<area shape="circle" coords="452,356,12" href="Projects/Summaries#CO2CapturePhase4" alt="CO2 Capture Project, Phase 4" class="CO2CapturePhase4">
<area shape="circle" coords="424,349,12" href="Projects/Summaries#CO2CapturePhase3" alt="CO2 Capture Project - Phase 3 (Project Completed)" class="CO2CapturePhase3">
<area shape="circle" coords="397,346,12" href="Projects/Summaries#CO2CapturePhase2" alt="CO2 Capture Project - Phase 2 (Project Completed)" class="CO2CapturePhase2">
<area shape="circle" coords="462,304,12" href="Projects/Summaries#CANMET" alt="CANMET Energy Technology Centre (CETC) R&amp;D Oxyfuel Combustion for CO2 Capture (Project Completed)" class="CANMET">
<area shape="circle" coords="429,317,12" href="Projects/Summaries#MRCSP" alt="MRCSP Development Phase Project" class="MRCSP">
<area shape="circle" coords="403,316,12" href="Projects/Summaries#IllinoisIndustrial" alt="Illinois Industrial Carbon Capture and Storage Project" class="llinoisIndustrial">
<area shape="circle" coords="378,311,12" href="Projects/Summaries#IllinoisBasin" alt="Illinois Basin – Decatur Project" class="IllinoisBasin">
<area shape="circle" coords="336,316,12" href="Projects/Summaries#RegionalCarbon" alt="Regional Carbon Sequestration Partnerships" class="RegionalCarbon">
<area shape="circle" coords="287,168,11" href="Projects/Summaries#FortNelson" alt="Fort Nelson Carbon Capture and Storage Project" class="FortNelson">
<area shape="circle" coords="292,194,13" href="Projects/Summaries#Zama" alt="Zama Acid Gas EOR, CO2 Sequestration, and Monitoring Project" class="Zama">
<area shape="circle" coords="351,220,11" href="Projects/Summaries#AlbertaCarbonTrunk" alt="Alberta Carbon Trunk Line" class="AlbertaCarbonTrunk">
<area shape="circle" coords="302,244,11" href="Projects/Summaries#AlbertaCoalBed" alt="Alberta Enhanced Coal-Bed Methane Recovery Project (Project Completed)" class="AlbertaCoalBed">
<area shape="circle" coords="330,257,13" href="Projects/Summaries#IEAGHGWeyburn" alt="IEA GHG Weyburn-Midale CO2 Monitoring and Storage Project (Project Completed)" class="IEAGHGWeyburn">
<area shape="circle" coords="369,246,12" href="Projects/Summaries#SaskBoundaryDam3" alt="SaskPower Integrated CCS Demonstration Project at Boundary Dam Unit 3" class="SaskBoundaryDam3">
<area shape="circle" coords="323,217,11" href="Projects/Summaries#Quest" alt="Quest CCS Project" class="Quest">
</map>
</div>

<script type="text/javascript">
jQuery(document).ready(function(e) {
    jQuery('img[usemap]').rwdImageMaps();
	
	jQuery('.CarbonNet').tooltipster({
                content: jQuery('<p><strong>CarbonNet Project R&amp;D Oxyfuel Combustion for CO2 Capture</strong></p><p><em>Nominators: Australia (lead) and United States</em></p>'),
				interactive: true,
				theme: 'tooltipster-light'
            });
	jQuery('.CO2CRCOtwayStage2').tooltipster({
                content: jQuery('<p><strong>CO2CRC Otway Project, Stage 2</strong></p><p><em>Nominators: Australia (lead) and United States</em></p>'),
				interactive: true,
				theme: 'tooltipster-light'
            });
			
	jQuery('.CO2CRCOtway').tooltipster({content: jQuery('<p><strong>CO2CRC Otway Project</strong></p><p><em>Nominators: Australia (lead) and United States </em></p>'), interactive: true, theme: 'tooltipster-light' });

	jQuery('.SouthWestHub').tooltipster({content: jQuery('<p><strong>South West Hub Geosequestration Project</strong></p><p><em>Nominators: Australia (lead), United States, and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Gorgon').tooltipster({content: jQuery('<p><strong>Gorgon CO2 Injection Project</strong></p><p><em>Nominators: Australia (lead), Canada, and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2Separation').tooltipster({content: jQuery('<p><strong>CO2 Separation from Pressurized Gas Stream Project</strong></p><p><em>Nominators: Japan (lead) and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.DrySolid').tooltipster({content: jQuery('<p><strong>Dry Solid Sorbent CO2 Capture Project </strong></p><p><em>Nominators: Korea (lead) and United Kingdom</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.RegionalOpps').tooltipster({content: jQuery('<p><strong>Regional Opportunities for CO2 Capture and Storage in China (Project Completed)</strong></p><p><em>Nominators: United States (lead) and China</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.ChinaCoalbedMethane').tooltipster({content: jQuery('<p><strong>China Coalbed Methane Technology/CO2 Sequestration Project China Coalbed Methane Technology/CO2 Sequestration Project (Project Completed)</strong></p><p><em>Nominators: Canada (lead), United States, and China </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Jingbian').tooltipster({content: jQuery('<p><strong>Jingbian CCS Project Jingbian CCS Project</strong></p><p><em>Nominators: China (lead) and Australia </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.OxyCombustion').tooltipster({content: jQuery('<p><strong>Oxy-Combustion of Heavy Liquid Fuels Project</strong></p><p><em>Nominators: Saudi Arabia (lead) and United States </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Uthmaniyah').tooltipster({content: jQuery('<p><strong>Uthmaniyah CO2-EOR Demonstration Project</strong></p><p><em>Saudi Arabia (lead) and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CarbonCapture').tooltipster({content: jQuery('<p><strong>Carbon Capture and Utilization Project / CO2 Network Project</strong></p><p><em>Nominators: Saudi Arabia (lead) and South Africa</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Dynamis').tooltipster({content: jQuery('<p><strong>Dynamis Project Dynamis (Project Completed)</strong></p><p><em>Nominators: European Commission (lead) and Norway </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CGSEurope').tooltipster({content: jQuery('<p><strong>CGS Europe Project (Project Completed)</strong></p><p><em>Nominators: France (lead), Italy, Norway, and the European Commission</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Ketzin').tooltipster({content: jQuery('<p><strong>Ketzin Test Site Project (formerly CO2 SINK) (Project Completed)</strong></p><p><em>Nominators: European Commission (lead) and Germany </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CCSRotterdam').tooltipster({content: jQuery('<p><strong>CCS Rotterdam</strong></p><p><em>Nominators: Netherlands (lead) and Norway</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.RotterdamOpslag').tooltipster({content: jQuery('<p><strong>Rotterdam Opslag en Afvang Demonstratieproject (ROAD)</strong></p><p><em>Nominators: Netherlands (lead) and the European Commission</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Norcem').tooltipster({content: jQuery('<p><strong>Norcem CO2 Capture Project Norcem CO2 Capture Project</strong></p><p><em>Nominators: Norway (lead) and Germany </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CASTOR').tooltipster({content: jQuery('<p><strong>CASTOR (Project Completed)</strong></p><p><em>Nominators: European Commission (lead), France, and Norway </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2Field').tooltipster({content: jQuery('<p><strong>CO2 Field Lab Project</strong></p><p><em>Nominators: Norway (lead), France, and United Kingdom</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2Technology').tooltipster({content: jQuery('<p><strong>CO2 Technology Centre Mongstad Project (formerly European CO2 Technology Centre Mongstad Project) </strong></p><p><em>Nominators: Norway (lead) and Netherlands</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2STORE').tooltipster({content: jQuery('<p><strong>CO2STORE (Project Completed)</strong></p><p><em>Nominators: Norway (lead) and European Commission</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.DemonstrationofOxyfuel').tooltipster({content: jQuery('<p><strong>Demonstration of an Oxyfuel Combustion System (Project Completed)</strong></p><p><em>Nominators: United Kingdom (lead) and France</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.ENCAP').tooltipster({content: jQuery('<p><strong>ENCAP Project (Project Completed)</strong></p><p><em>Nominators: European Commission (lead), France, and Germany</em></p>'), interactive: true, theme: 'tooltipster-light' });	jQuery('.CO2GeoNet').tooltipster({content: jQuery('<p><strong>CO2 GeoNet Project</strong></p><p><em>Nominators: Netherlands (lead) and Norway</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Lacq').tooltipster({content: jQuery('<p><strong>Lacq Integrated CCS Project (Project Completed)</strong></p><p><em>Nominators: France (lead) and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Geologic').tooltipster({content: jQuery('<p><strong>Geologic CO2 Storage Assurance at In Salah, Algeria</strong></p><p><em>Nominators: United Kingdom (lead) and Norway</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.AirProducts').tooltipster({content: jQuery('<p><strong>Air Products CO2 Capture from Hydrogen Facility Project R&amp;D Oxyfuel Combustion for CO2 Capture</strong></p><p><em>Nominators: United States (lead), Netherlands, and United Kingdom</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.FrioProject').tooltipster({content: jQuery('<p><strong>Frio Project (Project Completed)</strong></p><p><em>Nominators: United States (lead) and Australia</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.SECARB').tooltipster({content: jQuery('<p><strong>SECARB Early Test at Cranfield Project</strong></p><p><em>Nominators: United States (lead), Canada, and United Kingdom</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.SECARBPhaseIII').tooltipster({content: jQuery('<p><strong>SECARB Phase III Anthropogenic Test and Plant Barry CCS Project</strong></p><p><em>Nominators: United States (lead) and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Kemper').tooltipster({content: jQuery('<p><strong>Kemper County Energy Facility</strong></p><p><em>Nominators: United States (lead) and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2CapturePhase4').tooltipster({content: jQuery('<p><strong>CO2 Capture Project - Phase 4</strong></p><p><em>Nominators: United Kingdom (lead), Canada, and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2CapturePhase3').tooltipster({content: jQuery('<p><strong>CO2 Capture Project - Phase 3 (Project Completed)</strong></p><p><em>Nominators: United Kingdom (lead) and the United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CO2CapturePhase2').tooltipster({content: jQuery('<p><strong>CO2 Capture Project - Phase 2 (Project Completed)</strong></p><p><em>Nominators: United Kingdom (lead), Italy, Norway, and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.CANMET').tooltipster({content: jQuery('<p><strong>CANMET Energy Technology Centre (CETC) R&amp;D Oxyfuel Combustion for CO2 Capture (Project Completed)</strong></p><p><em>Nominators: Canada (lead) and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.MRCSP').tooltipster({content: jQuery('<p><strong>MRCSP Development Phase Project</strong></p><p><em>Nominators: United States (lead), Japan, and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.llinoisIndustrial').tooltipster({content: jQuery('<p><strong>Illinois Industrial Carbon Capture and Storage Project</strong></p><p><em>Nominators: United States (lead) and France</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.IllinoisBasin').tooltipster({content: jQuery('<p><strong>Illinois Basin – Decatur Project</strong></p><p><em>Nominators: United States (lead) and United Kingdom</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.RegionalCarbon').tooltipster({content: jQuery('<p><strong>Regional Carbon Sequestration Partnerships Project</strong></p><p><em>Nominators: United States (lead) and Canada</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.FortNelson').tooltipster({content: jQuery('<p><strong>Fort Nelson Carbon Capture and Storage Project</strong></p><p><em>Nominators: Canada (lead) and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Zama').tooltipster({content: jQuery('<p><strong>Zama Acid Gas EOR, Sequestration and Monitoring Project Zama Acid Gas EOR, CO2 Sequestration, and Monitoring Project</strong></p><p><em>Nominators: Canada (lead) and United States </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.AlbertaCarbonTrunk').tooltipster({content: jQuery('<p><strong>Alberta Carbon Trunk Line</strong></p><p><em>Canada (lead) and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.AlbertaCoalBed').tooltipster({content: jQuery('<p><strong>Alberta Enhanced Coalbed Methane Recovery Project Alberta Enhanced Coalbed Methane Recovery Project (Project Completed)</strong></p><p><em>Nominators: Canada (lead), United States, and United Kingdom </em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.IEAGHGWeyburn').tooltipster({content: jQuery('<p><strong>IEA GHG Weyburn-Midale CO2 Monitoring and Storage Project (Project Completed)</strong></p><p><em>Nominators: Canada and United States (leads) and Japan</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.SaskBoundaryDam3').tooltipster({content: jQuery('<p><strong>SaskPower Integrated CCS Demonstration Project at Boundary Dam Unit 3</strong></p><p><em>Nominators: Canada (lead) and the United States</em></p>'), interactive: true, theme: 'tooltipster-light' });
	jQuery('.Quest').tooltipster({content: jQuery('<p><strong>Quest CCS Project</strong></p><p><em>Nominators: Canada (lead), United Kingdom, and United States</em></p>'), interactive: true, theme: 'tooltipster-light' });

});
</script>    
  </div>
  
