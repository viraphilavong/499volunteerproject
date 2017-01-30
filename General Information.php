<?php
/**
 * Created by PhpStorm.
 * User: AlexPhilavong
 * Date: 1/12/2017
 * Time: 12:56 PM
 */
require_once("header.php");
//require_once("sessions.php"); if we use multi page forms
$firstName = @$_POST["firstName"];
$lastName = @$_POST["lastName"];
$city = @$_POST["city"];
$state = @$_POST["state"];
$zipCode = @$_POST["zipCode"];
$emailAddress = @$_POST["emailAddress"];
$occupation = @$_POST["occupation"];
$daytime = @$_POST["daytime"];
$evening = @$_POST["evening"];
$weekday = @$_POST["weekday"];
$weekend = @$_POST["weekend"];
$startDate = @$_POST["startDate"];
$worship = @$_POST["worship"];
$childcare = @$_POST["childcare"];
$communitysite = @$_POST["communitysite"];
$peers = @$_POST["peers"];
$family = @$_POST["family"];
$activities = @$_POST["activities"];
$planning = @$_POST["planning"];
$people = @$_POST["people"];
$infants = @$_POST["infants"];
$children = @$_POST["children"];
$adults = @$_POST["adults"];
$singleparents = @$_POST["singleparents"];
$seniors = @$_POST["seniors"];
$addiction = @$_POST["addiction"];
$education = @$_POST["education"];
$hospice = @$_POST["hospice"];
$parenting = @$_POST["parenting"];
$spiritualgrowth = @$_POST["spiritualgrowth"];
$agingseniors = @$_POST["agingseniors"];
$employment = @$_POST["employment"];
$hunger = @$_POST["hunger"];
$pastoralcare = @$_POST["pastoralcare"];
$supportgroups = @$_POST["supportgroups"];
$atriskyouth = @$_POST["atriskyouth"];
$environment = @$_POST["environment"];
$immigration = @$_POST["immigration"];
$disabledpeople = @$_POST["disabledpeople"];
$districtwork = @$_POST["districtwork"];
$churchbuilding = @$_POST["churchbuilding"];
$glbtqequality = @$_POST["glbtqequality"];
$lifelonglearning = @$_POST["lifelonglearning"];
$poverty = @$_POST["poverty"];
$victimsofabuse = @$_POST["victimsofabuse"];
$churchleadership = @$_POST["churchleadership"];
$globalissues = @$_POST["globalissues"];
$membership = @$_POST["membership"];
$publichealth = @$_POST["publichealth"];
$worshipservice = @$_POST["worshipservice"];
$communityoutreach = @$_POST["communityoutreach"];
$griefsupport = @$_POST["griefsupport"];
$memorialservices = @$_POST["memorialservices"];
$publicpolicy = @$_POST["publicpolicy"];
$culturalsupport = @$_POST["culturalsupport"];
$healthcare = @$_POST["healthcare"];
$mentalhealth = @$_POST["mentalhealth"];
$racialjustice = @$_POST["racialjustice"];
$criminaljustice = @$_POST["criminaljustice"];
$homelessness = @$_POST["homelessness"];
$music = @$_POST["music"];
$sanctuary = @$_POST["sanctuary"];
$motivation = @$_POST["motivation"];
$carpentry = @$_POST["carpentry"];
$counseling = @$_POST["counseling"];
$childcare = @$_POST["childcare"];
$softwareapps = @$_POST["softwareapps"];
$audio = @$_POST["audio"];
$electrical = @$_POST["electrical"];
$interviewing = @$_POST["interviewing"];
$homevisits = @$_POST["homevisits"];
$dataentry = @$_POST["dataentry"];
$creativewriting = @$_POST["creativewriting"];
$framingdrywall = @$_POST["framingdrywall"];
$networking = @$_POST["networking"];
$transportation = @$_POST["transportation"];
$webdevelopment = @$_POST["webdevelopment"];
$documenting = @$_POST["documenting"];
$heatingair = @$_POST["heatingair"];
$mealdelivery = @$_POST["mealdelivery"];
$signlanguage = @$_POST["signlanguage"];
$layoutdesign = @$_POST["layoutdesign"];
$storytelling = @$_POST["storytelling"];
$painting = @$_POST["painting"];
$foreignlanguage = @$_POST["foreignlanguage"];
$plumbing = @$_POST["plumbing"];
$drawingpainting = @$_POST["drawingpainting"];
$acting = @$_POST["acting"];
$instructionaldesign = @$_POST["instructionaldesign"];
$planning = @$_POST["planning"];
$budgeting = @$_POST["budgeting"];
$crafts = @$_POST["crafts"];
$costumes = @$_POST["costumes"];
$teaching = @$_POST["teaching"];
$hospitality = @$_POST["hospitality"];
$taxprep = @$_POST["taxprep"];
$photography = @$_POST["photography"];
$dance = @$_POST["dance"];
$tutoring = @$_POST["tutoring"];
$hostmc = @$_POST["hostmc"];
$investmentanalysis = @$_POST["investmentanalysis"];
$sewing = @$_POST["sewing"];
$instrumentalmusic = @$_POST["instrumentalmusic"];
$foodprep = @$_POST["foodprep"];
$vocalmusic = @$_POST["vocalmusic"];
$setupcleanup = @$_POST["setupcleanup"];
$scriptwriting = @$_POST["scriptwriting"];
$medical = @$_POST["medical"];
$assessment = @$_POST["assessment"];
$camping = @$_POST["camping"];
$legal = @$_POST["legal"];
$conflictmediation = @$_POST["conflictmediation"];
$mentalhealth = @$_POST["mentalhealth"];
$fundraising = @$_POST["fundraising"];
$gardening = @$_POST["gardening"];
$librarian = @$_POST["librarian"];
$groupfacilitation = @$_POST["groupfacilitation"];
$complementary = @$_POST["complementary"];
$projectmanagement = @$_POST["projectmanagement"];
$landscaping = @$_POST["landscaping"];
$propertymanagement = @$_POST["propertymanagement"];
$mentoring = @$_POST["mentoring"];
$eldercare = @$_POST["eldercare"];
$publicrelations = @$_POST["publicrelations"];
$motivationfeedback = @$_POST["motivationfeedback"];
$research = @$_POST["research"];
$strategicplanning = @$_POST["strategicplanning"];
$surveydesign = @$_POST["surveydesign"];
$boardleadership = @$_POST["boardleadership"];
$committeeinvolvement = @$_POST["committeeinvolvement"];
$religouseducation = @$_POST["religouseducation"];
$welcomingteam = @$_POST["welcomingteam"];
$programleadership = @$_POST["programleadership"];
$worshipassociate = @$_POST["worshipassociate"];
$smallgroupfacilitation = @$_POST["smallgroupfacilitation"];
$specialassignment = @$_POST["specialassignment"];
$pastoralcareteam = @$_POST["pastoralcareteam"];
$auw = @$_POST["auw"];
$daytimeconnections = @$_POST["daytimeconnections"];
$habitatforhumanity = @$_POST["habitatforhumanity"];
$beaconhousing = @$_POST["beaconhousing"];
$emerge = @$_POST["emerge"];
$augsburgfairviewacademy = @$_POST["augsburgfairviewacademy"];
$mninterfaith = @$_POST["mninterfaith"];
$surj = @$_POST["surj"];
$simpsonhomelessshelther = @$_POST["simpsonhomelessshelther"];
$projectprideforliving = @$_POST["projectprideforliving"];
$other = @$_POST["other"];
$volun1 = @$_POST["volun1"];
$volun2 = @$_POST["volun2"];
$volun3 = @$_POST["volun3"];
$volun4 = @$_POST["volun4"];
$rateform = @$_POST["rateform"];
$qom = @$_POST["qom"];
$missinginfo = @$_POST["missinginfo"];
$formpreference = @$_POST["formpreference"];
$othercomments = @$_POST["othercomments"];

