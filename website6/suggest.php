<?php
  // People Array
  $people[]= "Steve";
  $people[]= "John";
  $people[]= "Kathy";
  $people[]= "Evan"; 
  $people[]= "Anthony";  
  $people[]= "Tom";   
  $people[]= "Rhonda";     
  $people[]= "Hal";     
  $people[]= "Ernie";    
  $people[]= "Johanna"; 
  $people[]= "Farrah"; 
  $people[]= "Linda"; 
  $people[]= "Shawn"; 
  $people[]= "Oliva"; 
  $people[]= "Derek";
  $people[]= "Dan";
  $people[]= "Denise";
  $people[]= "Darren";
  $people[]= "Michael";
  $people[]= "Tim";
  $people[]= "Robert";
  $people[]= "Timmy";
  $people[]= "Cleopatra";
  $people[]= "Abraham";
  $people[]= "Madison";
  $people[]= "Gilbert";
  $people[]= "Samatha";
  $people[]= "Erinie";
  $people[]= "Steve";
  $people[]= "Jason";
  $people[]= "Richard";
  $people[]= "Mary";
  $people[]= "Phil";
  $people[]= "Bill";
  $people[]= "Andy";
  $people[]= "Beth";
  $people[]= "Kami";

  // Get Query String
  $sQuery = $_REQUEST['q'];

  // Set default value as suggestions
  $suggestion = "";

  // Get Suggestions 
  if($sQuery !== ""){
      $Query = strtolower($sQuery);
      $iLen = strlen($sQuery);

      foreach($people as $person){
        // stristr = Find the first occurance in $sQuery  
        if(stristr($sQuery, substr($person,0,$iLen))){

          //  === is equal too
          if($suggestion === ""){
              $suggestion = $person;

          } else {
              // Append another person if the search matches
              $suggestion .= ", $person";

          }
        }
      }
  }

// IF there is NOT a Suggestion ($suggestion ==== "" then (?) say "No suggestion" else (:) say $suggestion
echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>