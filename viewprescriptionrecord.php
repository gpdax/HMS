<?php
include("header.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM prescription_records WHERE prescription_record_id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('prescription record deleted successfully..');</script>";
	}
}
?>

<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Ver registro de Prescrição</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Ver registro de Prescrição</h1>
    <table width="200" border="3">
      <tbody>
        <tr>
          <td>Medicamento</td>
          <td>Valor</td>
          <td>Unidade</td>
          <td>Dosagem</td>
          <td>Status</td>
          <td>Ação</td>
        </tr>
         <?php
		$sql ="SELECT * FROM prescription_records";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
        echo "<tr>
          <td>&nbsp;$rs[medicine_name]</td>
          <td>&nbsp;$rs[cost]</td>
		   <td>&nbsp;$rs[unit]</td>
		    <td>&nbsp;$rs[dosage]</td>
			 <td>&nbsp;$rs[status]</td>
			  <td>&nbsp;<a href='prescriptionrecord.php?editid=$rs[prescription_record_id]'>Edit</a>  | <a href='viewprescriptionrecord.php?delid=$rs[prescription_record_id]'>Delete</a> </td>
        </tr>";
		}
		?>
      </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>