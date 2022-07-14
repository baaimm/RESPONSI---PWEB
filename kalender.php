<h1><center>CALENDAR 2022</center></h1>
<title>KALENDER</title>
	<?php
    $hari	= date("d");
    $bulan	= date ("m");
    $tahun	= date("Y");
    $jumlah = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
    ?>
<table style="border:5px solid #DC143C" align="center" width="30%" height="35%">
    <tr>
        <td align=center bgcolor="red">Sun</td>
        <td align=center bgcolor="orange">Mon</td>
        <td align=center bgcolor="yellow">Tue</td>
        <td align=center bgcolor="green">Wed</td>
        <td align=center bgcolor="blue">Thu</td>
        <td align=center bgcolor="violet">Fri</td>
        <td align=center bgcolor="purple">Sat</td>
    </tr>
<?php
    $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
    for ($ds=1;$ds<=$s;$ds++) {
    echo "<td></td>";
    }
 
    for ($d=1;$d<=$jumlah;$d++) {
	    if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		    echo "<tr>"; 
		}
        if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna=""; }
            echo "<td align=center valign=middle> <span style=\"color:blue\">$d</span></td>"; 
            if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { 
                echo "</tr>"; }
            }
            echo '</table>'; 
			?>
		</div>
	</div>