$msg1 = "General Information\n" . $firstName . " " . $lastName . "\n" .
    $city . " " . $state . " " . $zipCode . "\n" .  $emailAddress .
    " " . $occupation . "\n\n";
$msg2 = "Availability" . "\n" . $daytime . "\n" . $evening . "\n" .
    $weekday . "\n" . $weekend . "\nStart Date: " . $startDate . "\n" .
    "Additional Considerations\n" . "Volunteer during/with the following\n" .
    $worship . " " . $childcare . " " . $communitysite . " " . $peers . " " .
    $family . "\n\n" ;
$msg3 = "Preferred Impact\n" . $activities . " " . $planning . " " . $people .
    "Prefer to work with\n" . $infants . " " . $children . " " . $adults . " " .
    $singleparents . " " . $seniors . "\n\n";
$msg4 = "Issues of Interest\n" . $addiction . " " . $education . " " . $hospice .
    " " . $parenting . " " . $spiritualgrowth . "\n" . $agingseniors . " " .
    $employment . " " . $hunger . " " . $pastoralcare . " " . $supportgroups . "\n" .
    $atriskyouth . " " . $environment . " " . $immigration . " " . $disabledpeople .
    " " . $districtwork . "\n" . $churchbuilding . " " . $glbtqequality . " " .
    $lifelonglearning . " " . $poverty . " " . $victimsofabuse . "\n" . $churchleadership
    . " " . $globalissues . " " . $membership . " " . $publichealth . " " . $worshipservice
    . "\n" . $communityoutreach . " " . $griefsupport . " " . $memorialservices . " " . $publicpolicy
    . "\n" . $culturalsupport . " " . $healthcare . " " . $mentalhealth . " " . $racialjustice .
    "\n" . $criminaljustice . " " . $homelessness . " " . $music . " " . $sanctuary . "\n" ;
