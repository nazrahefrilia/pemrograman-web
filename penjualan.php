<form>
<table border="0" align="center">
<tr>
<td colspan="3" align="center"><h2>Form Inputan</h2></td>
</tr>
<tr>
<td>Nama Barang</td>
<td>:</td>
<td><input type="text" name="nama_barang" id="nama_barang" /></td>
</tr>
<tr>
<td>Jenis Barang</td>
<td>:</td>
<td><input type="text" name="jenis_barang" id="jenis_barang" /></td>
</tr>
<tr>
<td>Harga Satuan</td>
<td>:</td>
<td><input type="text" name="harga_satuan" id="harga_satuan" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Jumlah Beli</td>
<td>:</td>
<td><input type="text" name="jumlah_beli" id="jumlah_beli" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Total Bayar</td>
<td>:</td>
<td><input type="text" name="total_bayar" id="total_bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Diskon</td>
<td>:</td>
<td><input type="text" name="diskon" id="diskon" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Total Setelah Diskon</td>
<td>:</td>
<td><input type="text" name="setelah_diskon" id="setelah_diskon" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td> 
</tr>
<tr>
<td>Bayar</td>
<td>:</td>
<td><input type="text" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<tr>
<td>Kembalian</td>
<td>:</td>
<td><input type="text" name="kembalian" id="kembalian" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
</tr>
<script type="text/javascript">
	function mulaiHitung(){
		Interval = setInterval("hitung()",1);
	}
	function hitung(){
		harga_satuan 	= parseInt(document.getElementById("harga_satuan").value);
		jumlah_beli 	= parseInt(document.getElementById("jumlah_beli").value);
		total_bayar		= harga_satuan * jumlah_beli;
		document.getElementById("total_bayar").value = total_bayar;

		if (total_bayar > 100000 && total_bayar >= 200000) {
			diskon = (10/100000)*total_bayar;
		}
		if (total_bayar > 200000 && total_bayar >= 200000) {
			diskon = (20/100000)*total_bayar;
		}

		document.getElementById("diskon").value = diskon;
		setelah_diskon = total_bayar - diskon;
		document.getElementById("setelah_diskon").value = setelah_diskon;
		bayar 			= parseInt(document.getElementById("bayar").value);
		Kembalian 		= bayar - setelah_diskon;
		document.getElementById("kembalian").value = kembalian;
	}
	function berhentiHitung(){
		clearInterval(Interval);
	}
</script>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Simpan" /><input type="reset" value="Reset"> /></td>
</tr>
</table>
</form>

