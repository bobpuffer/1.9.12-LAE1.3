<?PHP  //$Id: mysql.php 68 2009-07-31 18:23:01Z dlandau $

// THIS FILE IS DEPRECATED!  PLEASE DO NOT MAKE CHANGES TO IT!
//
// IT IS USED ONLY FOR UPGRADES FROM BEFORE MOODLE 1.7, ALL 
// LATER CHANGES SHOULD USE upgrade.php IN THIS DIRECTORY.
//
// This file is tailored to MySQL

function calendar_upcoming_upgrade($oldversion=0) {

    global $CFG;
    
    $result = true;

    if ($oldversion < 2004041000 and $result) {
        $result = true; //Nothing to do
    }

    //////  DO NOT ADD NEW THINGS HERE!!  USE upgrade.php and the lib/ddllib.php functions.

    //Finally, return result
    return $result;
}
