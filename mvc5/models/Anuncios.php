<?php

class Anuncios  extends model{

	public function getQuantidade(){
		
		$sql = "SELECT COUNT(*) AS c FROM usuarios";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0 ){

			$sql = $sql->fetch();
			return $sql['c'];

		}else {
			return 0;
		}

		
	}
}


?>