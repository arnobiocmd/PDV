

<div class="rows  mb-2" id="" style=""> 
    
    <div class="col" >
        <small class="text-label" id="st">Tipo de cálculo</small>
        <select class="form-campo" name="tipo_calc_cofins" id="tipo_calc_cofins" onchange="seleciona_tipo_calculo_cofins();">
            <option value="1">Porcentagem</option>                                                 
            <option value="2">Em valor</option>
        </select>
    </div>  

    <div class="col" id="cofins_por_perc" >                        
        <small class="text-label">Alíquota Cofins (%)</small>
        <input type="text" class="form-campo" name="pCOFINS"  id="pCOFINS">
    </div>

    <div class="col-3" id="cofins_por_valor" style="display: none">                        
        <small class="text-label">Valor unid trib Cofins (R$))</small>
        <input type="text" class="form-campo" name="vAliqProd_cofins" id="vAliqProd_cofins" >
    </div>

     <div class="col" >
        <small class="text-label" id="st">Tipo de cálculo Subst. Trib.</small>
        <select class="form-campo" name="tipo_calc_cofinsst" id="tipo_calc_cofinsst" onchange="seleciona_tipo_calculo_cofinsst();">
            <option value="0">Não Usar</option>                                                 
            <option value="1">Porcentagem</option>                                                 
            <option value="2">Em valor</option>
        </select>
    </div>  

    <div class="col" id="cofins_por_percst" style="display: none">                        
        <small class="text-label">Alíquota Cofins ST (%)</small>
        <input type="text" class="form-campo" name="pCOFINSST" id="pCOFINSST" >
    </div>

    <div class="col-3" id="cofins_por_valorst" style="display: none">                        
        <small class="text-label">Valor unid trib Cofins ST (%)</small>
        <input type="text" class="form-campo" name="vAliqProd_cofinsst" id="vAliqProd_cofinsst">
    </div>
</div>

