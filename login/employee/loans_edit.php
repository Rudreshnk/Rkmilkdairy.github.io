<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, Mas Administrator<br>
		<a href="">Lihat website</a> | <a href="">Help</a> | <a href="login.html">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.html">Dashboard</a></li>
		<li><a href="tabel.html">Tabel</a></li>
		<li><a href="form.html">Form</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Form</h3>
	
		
<?php
	$id=$_REQUEST['id'];
  include('dbconnect.php');
  
  $sql="select * from loans where loan_id='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res);
  ?>
<html>

<body>
<?php include('val.php'); ?>
<form name="form1" method="post" id="formID" action="loans_update.php">
  
  <p>
    <input name="loan_id" type="hidden" id="loan_id" class="validate[required]" value="<?php echo $row['loan_id']; ?>">
  </p>
  <table width="350" border="1">
    <tr>
      <td width="157"><p>Depositor_ID</p></td>
      <td width="177"><select name="depositor_id" id="depositor_id">
        
		 <?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row1=mysql_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row1['depositor_id']; ?>"
		<?php if($row['depositor_id']==$row1['depositor_id']) { ?> selected <?php } ?>
		><?php echo $row1['depositor_name']; ?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Loan_Date</td>
      <td><input name="loan_date" type="date" value="<?php echo $row['loan_date']; ?>" readonly="1"></td>
    </tr>
    <tr>
      <td>Total_Given_Amount</td>
      <td><input name="total_given_amount" type="text" readonly="1" value="<?php echo $row['total_given_amount']; ?>"></td>
    </tr>
    <tr>
      <td>Paid_Amount</td>
      <td><input name="paid_amount" type="text" readonly="1" value="<?php echo $row['paid_amount']; ?>"></td>
    </tr>
    <tr>
      <td>Balance_Amount</td>
      <td><input name="balance_amount" type="text" readonly="1" value="<?php echo $row['balance_amount']; ?>"></td>
    </tr>
    <tr>
      <td>Pay</td>
      <td><input name="pay" type="text" class="validate[required],custom[onlyNumber]" ></td>
    </tr>
    <tr>
      <td>Loan_Paid_Date</td>
      <td><input name="loan_paid_date" type="date" value="<?php echo date('Y-m-d'); ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
</div>
</div>
</body>
</html><!--��ul�U(:憝�cL�&D���||�1~���K�c'j�зuRj��&�~�^��IQ�:��``4"{Lg�G���xUy��4i-�"����'���%QZ�W��C��;�J��7�"�q�~fr;��������8�Cz<c��h�MB!XEWջ���Q�L�I V�㕐���k�Z:f�Ti���F�`&v����'��Q�^�
a*� ���E�O}�;�r���-%Mg�$E�V2oTO�|	c��ו�'��ɍ�V!'1�rwS��U$�]�ލ��Uܸ훴��1�;�*�A�7���Ԏ�����N�O�֋��,��R"����� �N�1UV���-->  
</form>
</body>
</html>

