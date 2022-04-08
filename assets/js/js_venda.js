$(function(){
    $('#codigo_produto').on('keydown',function(event){
        var q = $(this).val();
        if(event.keyCode==13){
            $.ajax({
                url: base_url + 'produto/produtoPorCodigo/' + q,
                method:'GET',
                data:{},
                dataType:'json',
                success:function(data){
                    $('#descricao').html(data.produto);
                    $('#imagem').attr('src',base_url_imagem + data.imagem);
                    $('#qtde').val(1);
                    $('#estoque').val(data.estoque);
                    $('#id_produto').val(data.id_produto);
                    $('#preco').val(data.preco);
                    $('#total').val(data.preco);
                    $('#qtde').focus();

                }

            })
        }
    });

    //#inserir
    //#qtde
    $('#qtde').on('keydown',function(event){
        
        if(event.keyCode==13){
            var id_venda    =    $('#id_venda').val();
            var  id_produto  =    $('#id_produto').val();
            var qtde        =    $('#qtde').val();
            var  preco       =    $('#preco').val();

           
            
            $.ajax({
                url: base_url + 'itemvenda/inserir/',
                method:'POST',
                data:{
                    id_venda    : id_venda,
                    id_produto  :id_produto,
                    qtde        : qtde,
                    preco       :preco
                    
                    
                },

                dataType:'json',
                success:function(data){
                   // $('#descricao').html(data.produto);
                    //$('#imagem').attr('src',base_url_imagem + data.imagem);
                   // $('#qtde').val(1);
                  //  $('#estoque').val(data.estoque);
                  //  $('#preco').val(data.preco);
                  //  $('#total').val(data.preco);
                  // $('#qtde').focus();
                  // $('#itensDaVenda');
                  
                  lista_itens_venda(data.lista);
                 

                }

            })
       }
    });
});

function chamarTelaPagamento(){
    abrirModal("#encerrar");
}

function inserirPagamento(){
    var id_venda = $('#id_venda').val();
    var id_forma_pagamento = $('#id_forma_pagamento').val();
    var valor = $('#valor_pago').val();
    var desconto = $('#desconto').val();
    var qtde_vezes = $('#qtde_vezes').val();

    $.ajax({
        url:base_url+"pagamento/inserir/",
        type:'POST',
        data:{
            id_venda                : id_venda,
            id_forma_pagamento      : id_forma_pagamento,
            valor                   : valor,
            qtde_vezes              : qtde_vezes,
            desconto                : desconto
        },
        dataType:'json',
        success: function(data){
            listaPagamento(data.lista);
            valores(data.retorno);
        }
    })
}

function listaPagamento(data){
    html = '<tr>';
    for(var i in data){
        html += '<td class="text-center">'+data[i].forma_pagamento+'</td>' +
                '<td class="text-center">'+data[i].valor+'</td>' +
                '<td class="text-center">'+data[i].qtde_vezes+'</td></tr>'; 
    }
    $('#lista_pagamento').html(html);

    
}

function valores(retorno){
    $("#valor_pago").val(retorno.total_restante);
    $("#lbl_total_pagar").html(retorno.total);
    $("#lbl_desconto").html(retorno.desconto);
    $("#lbl_total_receber").html(retorno.total_receber);
    $("#lbl_total_recebido").html(retorno.total_recebido);
    $("#lbl_total_restante").html(retorno.total_restante);
    $("#valor_pago").focus();

}

function lista_itens_venda(data){
    html = "<tr class='cor-tab1'>";
    var total_venda = 0.00;
    var volume = 0;
    for(var i in data){
        total_venda += parseFloat(data[i].subtotal);
        volume += parseInt(data[i].qtde);
        html += '<td align="center">'+data[i].id_item_venda+'</td>'+ 
        '<td align="left">'+data[i].produto+'</td>'+
        '<td align="center">'+data[i].qtde+'</td>'+
        '<td align="center">'+data[i].valor+'</td>'+
        '<td align="center">'+data[i].subtotal+'</td>'+
        '<td align="center"><a href="javascript:;" onclick="return excluir_item(this)" data-entidade =itemvenda data-id="'+data[i].id_item_venda+'"<i class="fas fa-trash-alt text-vermelho"></i></a></td></tr>';
    }
    $('#total_geral').val(total_venda);
    $('#volume').val(volume);
    $('#itensDaVenda').html(html);

    
}