$msg5 = "\nMotivation\n" . $motivation ;
$msg6 = "\n\nSkills & Interests\nCarpentry " . $carpentry .
        "\nCounseling " . $counseling .
        "\nChildcare " . $childcare .
        "\nSoftware Applications " . $softwareapps .
        "\nAudio " . $audio .
        "\nElectrical " . $electrical .
        "\nInterviewing " . $interviewing .
        "\nHome Visits " . $homevisits .
        "\nData Entry " . $dataentry .
        "\nCreative Writing " . $creativewriting .
        "\nFraming Dry Wall " . $framingdrywall .
        "\nNetworking " . $networking .
        "\nTransportation " . $transportation .
        "\nWeb Development " . $webdevelopment .
        "\nDocumenting " . $documenting .
        "\nHeating Air " . $heatingair .
        "\nMeal Delivery " . $mealdelivery .
        "\nSign Language " . $signlanguage .
        "\nLayout Design " . $layoutdesign .
        "\nStory Telling " . $storytelling .
        "\nPainting " . $painting .
        "\nForeign Language " . $foreignlanguage .
        "\nPlubmbing " . $plumbing .
        "\nDrawing / Painting " . $drawingpainting .
        "\nActing " . $acting .
        "\nInstructional Design " . $instructionaldesign .
        "\nPlanning " . $planning .
        "\nBudgeting " . $budgeting .
        "\nCrafts " . $crafts .
        "\nCostumes " . $costumes .
        "\nTeaching " . $teaching .
        "\nHospitality " . $hospitality .
        "\nTax Prep " . $taxprep .
        "\nPhotography " . $photography .
        "\nDance " . $dance .
        "\nTutoring " . $tutoring .
        "\nHost/MC " . $hostmc .
        "\nInvestment Analysis " . $investmentanalysis .
        "\nSewing " . $sewing .
        "\nInstrumental Music " . $instrumentalmusic .
        "\nFood Prep " . $foodprep .
        "\nVocal Music " . $vocalmusic .
        "\nSetup/Cleanup " . $setupcleanup .
        "\nScript Writing " . $scriptwriting .
        "\nMedical " . $medical .
        "\nAssessment " . $assessment .
        "\nCamping " . $camping .
        "\nLegal " . $legal .
        "\nConflict Mediation " . $conflictmediation .
        "\nMental Health " . $mentalhealth .
        "\nFundraising " . $fundraising .
        "\nGardening " . $gardening .
        "\nLibrarian " . $librarian .
        "\nGroup Facilitation " . $groupfacilitation .
        "\nComplementary" . $complementary .
        "\nProject Management " . $projectmanagement .
        "\nLandscaping " . $landscaping .
        "\nProperty Management " . $propertymanagement .
        "\nMentoring " . $mentoring .
        "\nElder Care " . $eldercare .
        "\nPublic Relations " . $publicrelations .
        "\nMotivation Feedback " . $motivationfeedback .
        "\nResearch " . $research .
        "\nStrategic Planning " . $strategicplanning .
        "\nSurvey Design " . $surveydesign;
$msg7 = "\n\nCurrent Volunteer Work\n" . $boardleadership . " " . $committeeinvolvement
    . " " . $music . " " . $religouseducation . " " . $welcomingteam . " " . $programleadership
    . " " . $worshipassociate . " " . $smallgroupfacilitation . " " . $specialassignment
    . " " . $pastoralcareteam . " " . $auw . " " . $daytimeconnections . "\nVolunteering at these partners\n"
    . $habitatforhumanity . "\n" . $beaconhousing . "\n" . $emerge . "\n"
    . $augsburgfairviewacademy . "\n" . $mninterfaith . "\n" . $surj . "\n" . $simpsonhomelessshelther
    . "\n" . $projectprideforliving . "\n" . $other . "\nVolunteering Outside of Church\n" .
    $volun1 . "\n" . $volun2 . "\n" . $volun3 . "\n" . $volun4 . "\n\n";
$msg8 = "Rate this Form " . $rateform . "\nMissing Questions\n" . $qom .
        "\n" . $missinginfo . "\nPreferred Registry\n" . $formpreference;
