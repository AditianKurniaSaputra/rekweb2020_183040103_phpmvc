<?php 


class About {

	public function index($nama = 'Aditian', $pekerjaan = Mahasiswa){
		echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
	}

	public function page(){
		echo 'About/page';
	}
}