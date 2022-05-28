<?php

namespace app\models\dao;

use app\core\Model;

class PagamentoDao extends Model{
    public function listaPorVenda($id_venda){
        $sql = "SELECT * FROM pagamento p, forma_pagamento f 
        WHERE p.id_forma_pagamento = f.id_forma_pagamento AND p.id_venda = $id_venda";
        return $this->select($this->db,$sql);
    }

    public function somaPorCaixaFormaPagamento($id_caixa,$id_forma_pagamento){
        $sql = "SELECT sum(valor) as soma FROM pagamento WHERE id_forma_pagamento = $id_forma_pagamento AND
        id_caixa = $id_caixa";
        return $this->select($this->db,$sql,false);

       
    }
}