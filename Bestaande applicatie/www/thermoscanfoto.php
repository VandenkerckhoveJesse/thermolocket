<?php
include "../php/config.php";

//-- Init
$strCity = $_GET["city"];
$strSubCity = $_GET["subcity"];
$strSide = $_GET["side"];
$strId = $_GET["id"];

//-- Count the length of the id, we use it for next/previous calculations
$intIdSize = strlen($strId);

//-- Check if the requested image exists
$strIdPrevious = "";
$strIdNext = "";
if(file_exists($strImagePath . $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strId . ".jpg")) {
	//-- Image found, check for previous and next images
	//-- Previous
	if(file_exists($strImagePath . $strCity . "/" . $strSubCity . "/" . $strSide . "/" . str_pad(intval($strId) - 1, $intIdSize, "0", STR_PAD_LEFT) . ".jpg")) {
		$strIdPrevious = str_pad(intval($strId) - 1, $intIdSize, "0", STR_PAD_LEFT);
	}
	
	//-- Next
	if(file_exists($strImagePath . $strCity . "/" . $strSubCity . "/" . $strSide . "/" . str_pad(intval($strId) + 1, $intIdSize, "0", STR_PAD_LEFT) . ".jpg")) {
		$strIdNext = str_pad(intval($strId) + 1, $intIdSize, "0", STR_PAD_LEFT);
	}
}

//-- Start building the html
?>
<html>
	<body style="font-family:verdana;font-size:11px;">
		<table style="font-family:verdana;font-size:11px;">
			<tr>
				<td colspan="3">
					<img src="/getimg/<?php echo $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strId ?>" style="width:640px;height:512px;" />
				</td>
			</tr>
			<tr>
				<td style="width: 100px;text-align: left;">
					<?php
						if(!empty($strIdPrevious)) {
					?>
							<a href="/thermoscan/<?php echo $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strIdPrevious ?>">Vorige</a>
					<?php
						}
						else {
							echo "Vorige";
						}
					?>
				</td>
				<td style="text-align: center;">
					<?php
					//-- Build text under the image
					$strCurrentImage = $strCity;
					if($strCity != $strSubCity) {
						$strCurrentImage .= " (" . $strSubCity . ")";
					}
					$strCurrentImage .= " | " . $strSide . " | " . $strId . ".jpg";
					
					//-- Show text under the image
					//echo $strCurrentImage;
					?>
					<a target="_blank" href="/downloadpdf/<?php echo $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strId ?>">Download pdf</a>
				</td>
				<td style="width: 100px;text-align: right;">
				<?php
				if(!empty($strIdNext)) {
				?>
						<a href="/thermoscan/<?php echo $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strIdNext ?>">Volgende</a>
				<?php
					}
					else {
						echo "Volgende";
					}			
				?>
				</td>
			</tr>
		</table>
	</body>
</html>