<?php
/**
 * Created by PhpStorm.
 * User: AlexPhilavong
 * Date: 1/12/2017
 * Time: 12:56 PM
 */
require_once ("header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <script src="validate.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<br />
<form method="post" action="https://script.google.com/macros/s/AKfycbz02R4DIeLD8UQsQ-c08GsEjCuQFLFSxIA1ihe_zcl22lPaNtw/exec">
    <div class="div1">
        <fieldset>
            <legend>General Information</legend>
            <p>Please fill in your information in order to volunteer and click
                <strong>Next</strong> when all information is entered.
            </p>
            <ul>
                <li>
                    <label for="name">Name *</label>
                    <input type="text" name="name" id="name" value="" placeholder="John Smith" onblur="validateName(name)" />
                    <span id="nameError" style="display: none;">You can only use alphabetic characters, hyphens and apostrophes</span>
                    <div style="background-color: red"><?php echo $nameErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                    <label for="address">Address *</label>
                    <input type="text" name="address" id="address" value="" placeholder="123 Oak ST" onblur="validateAddress(name)" />
                    <span id="addressError" style="display: none;">You can only use alphabetic characters, numbers, hyphens and apostrophes</span>
                    <div style="background-color: red"><?php echo $addressErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                    <label for="city">City *</label>
                    <input type="text" name="city" id="city" value="" placeholder="Metropolis" onblur="validateCity(name)" />
                    <span id="cityError" style="display: none;">You can only use alphabetic characters, hyphens and apostrophes</span>
                    <div style="background-color: red"><?php echo $cityErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                    <label for="state">State *</label>
                    <select name="state" id="state" onblur="validateSelect(name)">
                        <option value="">States</option>
                        <option value="iowa">Iowa</option>
                        <option value="minnesota">Minnesota</option>
                        <option value="wisconsin">Wisconsin</option>
                    </select>
                    <span class="validateError" id="stateError" style="display: none;">You must select your state of residence.</span>
                    <div style="background-color: red"><?php echo $stateErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                    <label for="zcode">Zipcode *</label>
                    <input type="text" name="zcode" id="zcode" value="" placeholder="54321" onblur="validateZcode(name)" />
                    <span id="zcodeError" style="display: none;">You can only use numbers</span>
                    <div style="background-color: red"><?php echo $zcodeErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                        <label for="email">Email *</label>
                        <input type="text" name="email" id="email" value="" placeholder="jsmith@live.com" onblur="validateEmail(value)" />
                        <span id="emailError" style="display: none;">You must enter a valid email address</span>
                        <div style="background-color: red"><?php echo $emailErr;?></div>
                </li>
            </ul>

            <ul>
                <li>
                    <label for="occupation">Occupation</label>
                    <input type="text" name="occupation" id="occupation" value="" required />
                    <?php /** need to do error checking & sanitize */ ?>
                </li>
            </ul>

            <br>
        </fieldset>
    </div>

    <div class="div2">
        <fieldset>
            <legend>Availability and Motivation</legend>
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
                    <td style="width:20%">
                        <input type="checkbox" id="addiction" value="addiction" />
                        <label for="addiction">Addiction</label>
                    </td>
                    <td style="width:20%">
                        <input type="checkbox" id="education" value="education" />
                        <label for="education">Education</label>
                    </td>
                    <td style="width:20%">
                        <input type="checkbox" id="hospice" value="hospice" />
                        <label for="hospice">Hospice</label>
                    </td>
                    <td style="width:20%">
                        <input type="checkbox" id="parenting" value="parenting" />
                        <label for="parenting">Parenting</label>
                    </td>
                    <td style="width:20%">
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
            <br>
        </fieldset>
    </div>

    <div class="div3">
        <fieldset>
            <legend>Skills & Interests</legend>
            <table style="width:80%">
                <tr>
                    <td style="width:20%">1st Button = Expert</td>
                    <td style="width:20%">2nd Button = Interested</td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <th style="width:20%">Building & Maintence</th>
                    <th style="width:20%">Career</th>
                    <th style="width:20%">Caregiving</th>
                    <th style="width:20%">Computer</th>
                    <th style="width:20%">Communication</th>
                </tr>
                <tr>
                    <td style="width:20%">
                        <input type="radio" name="carpentry" value="expert">
                        <input type="radio" name="carpentry" value="interested">
                        Carpentry
                    </td>
                    <td style="width:20%">
                        <input type="radio" name="counseling" value="expert">
                        <input type="radio" name="counseling" value="interested">
                        Counseling
                    </td>
                    <td style="width:20%">
                        <input type="radio" name="childcare" value="expert">
                        <input type="radio" name="childcare" value="interested">
                        Childcare
                    </td>
                    <td style="width:20%">
                        <input type="radio" name="softwareapps" value="expert">
                        <input type="radio" name="softwareapps" value="interested">
                        Software Application
                    </td>
                    <td style="width:20%">
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
                <tr><td> </td></tr>
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
            <br>
        </fieldset>
    </div>

    <div class="div4">
        <fieldset>
            <legend>Current Volunteer Work</legend>
            <p>
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
                <input type="text" name="volun1" id="volun1" value="" /><br>
                <input type="text" name="volun1" id="volun1" value="" /><br>
                <input type="text" name="volun1" id="volun1" value="" /><br>
            </p>
        </fieldset>
    </div>

    <div class="div5">
        <fieldset>
            <legend>Comments</legend>
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
        </fieldset>
        <p align="center">
            <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
        </p>
    </div>
</form>
    <?php   //<div align="right"><a href="Availability.php">Next</a></div> ?>

<?php require_once("footer.php");?>
</body>
</html>
