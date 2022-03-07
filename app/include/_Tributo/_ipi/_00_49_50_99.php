
    <div class="rows  mb-2" id="ipi_campos" style="">

        <div class="col">	
            <small class="text-label">Classe enquadramento</small>
            <input type="text" name="clEnq" value="" placeholder="Digite o título" class="form-campo">
        </div>	
        <div class="col">	
            <small class="text-label">CNPJ produtor</small>
            <input type="text" name="CNPJProd" value="" placeholder="Digite o título" class="form-campo">
        </div>	
        <div class="col">	
            <small class="text-label">Cód selo controle IPI</small>
            <input type="text" name="cSelo" value="" placeholder="Digite o título" class="form-campo">
        </div>	
        <div class="col">
            <small class="text-label">Quant selo IPI</small>
            <input type="text" name="qSelo" value="" placeholder="Digite o título" class="form-campo">
        </div>
        <div class="col">
            <small class="text-label">Cód. enquadramento</small>
            <input type="text" name="cEnq" value="" placeholder="Digite o título" class="form-campo">
        </div>

    </div>

    <div class="rows  mb-2">
        <div class="col-6">
            <small class="text-label">Tipo de Cálculo</small>
            <select class="form-campo" name="tipo_calc_ipi" id="tipo_calc_ipi" onchange="seleciona_tipo_calculo();">
                <option value="0">Selecione</option>
                <option value="1">Porcentagem</option>                                                 
                <option value="2">Em valor</option>
            </select>
        </div>

        <div class="col" id="ipi_por_perc" style="display: none">                        
            <small class="text-label">Alíquota IPI (%)</small>
            <input type="text" class="form-campo" name="pIPI" id="pIPI" >
        </div>

        <div class="col" id="ipi_por_valor"  style="display: none">
            <div class="col">                        
                <small class="text-label">Valor por unid trib. (R$)</small>
                <input type="text" class="form-campo" name="vUnidIPI" id="vUnidIPI" >
            </div>
        </div>                        
    </div> 


