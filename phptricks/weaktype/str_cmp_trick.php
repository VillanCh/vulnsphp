<?php
 $items[0] = True;
 $items[1] = False;
 $items[2] = 1;
 $items[3] = 0;
 $items[4] = -1;
 $items[5] = "1";
 $itmes[6] = '0';
 $items[7] = '-1';
 $items[8] = NULL;
 $items[9] = array();
 $items[10] = 'php';
 $items[11] = '';

 ?>
 
 <table border=1>
 <tr>
    <th></th>
    <th>true</th>
    <th>false</th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>'1'</th>
    <th>'0'</th>
    <th>'-1'</th>
    <th>NULL</th>
    <th>array()</th>
    <th>'php'</th>
    <th>''</th>
 </tr> 
 <tr>
    <td>true</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(true, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
  <tr>
    <td>false</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(false, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>1</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(1, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>0</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(0, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>-1</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(-1, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>'1'</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp('1', $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>'0'</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp('0', $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
   <tr>
    <td>'-1'</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp('-1', $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
    <tr>
    <td>NULL</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(NULL, $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
    <tr>
    <td>array()</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp(array(), $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
    <tr>
    <td>'php'</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp('php', $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
    <tr>
    <td>''</td>
    <?php 
    for($i=0; $i<12; $i++){
        $result = @strcmp('', $items[$i]);
    echo'<td>'.$result.'</td>';}?>
 </tr>
 
 </table>
 
 