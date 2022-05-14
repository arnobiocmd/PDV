<div class="rows">	
              

		<div class="col-12 mt-3">
				<div class="px-2">          
                    <div class="tabela-responsiva pb-4">
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                    <tr>
                                       <th align="center" width="5%">Id</th>
                                       <th align="left">Permissão</th>
                                    </tr>
                            </thead>
                            <tbody> 
                         <?php 
                         $i=1;
                         foreach($permissoes as $permissao){?>                                     
                             <tr>
                                <td align="center"><?php echo $i++ ?></td>
                                <td align="center"><?php echo $permissao ?></td>       
                             </tr>                                        
                        <?php } ?>                  
                    
                                            						
                        </tbody>
                     </table>
								
                        </div>
                 </div>
                </div>

        </div>