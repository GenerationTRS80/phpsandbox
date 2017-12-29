<?php
  date_default_timezone_set('America/Los_Angeles');


  //// Dates and Time
  // $day = date('d');
  // $month = date('m');
  // $year = date('y');
  // $dayOfWeek = date('l');
  // $monthDayYear = date('m/d/y');
  // $hour = date('h');
  // $minute= date('i'); 
  // $second = date('s');
  // $am = date('a');
  // $pm = date('p');

  // echo "$day  <br>"; // Day
  // echo "$dayOfWeek  <br>"; // Day of week
  // echo "$monthDayYear <br>";  // Month Date year
  // echo "Hour = $hour  <br>"; // Hour
  // echo "Minute = $minute  <br>"; // Minute
  // echo "Second = $second  <br>"; // Second
  // echo "PM = $pm  <br><br>"; // AM/PM

  // echo date('h:i:sa');

  # *** Make Time ***

  /*

  Unix time (also known as POSIX time or epoch time)[citation needed] is a system for describing a point in time, defined as the number of seconds that have elapsed since 00:00:00 Coordinated Universal Time (UTC), Thursday, 1 January 1970,

  */

  // # Time Stamp
  // $timestamp = mktime(10,14,54,9,10,1981);

  // echo "Timestamp $timestamp <br>";

  // //Time with seconds
  // echo date('m/d/y h:i:sa', $timestamp);

  # String to Time

  $stringDate = strtotime('8:29pm 28 December 2017');

  echo "Todays date written as a string converted to timestamp value  $stringDate <br><br>";
  
 // STring to date Today
  $dateMonthDayYear_SedHr = date('m/d/y h:i:sa',$stringDate);
  echo "Today's date and time =$dateMonthDayYear_SedHr <br><br>";

  // String to date Tomorrow
  $stringTomorrow = strtotime('tomorrow');
  $dateTomorrow = date('m/d/y h:i:sa',$stringTomorrow);
  echo "Tomorrow =$dateTomorrow <br><br>";

  // String to date End of Week
  $stringNextSunday = strtotime('next sunday');
  $dateSunday = date('m/d/y h:i:sa',$stringNextSunday);
  echo "Next Sunday =$dateSunday <br><br>";

  
  // Add Days Months or Years
  $stringAddTime = strtotime('+ 2 days');
  $dateAddTime = date('m/d/y h:i:sa',$stringAddTime);
  echo "2 days ahead =$dateAddTime <br><br>";
?>