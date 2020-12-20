<?php
	class Product{
		var $id;
		var $num;
	}
	class ShoppingCart{
		var $listProduct;
		public function _construct()
		{
			$this->listProduct = array();
		}
		public function update($id, $newNum)
		{
			for($i =0; $i <count($this->listProduct); $i++)
			{
				if($this->listProduct[$i]->id==$id)
				{
					$this->listProduct[$i]->num=$newNum;
				}
			}
		}
		public function delete($id)
		{
			for($i =0; $i <count($this->listProduct);$i++)
			{
				if($this->listProduct[$i]->id ==$id)
					array_splice($this->listProduct, $i,1);
			}
		}
		public function add($id)
		{
			//chưa có sản phẩm trong giỏ hàng
			if(count($this->listProduct)==0){
				$p = new Product();
				$p->id = $id;
				$p->num =1;
				$this->listProduct[]=$p;
			}
			else{
				//đã có sản phẩm trong giỏ hàng
				//kiểm tra sản phẩm đó đã tồn tại trong giỏ hàng chưa
				//có rồi thì cập nhật số lượng lên 1
				// chưa thì thêm mới sản phẩm vào giỏ hàng
				for($i = 0; $i <count($this->listProduct);$i++)
				{
					if($this->listProduct[$i]->id == $id)
					break;
				}
				if($i == count($this->listProduct))
				{
					$p = new Product();
					$p->id = $id;
					$p->num=1;
					$this->listProduct[]=$p;
				}
				else
				{
					$this->listProduct[$i]->num++;
				}
			}
		}
	}
?>
		