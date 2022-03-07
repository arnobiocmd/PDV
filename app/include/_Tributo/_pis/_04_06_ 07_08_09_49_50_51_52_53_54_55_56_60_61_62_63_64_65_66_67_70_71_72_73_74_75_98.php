

<div class="rows  mb-2" id="" style="">    
    
    <div class="col" >
        <small class="text-label" id="st">Tipo de cálculo</small>
        <select class="form-campo" name="tipo_calc_pisst" id="tipo_calc_pisst" onchange="seleciona_tipo_calculo_pisst();">
            <option value="0">Não Usar</option>                                                 
            <option value="1">Porcentagem</option>                                                 
            <option value="2">Em valor</option>
        </select>
    </div>  

    <div class="col" id="pis_por_percst" style="display: none">                        
        <small class="text-label">Alíquota PIS ST (%)</small>
        <input type="text" class="form-campo" name="pPISST" id="pPISST">
    </div>

    <div class="col-3" id="pis_por_valorst" style="display: none">                        
        <small class="text-label">Valor unid trib PIS ST (%)</small>
        <input type="text" class="form-campo" name="vAliqProd_pisst" id="vAliqProd_pisst" >
    </div>

</div>

