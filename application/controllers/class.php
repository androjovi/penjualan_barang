<?php
class Laporan{
		public function tampil_penjualan_bulan($bln1,$bln2){
			$qry = mysqli_query("SELECT * FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang 
				WHERE pen.tgl_penjualan BETWEEN '$bln1' AND '$bln2'");
			while ($pecah = mysqli_fetch_array($qry)) {
				$data[]=$pecah;
			}
			$hitung = mysqli_num_rows($qry);
			if ($hitung > 0) {
				return $data;
			}
			else{
				error_reporting(0);
			}
		}
		public function cek_penjualan_bulan($bln1,$bln2){
			$qry = mysqli_query("SELECT * FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang
				WHERE pen.tgl_penjualan BETWEEN '$bln1' AND '$bln2'");
			$hitung = mysqli_num_rows($qry);
			if ($hitung >=1) {
				return true;
			}
			else{
				return false;
			}
		}
		public function hitung_total_penjualan(){
			$qry = mysqli_query("SELECT sum(dpen.subtotal) as jumlah FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang");
			$pecah = mysqli_fetch_array($qry);
			$subtotal = $pecah['jumlah'];
			return $subtotal;
		}
		public function tampil_penjualan(){
			$qry = mysqli_query("SELECT * FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang ");
			while ($pecah = mysqli_fetch_array($qry)) {
				$data[]=$pecah;
			}
			$hitung = mysqli_num_rows($qry);
			if ($hitung > 0) {
				return $data;
			}
			else{
				error_reporting(0);
			}
		}
		public function cek_penjualan(){
			$qry = mysqli_query("SELECT * FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang");
			$hitung = mysqli_num_rows($qry);
			if ($hitung >=1) {
				return true;
			}
			else{
				return false;
			}
		}
		public function hitung_total_penjualan_bulan($bln1,$bln2){
			$qry = mysqli_query("SELECT sum(dpen.subtotal) as jumlah FROM penjualan pen
				JOIN d_penjualan dpen ON pen.kd_penjualan = dpen.kd_penjualan
				JOIN barang bar ON dpen.kd_barang = bar.kd_barang
				WHERE pen.tgl_penjualan BETWEEN '$bln1' AND '$bln2'");
			$pecah = mysqli_fetch_array($qry);
			$subtotal = $pecah['jumlah'];
			return $subtotal;
		}
		//end penjualan


		$laporan = new Laporan();

?>