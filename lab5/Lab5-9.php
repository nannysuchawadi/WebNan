<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อค านวณ</title></head>
<body>
<form method="get" action="Lab5-9cal.php">
<table border="1" align="center" width="500">
<tr>
<td colspan="2" align="center">
<big>ทดสอบการใช้ Arithmatic Operator </big>
</td>
<tr>
<tr>
<td>Enter Number 1 : </td>
<td><input type="number" name="number1" min="1" size="15" max="100" value=""/> </td>
</tr>
<td>Enter Number 2 : </td>
<td><input type="number" name="number2" min="1" size="15" max="100" value=""/></td>
</tr>
<tr>
<td> Operator : </td>
<td align="center">
<input type="radio" name="operator" value="+"> + <br>
<input type="radio" name="operator" value="-"> - <br>
<input type="radio" name="operator" value="*"> * <br>
<input type="radio" name="operator" value="/"> / <br>
<input type="radio" name="operator" value="%"> % <br>
</td>
<tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value=" OK " />
<input type="reset" name="reset" value=" Clear " />
</td>
</tr>
</table>
</form>
</body>
</html>