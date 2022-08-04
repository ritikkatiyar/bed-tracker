<?php
	session_start();
	require_once('connect.php');
	if(!isset($_SESSION['user_id'])){ Redirect('index.php'); }
	else
	{
		require_once('header.php');
	}
?>
<h2>NIMS</h2>
                
                <div id="main">
					<h3>Bed availability</h3>
               	  <table>
                  <?php
				  	$result=mysqli_query($server,"SELECT COUNT(pat_id) FROM patients");
					$row=mysqli_fetch_row($result);
					
					$result2=mysqli_query($server,"SELECT COUNT(bed_id) FROM beds");
					$row2=mysqli_fetch_row($result2);
					
					$result3=mysqli_query($server,"SELECT COUNT(pat_id) FROM pat_to_bed WHERE bed_id>0");
					$row3=mysqli_fetch_row($result3);
					
					$result4=mysqli_query($server,"SELECT COUNT(bed_id) FROM pat_to_bed WHERE bed_id>0");
					$row4=mysqli_fetch_row($result4);
					
					$result5=mysqli_query($server,"SELECT COUNT(pat_id) FROM pat_to_bed WHERE bed_id=0 AND bed_id!='none'");
					$row5=mysqli_fetch_row($result5);
					
					$row6[0] = $row2[0] - $row4[0];
					
					$result7=mysqli_query($server,"SELECT COUNT(pat_id) FROM pat_to_bed WHERE bed_id='none'");
					$row7=mysqli_fetch_row($result7); 
					
					
					
  							echo"<tr>
    							<td align=center valign=middle><b>Patients</b></td>
    							<td align=center valign=middle><b>Beds</b></td>
  							</tr>
  							<tr>
    							<td align=center valign=middle>Total - $row[0]</td>
    							<td align=center valign=middle>Total - $row2[0]</td>
							</tr>
  							<tr>
    							<td align=center valign=middle>Admitted - $row3[0]</td>
    							<td align=center valign=middle>Occupied - $row4[0]</td>
							</tr>
  							<tr>
   		 						<td align=center valign=middle>Discharged - $row5[0]</td>
    							<td align=center valign=middle>Vacant - $row6[0]</td>
							</tr>
  							<tr>
   							  <td align=center valign=middle>Unassigned to bed - $row7[0]</td>
    							<td align=center valign=middle>&nbsp;</td>
							</tr>";
					?>
				  </table>
                        <br /><br />
                </div>
				<h2>Select Bed</h2>
                
                <div id="main">
                <form method="post" class="jNice">
                    <?php
						if(isset($_POST['save']))
						{
							$type=$_POST['type'];
							$ward=$_POST['ward'];
							
							if($type=="none"){ $error="<br><span class=error>Please select a type</span><br><br>"; }
							elseif($ward=="none"){ $error="<br><span class=error>Please select a ward</span><br><br>"; }
							else
							{
								mysqli_query($server,"INSERT INTO beds (type,ward) VALUES ('$type','$ward')");
								echo $msg;
							}
							
							if($error!=""){ echo $error; }
						}
					?>
                    	<fieldset>
                            <p><label>Type:</label>
                            <select name="type">
                            	<option value="none">[--------SELECT--------]</option>
                            	<option value="Manual">Manual</option>
                            	<option value="Bariatric">Bariatric</option>
                            	<option value="Full-Electric">Full-Electric</option>
                            	<option value="Semi-Electric">Semi-Electric</option>
                                <option value="Low Bed">Low Bed</option>
                            </select>
                            </p>
                            <p><label>Ward:</label>
                            <select name="ward">
                            	<option value="none">[--------SELECT--------]</option>
                            	<option value="Postnatal">Postnatal</option>
                            	<option value="Pregnancy">Pregnancy</option>
                            	<option value="Critical Care">Critical Care</option>
                            	<option value="Orthopaedic">Orthopaedic</option>
                                <option value="Psychiatric">Psychiatric</option>
                                <option value="Accidents And Emergency">Accidents And Emergency</option>
                                <option value="Paediatric">Paediatric</option>
                            </select>
                            </p>
							
							<button type="submit" formaction="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/payment.php">Payment</button>

							

							
                        </fieldset>
                    </form>
                        <br /><br />
                </div>