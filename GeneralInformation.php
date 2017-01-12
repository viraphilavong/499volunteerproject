<?php
/**
 * Created by PhpStorm.
 * User: AlexPhilavong
 * Date: 1/12/2017
 * Time: 12:56 PM
 * Started just a little bit on the first page. 
 * Made me realize we need to come up with a few more files..
 * Header / Footer / sessions / validation / functions
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
</head>
<body>
<br />
    <fieldset>
        <legend>General Information</legend>
        <p>Please fill in your information in order to volunteer and select
            <strong>Next</strong> when all information is entered.
        </p>
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
                <label for="zipCode">Zip Code</label>
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
    </fieldset>
</body>
</html>
