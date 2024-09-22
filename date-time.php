 <?php 
 /** In php we imploy the use of time  */

 $current = time();
 echo $current;
 echo "<br />";
 echo date('m-d-y g:ia');
 echo "<br />";
 echo date('Y-m-d H-i-s');

echo "<br />";
 echo date('m-d-y g:1a', $current + 5 *24*60*60). '<br />';

date_default_timezone_set('UTC');
echo '<br />';
echo date('d-m-y g:ia');

echo date('d-m-y g:ia', $current);

echo "<br />";
echo date('d-m-y g:ia', strtotime('last day of Jay'));