$msg9 = "\nOther Comments\n" . $othercomments;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<br />
    <fieldset>
        <legend>General Information</legend>
        <p>Please fill in your information in order to volunteer and click
            <strong>Next</strong> when all information is entered.
        </p>
        <form action="" method="post">
        <ul>
            <li>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="state">State</label>
                <select name="state" id="state" required >
                    <option value="">States</option>
                    <option value="IA">Iowa</option>
                    <option value="ND">North Dakota</option>
                    <option value="MN">Minnesota</option>
                    <option value="SD">South Dakota</option>
                    <option value="WI">Wisconsin</option>
                </select>
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="zipCode">Zip Code </label>
                <input type="text" name="zipCode" id="zipCode" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="emailAddress">Email Address</label>
                <input type="text" name="emailAddress" id="emailAddress" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" id="occupation" value="" required />
                <?php /** need to do error checking & sanitize */ ?>
            </li>
        </ul>
        <p>
            <label>Preferred Time Range</label><br>
            <input type="checkbox" id="daytime" value="daytime" />
            <label for="daytime">Day Time</label>
            <input type="checkbox" id="evening" value="evening" />
            <label for="evening">Evening</label>
        </p>
        <p>
            <label>Preferred Day Range</label><br>
            <input type="checkbox" id="weekday" value="weekday" />
            <label for="weekday">Weekdays</label>
            <input type="checkbox" id="weekend" value="weekend" />
            <label for="weekend">Weekends</label>
        </p>
        <p>
            <label>Start Date</label>
            <?php //insert calender ?>
            <input type="text" id="startDate" value="startDate" />
        </p>
        <p>
            <label>Additional Considerations</label><br>
            <input type="checkbox" id="worship" value="worship" />
            <label for="worship">Volunteer during worship service</label>
            <br>
            <input type="checkbox" id="childcare" value="childcare" />
            <label for="childcare">Volunteer when childcare is available</label>
            <br>
            <input type="checkbox" id="communitysite" value="communitysite" />
            <label for="communitysite">Volunteer at a community site</label>
            <br>
            <input type="checkbox" id="peers" value="peers" />
            <label for="peers">Volunteer with peers</label>
            <br>
            <input type="checkbox" id="family" value="family" />
            <label for="family">Volunteer with family</label>
        </p>
        <p>
            <label>How do I prefer to have an impact?</label>
            <br>
            <label>I prefer to work with</label>
            <br>
            <input type="checkbox" id="activities" value="activities" />
            <label for="activities">Activities</label>
            <br>
            <input type="checkbox" id="planning" value="planning" />
            <label for="planning">Planning</label>
            <br>
            <input type="checkbox" id="people" value="people" />
            <label for="people">People</label>
            <br>
            <br>
            <label>I prefer to work with</label>
            <br>
            <input type="checkbox" id="infants" value="infants" />
            <label for="infants">Infants / Pre-Schoolers</label>
            <br>
            <input type="checkbox" id="children" value="children" />
            <label for="children">Children</label>
            <br>
            <input type="checkbox" id="adults" value="adults" />
            <label for="adults">Adults</label>
            <br>
            <input type="checkbox" id="singleparents" value="singleparents" />
            <label for="singleparents">Single Parents</label>
            <br>
            <input type="checkbox" id="seniors" value="seniors" />
            <label for="seniors">Seniors</label>
        </p>
        <table>
            <th><label>What issues do I have a heart for?</label><br></th>
                <tr>
                    <td>
                    <input type="checkbox" id="addiction" value="addiction" />
                    <label for="addiction">Addiction</label>
                    </td>
                    <td>
                    <input type="checkbox" id="education" value="education" />
                    <label for="education">Education</label>
                    </td>
                    <td>
                    <input type="checkbox" id="hospice" value="hospice" />
                    <label for="hospice">Hospice</label>
                    </td>
                    <td>
                    <input type="checkbox" id="parenting" value="parenting" />
                    <label for="parenting">Parenting</label>
                    </td>
                    <td>
                    <input type="checkbox" id="spiritualgrowth" value="spiritualgrowth" />
                    <label for="spiritualgrowth">Spiritual Growth</label>
                    </td>                    
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="agingseniors" value="agingseniors" />
                    <label for="agingseniors">Aging Seniors</label>
                    </td>
                    <td>
                    <input type="checkbox" id="employment" value="employment" />
                    <label for="employment">Employment</label>
                    </td>
                    <td>
                    <input type="checkbox" id="hunger" value="hunger" />
                    <label for="hunger">Hunger</label>
                    </td>
                    <td>
                    <input type="checkbox" id="pastoralcare" value="pastoralcare" />
                    <label for="pastoralcare">Pastoral Care</label>
                    </td>
                    <td>
                    <input type="checkbox" id="supportgroups" value="supportgroups" />
                    <label for="supportgroups">Support Groups</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="atriskyouth" value="atriskyouth" />
                    <label for="atriskyouth">At Risk Youth</label>
                    </td>
                    <td>
                    <input type="checkbox" id="environment" value="environment" />
                    <label for="environment">Environment</label>
                    </td>
                    <td>
                    <input type="checkbox" id="immigration" value="immigration" />
                    <label for="immigration">Immigration</label>
                    </td>
                    <td>
                    <input type="checkbox" id="disabledpeople" value="disabledpeople" />
                    <label for="disabledpeople">People with Disabilities</label>
                    </td>
                    <td>
                    <input type="checkbox" id="districtwork" value="districtwork" />
                    <label for="districtwork">District Work</label>                    
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="churchbuilding" value="churchbuilding" />
                    <label for="churchbuilding">Church Building</label>
                    </td>
                    <td>
                    <input type="checkbox" id="glbtqequality" value="glbtqequality" />
                    <label for="glbtqequality">GLBTQ Equality</label>
                    </td>
                    <td>
                    <input type="checkbox" id="lifelonglearning" value="lifelonglearning" />
                    <label for="lifelonglearning">Life-Long Learning</label>
                    </td>
                    <td>
                    <input type="checkbox" id="poverty" value="poverty" />
                    <label for="poverty">Poverty</label>
                    </td>
                    <td>
                    <input type="checkbox" id="victimsofabuse" value="victimsofabuse" />
                    <label for="victimsofabuse">Victims of Abuse</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="churchleadership" value="churchleadership" />
                    <label for="churchleadership">Church Leadership</label>
                    </td>
                    <td>
                    <input type="checkbox" id="globalissues" value="globalissues" />
                    <label for="globalissues">Global Issues</label>
                    </td>
                    <td>
                    <input type="checkbox" id="membership" value="membership" />
                    <label for="membership">Membership</label>
                    </td>
                    <td>
                    <input type="checkbox" id="publichealth" value="publichealth" />
                    <label for="publichealth">Public Health</label>
                    </td>
                    <td>
                    <input type="checkbox" id="worshipservice" value="worshipservice" />
                    <label for="worshipservice">Worship Service</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="communityoutreach" value="communityoutreach" />
                    <label for="communityoutreach">Community Outreach</label>
                    </td>
                    <td>
                    <input type="checkbox" id="griefsupport" value="griefsupport" />
                    <label for="griefsupport">Grief Support</label>
                    </td>
                    <td>
                    <input type="checkbox" id="memorialservices" value="memorialservices" />
                    <label for="memorialservices">Memorial Services</label>
                    </td>
                    <td>
                    <input type="checkbox" id="publicpolicy" value="publicpolicy" />
                    <label for="publicpolicy">Public Policy</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="culturalsupport" value="culturalsupport" />
                    <label for="culturalsupport">Cultural Support</label>
                    </td>
                    <td>
                    <input type="checkbox" id="healthcare" value="healthcare" />
                    <label for="healthcare">Health Care</label>
                    </td>
                    <td>
                    <input type="checkbox" id="mentalhealth" value="mentalhealth" />
                    <label for="mentalhealth">Mental Health</label>
                    </td>
                    <td>
                    <input type="checkbox" id="racialjustice" value="racialjustice" />
                    <label for="racialjustice">Racial Justice</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="checkbox" id="criminaljustice" value="criminaljustice" />
                    <label for="criminaljustice">Criminal Justice</label>
                    </td>
                    <td>
                    <input type="checkbox" id="homelessness" value="homelessness" />
                    <label for="homelessness">Homelessness</label>
                    </td>
                    <td>
                    <input type="checkbox" id="music" value="music" />
                    <label for="music">Music</label>
                    </td>
                    <td>
                    <input type="checkbox" id="sanctuary" value="sanctuary" />
                    <label for="sanctuary">Sanctuary</label>
                    </td>
                </tr>
        </table>
        <br>
        <p>
            <label for="motivation">State your motivation for volunteering</label>
            <input type="text" name="motivation" id="motivation" value="" required />
        </p>
        <table>
            <th>Skills & Interests</th>
                <tr>
                <td>1st Button = Expert</td>
                <td>2nd Button = Interested</td>
                </tr>
            <tr><td></td></tr>
                <tr>
                    <th>Building & Maintence</th>
                    <th>Career</th>
                    <th>Caregiving</th>
                    <th>Computer</th>
                    <th>Communication</th>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="carpentry" value="expert">
                        <input type="radio" name="carpentry" value="interested">
                        Carpentry
                    </td>
                    <td>
                        <input type="radio" name="counseling" value="expert">
                        <input type="radio" name="counseling" value="interested">
                        Counseling
                    </td>
                    <td>
                        <input type="radio" name="childcare" value="expert">
                        <input type="radio" name="childcare" value="interested">
                        Childcare
                    </td>
                    <td>
                        <input type="radio" name="softwareapps" value="expert">
                        <input type="radio" name="softwareapps" value="interested">
                        Software Application
                    </td>
                    <td>
                        <input type="radio" name="audio" value="expert">
                        <input type="radio" name="audio" value="interested">
                        Audio
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="electrical" value="expert">
                        <input type="radio" name="electrical" value="interested">
                        Electrical
                    </td>
                    <td>
                        <input type="radio" name="interviewing" value="expert">
                        <input type="radio" name="interviewing" value="interested">
                        Interviewing
                    </td>
                    <td>
                        <input type="radio" name="homevisits" value="expert">
                        <input type="radio" name="homevisits" value="interested">
                        Home Visits
                    </td>
                    <td>
                        <input type="radio" name="dataentry" value="expert">
                        <input type="radio" name="dataentry" value="interested">
                        Data Entry
                    </td>
                    <td>
                        <input type="radio" name="creativewriting" value="expert">
                        <input type="radio" name="creativewriting" value="interested">
                        Creative Writing
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="framingdrywall" value="expert">
                        <input type="radio" name="framingdrywall" value="interested">
                        Framing/Drywall
                    </td>
                    <td>
                        <input type="radio" name="networking" value="expert">
                        <input type="radio" name="networking" value="interested">
                        Networking
                    </td>
                    <td>
                        <input type="radio" name="transportation" value="expert">
                        <input type="radio" name="transportation" value="interested">
                        Transportation
                    </td>
                    <td>
                        <input type="radio" name="webdevelopment" value="expert">
                        <input type="radio" name="webdevelopment" value="interested">
                        Web Development
                    </td>
                    <td>
                        <input type="radio" name="documenting" value="expert">
                        <input type="radio" name="documenting" value="interested">
                        Documenting / Editing
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="heatingair" value="expert">
                        <input type="radio" name="heatingair" value="interested">
                        Heating & Air Systems
                    </td>
                    <td></td>
                    <td>
                        <input type="radio" name="mealdelivery" value="expert">
                        <input type="radio" name="mealdelivery" value="interested">
                        Meal Delivery
                    </td>
                    <td></td>
                    <td>
                        <input type="radio" name="signlanguage" value="expert">
                        <input type="radio" name="signlanguage" value="interested">
                        Sign Language
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="layoutdesign" value="expert">
                        <input type="radio" name="layoutdesign" value="interested">
                        Layout & Design
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="radio" name="storytelling" value="expert">
                        <input type="radio" name="storytelling" value="interested">
                        Storytelling
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="painting" value="expert">
                        <input type="radio" name="painting" value="interested">
                        Painting
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="radio" name="foreignlanguage" value="expert">
                        <input type="radio" name="foreignlanguage" value="interested">
                        Foreign Languages
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="plumbing" value="expert">
                        <input type="radio" name="plumbing" value="interested">
                        Plumbing
                    </td>
                </tr>
            <tr><td></td></tr>
                <tr>
                    <th>Creative Arts</th>
                    <th>Dramatic Arts</th>
                    <th>Education</th>
                    <th>Event Management</th>
                    <th>Financial Skills</th>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="drawingpainting" value="expert">
                        <input type="radio" name="drawingpainting" value="interested">
                        Drawing / Painting
                    </td>
                    <td>
                        <input type="radio" name="acting" value="expert">
                        <input type="radio" name="acting" value="interested">
                        Acting
                    </td>
                    <td>
                        <input type="radio" name="instructionaldesign" value="expert">
                        <input type="radio" name="instructionaldesign" value="interested">
                        Instructional Design
                    </td>
                    <td>
                        <input type="radio" name="planning" value="expert">
                        <input type="radio" name="planning" value="interested">
                        Planning
                    </td>
                    <td>
                        <input type="radio" name="budgeting" value="expert">
                        <input type="radio" name="budgeting" value="interested">
                        Budgeting
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="crafts" value="expert">
                        <input type="radio" name="crafts" value="interested">
                        Crafts
                    </td>
                    <td>
                        <input type="radio" name="costumes" value="expert">
                        <input type="radio" name="costumes" value="interested">
                        Costumes
                    </td>
                    <td>
                        <input type="radio" name="teaching" value="expert">
                        <input type="radio" name="teaching" value="interested">
                        Teaching
                    </td>
                    <td>
                        <input type="radio" name="hospitality" value="expert">
                        <input type="radio" name="hospitality" value="interested">
                        Hospitality
                    </td>
                    <td>
                        <input type="radio" name="taxprep" value="expert">
                        <input type="radio" name="taxprep" value="interested">
                        Tax Prep
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="photography" value="expert">
                        <input type="radio" name="photography" value="interested">
                        Photography
                    </td>
                    <td>
                        <input type="radio" name="dance" value="expert">
                        <input type="radio" name="dance" value="interested">
                        Dance
                    </td>
                    <td>
                        <input type="radio" name="tutoring" value="expert">
                        <input type="radio" name="tutoring" value="interested">
                        Tutoring
                    </td>
                    <td>
                        <input type="radio" name="hostmc" value="expert">
                        <input type="radio" name="hostmc" value="interested">
                        Host / MC
                    </td>
                    <td>
                        <input type="radio" name="investmentanalysis" value="expert">
                        <input type="radio" name="investmentanalysis" value="interested">
                        Investment Analysis
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="sewing" value="expert">
                        <input type="radio" name="sewing" value="interested">
                        Sewing
                    </td>
                    <td>
                        <input type="radio" name="instrumentalmusic" value="expert">
                        <input type="radio" name="instrumentalmusic" value="interested">
                        Instrumental Music
                    </td>
                    <td></td>
                    <td>
                        <input type="radio" name="foodprep" value="expert">
                        <input type="radio" name="foodprep" value="interested">
                        Food Prep
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="vocalmusic" value="expert">
                        <input type="radio" name="vocalmusic" value="interested">
                        Vocal Music
                    </td>
                    <td></td>
                    <td>
                        <input type="radio" name="setupcleanup" value="expert">
                        <input type="radio" name="setupcleanup" value="interested">
                        Setup / Cleanup
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="scriptwriting" value="expert">
                        <input type="radio" name="scriptwriting" value="interested">
                        Script Writing
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <tr><td></td></tr>
                <tr>
                    <th>Healthcare</th>
                    <th>Management</th>
                    <th>Outdoor Skills</th>
                    <th>Other Professional Skills</th>
                    <th>Social Skills</th>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="medical" value="expert">
                        <input type="radio" name="medical" value="interested">
                        Medical
                    </td>
                    <td>
                        <input type="radio" name="assessment" value="expert">
                        <input type="radio" name="assessment" value="interested">
                        Assessment
                    </td>
                    <td>
                        <input type="radio" name="camping" value="expert">
                        <input type="radio" name="camping" value="interested">
                        Camping
                    </td>
                    <td>
                        <input type="radio" name="legal" value="expert">
                        <input type="radio" name="legal" value="interested">
                        Legal
                    </td>
                    <td>
                        <input type="radio" name="conflictmediation" value="expert">
                        <input type="radio" name="conflictmediation" value="interested">
                        Conflict Mediation
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="mentalhealth" value="expert">
                        <input type="radio" name="mentalhealth" value="interested">
                        Mental Health
                    </td>
                    <td>
                        <input type="radio" name="fundraising" value="expert">
                        <input type="radio" name="fundraising" value="interested">
                        Fundraising
                    </td>
                    <td>
                        <input type="radio" name="gardening" value="expert">
                        <input type="radio" name="gardening" value="interested">
                        Gardening
                    </td>
                    <td>
                        <input type="radio" name="librarian" value="expert">
                        <input type="radio" name="librarian" value="interested">
                        Librarian
                    </td>
                    <td>
                        <input type="radio" name="groupfacilitation" value="expert">
                        <input type="radio" name="groupfacilitation" value="interested">
                        Group Facilitation
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="complementary" value="expert">
                        <input type="radio" name="complementary" value="interested">
                        Complementary
                    </td>
                    <td>
                        <input type="radio" name="projectmanagement" value="expert">
                        <input type="radio" name="projectmanagement" value="interested">
                        Project Management
                    </td>
                    <td>
                        <input type="radio" name="landscaping" value="expert">
                        <input type="radio" name="landscaping" value="interested">
                        Landscaping
                    </td>
                    <td>
                        <input type="radio" name="propertymanagement" value="expert">
                        <input type="radio" name="propertymanagement" value="interested">
                        Property Management
                    </td>
                    <td>
                        <input type="radio" name="mentoring" value="expert">
                        <input type="radio" name="mentoring" value="interested">
                        Mentoring
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="eldercare" value="expert">
                        <input type="radio" name="eldercare" value="interested">
                        Elder Care
                    </td>
                    <td>
                        <input type="radio" name="publicrelations" value="expert">
                        <input type="radio" name="publicrelations" value="interested">
                        Public Relations
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="radio" name="motivationfeedback" value="expert">
                        <input type="radio" name="motivationfeedback" value="interested">
                        Motivation / Feedback
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="research" value="expert">
                        <input type="radio" name="research" value="interested">
                        Research
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="strategicplanning" value="expert">
                        <input type="radio" name="strategicplanning" value="interested">
                        Strategic Planning
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="surveydesign" value="expert">
                        <input type="radio" name="surveydesign" value="interested">
                        Survey Design
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        </table>

        <p>
            <label>Current Volunteer Work</label>
            <br>
            <br>
            <label>Current Volunteer Activities</label>
            <br>
            <input type="checkbox" id="boardleadership" value="boardleadership" />
            <label for="boardleadership">Board Leadership</label>
            <br>
            <input type="checkbox" id="committeeinvolvement" value="committeeinvolvement" />
            <label for="committeeinvolvement">Committee Involvement</label>
            <br>
            <input type="checkbox" id="music" value="music" />
            <label for="music">Music</label>
            <br>
            <input type="checkbox" id="religouseducation" value="religouseducation" />
            <label for="religouseducation">Religous Education</label>
            <br>
            <input type="checkbox" id="welcomingteam" value="welcomingteam" />
            <label for="welcomingteam">Welcoming Team</label>
            <br>
            <input type="checkbox" id="programleadership" value="programleadership" />
            <label for="programleadership">Program Leadership</label>
            <br>
            <input type="checkbox" id="worshipassociate" value="worshipassociate" />
            <label for="worshipassociate">Worship Associate</label>
            <br>
            <input type="checkbox" id="smallgroupfacilitation" value="smallgroupfacilitation" />
            <label for="smallgroupfacilitation">Small Group Facilitation</label>
            <br>
            <input type="checkbox" id="specialassignment" value="specialassignment" />
            <label for="specialassignment">Special Assignment</label>
            <br>
            <input type="checkbox" id="pastoralcareteam" value="pastoralcareteam" />
            <label for="pastoralcareteam">Pastoral Care Team</label>
            <br>
            <input type="checkbox" id="auw" value="auw" />
            <label for="auw">AUW</label>
            <br>
            <input type="checkbox" id="daytimeconnections" value="daytimeconnections" />
            <label for="daytimeconnections">Daytime Connections</label>
            <br>
            <br>
            <label>Currently Volunteering at these Partners</label>
            <br>
            <input type="checkbox" id="habitatforhumanity" value="habitatforhumanity" />
            <label for="habitatforhumanity">Habitat For Humanity</label>
            <br>
            <input type="checkbox" id="beaconhousing" value="beaconhousing" />
            <label for="beaconhousing">Beacon Housing</label>
            <br>
            <input type="checkbox" id="emerge" value="emerge" />
            <label for="emerge">Emerge</label>
            <br>
            <input type="checkbox" id="augsburgfairviewacademy" value="augsburgfairviewacademy" />
            <label for="augsburgfairviewacademy">Augsburg Fairview Academy</label>
            <br>
            <input type="checkbox" id="mninterfaith" value="mninterfaith" />
            <label for="mninterfaith">MN Interfaith</label>
            <br>
            <input type="checkbox" id="surj" value="surj" />
            <label for="surj">SURJ</label>
            <br>
            <input type="checkbox" id="simpsonhomelessshelther" value="simpsonhomelessshelther" />
            <label for="simpsonhomelessshelther">Simpson Homeless Shelther</label>
            <br>
            <input type="checkbox" id="projectprideforliving" value="projectprideforliving" />
            <label for="projectprideforliving">Project Pride For Living</label>
            <br>
            <label for="other">Other</label>
            <input type="text" name="other" id="other" value="" />
            <br>
            <br>
            <label>Currently Volunteering Outside of The Church</label><br>
            <input type="text" name="volun1" id="volun1" value="" /><br>
            <input type="text" name="volun2" id="volun2" value="" /><br>
            <input type="text" name="volun3" id="volun3" value="" /><br>
            <input type="text" name="volun4" id="volun4" value="" /><br>
        </p>
        
        <p>
            <table>
            <tr>
                <th>Rate this Form</th>
            </tr>
                <tr>
                    <td><strong>Was this form easy to navigate?</strong></td>
                </tr>
                <tr>
                    <td><input type="radio" name="rateform" value="1">1
                    <input type="radio" name="rateform" value="2">2
                    <input type="radio" name="rateform" value="3">3
                    <input type="radio" name="rateform" value="4">4
                    <input type="radio" name="rateform" value="5">5</td>
                </tr>
                <tr>
                    <td><strong>Were there any questions or options missing?</strong></td>
                </tr>
                <tr>
                    <td><input type="radio" name="qom" value="no">No
                    </td>
                    <td>
                        <input type="radio" name="qom" value="yes">Yes
                    </td>
                    <td>
                        <input type="text" name="missinginfo" value="">
                    </td>                    
                </tr>
                <tr>
                    <td><strong>Do you prefer this form or the paper form?</strong></td>
                </tr>
                <tr>
                    <td><input type="radio" name="formpreference" value="online">Online</td>
                    <td><input type="radio" name="formpreference" value="paper">Paper</td>
                </tr>
            </table>
        </p>
        
        <p>
            <label>Other Comments</label>
            <br>
            <input type="text" name="othercomments" value="">
        </p>

        <p>
            <input type="submit" value="Submit" />
            <input type="hidden" name="button_pressed" value="1"/>
        </p>
        </form>
        <?php
        if(isset($_POST['button_pressed'])) {
            $to = 'church@email.com';
            $subject = 'Volunteer Registration Form';
            $message = $msg1 . "\n" . $msg2 . "\n" . $msg3 . "\n" . $msg4 . "\n" . $msg5 . "\n" .
                $msg7 . "\n" . $msg8 . "\n" . $msg9;
            $mail($to, $subject,$message);
        }
        ?>
    </fieldset>
<?php require_once("footer.php"); ?>
</body>
</html>

