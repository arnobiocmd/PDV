

<div class="rows  mb-2" id="" style="">
    <div class="col" id="pCofins">	
        <small class="text-label">Valor unid trib PIS (R$)</small>
        <input type="text" name="vAliqProd_cofins" id="vAliqProd_cofins"  class="form-campo">
    </div>
    
    <div class="col" >
        <small class="text-label" id="st">Tipo de cálculo Subst. Trib.</small>
        <select class="form-campo" name="tipo_calc_cofinsst" id="tipo_calc_cofinsst" onchange="seleciona_tipo_calculo_cofinsst();">
            <option value="0">Não usar</option>                                                 
            <option value="1">Porcentagem</option>                                                 
            <option value="2">Em valor</option>
        </select>
    </div>  

    <div class="col" id="cofins_por_percst" style="display: none">                        
        <small class="text-label">Alíquota PIS ST (%)</small>
        <input type="text" class="form-campo" name="pCOFINSST" id="pCOFINSST"  >
    </div>

    <div class="col-3" id="cofins_por_valorst" style="display: none">                        
        <small class="text-label">Valor unid trib PIS ST (%)</small>
        <input type="text" class="form-campo" name="vAliqProd_cofinsst" id="vAliqProd_cofinsst">
    </div>

</div>

