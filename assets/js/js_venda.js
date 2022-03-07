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


    $('#qtde').on('keydown',function(event){
        
        if(event.keyCode==13){
            var id_venda    =    $('#id_venda').val();
            var  id_produto  =    $('#id_produto').val();
            var qtde        =    $('#qtde').val();
            var  preco       =    $('#preco').val();
            
            $.ajax({
                url: base_url + 'itemvenda/inserir/',
                type:'POST',
                data:{
                    id_venda    : id_venda,
                    id_produto  :id_produto,
                    qtde        : qtde,
                    preco       :preco
                },
                dataType:'json',
                success:function(data){
                    $('#descricao').html(data.produto);
                    $('#imagem').attr('src',base_url_imagem + data.imagem);
                    $('#qtde').val(1);
                    $('#estoque').val(data.estoque);
                    $('#preco').val(data.preco);
                    $('#total').val(data.preco);
                    $('#qtde').focus();

                }

            })
        }
    });
})