<?php


    $path='/dir0/dir/myfile.php';
    $file= 'file1.txt';

/* # File info
    # Return filename
    $filename = basename($path);
    $dirname = dirname($path);

    # You can use file_exist for both a file and folder
    $fileexists = file_exists($file);

    # Get abs path
    $realpath = realpath($file);

    # is_file you can use to just check for a file and not a folder
    $isfile = is_file($file);

    # is file writeable
    $iswriteable = is_writable($file);
    $isreadable = is_readable($file);

    echo "The filename = $filename <br> The directory name = $dirname <br> File exists = $fileexists";
    echo "<br>The realpath = $realpath <br> Is file=$isfile <br> Is writeable = $iswriteable <br> Is readable = $isreadable";

 */


/* # Manipulate file and directory
  # Create Directory
  # mkdir('testing');

  # Remove directory
  # rmdir('testing');

  # Copy file
  # echo copy('file1.txt','file2.txt');

  # rename file
  # rename('file2.txt','myfile.txt');

  # Delete file
  # unlink('myfile.txt');

*/

/* # read and write file contents to page
 # Write to file
 # echo file_put_contents($file, 'Hello World');

 # Write from file to string
 # echo file_get_contents($file);

 # Append contents
 # $current = file_get_contents($file);

 # $current .= ' Goodby World!';

 # file_put_contents($file,$current);
*/

/* # Put a file into a variable

 # Open file for reading, note 2nd paramenter means read from
  $handle = fopen($file, 'r');
  $data = fre   ad($handle,filesize($file));
  echo $data
  fclose($handle);

*/

# Create file called file2.txt and write to it
 $handle=fopen('file2.txt', 'w');
 $txt="John Doe\n";
 fwrite($handle,$txt);
 $txt="Steve Smith\n";
 fwrite($handle,$txt);
 fclose($handle);

?>