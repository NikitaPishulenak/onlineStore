$(document).ready(function(){
    console.log("kjl");
    $("span.delProduct").click(function(){
        var id=$(this).attr("data-idProduct");
        var isDel=confirm("Действительно хотите удалить товар #"+id);
        if(isDel){
            $.post("/phpShop/admin/product/delete/"+id, {}, function () {
                location.reload();
                return;
            });
        }
    });

    $("span.delCategory").click(function(){
        var id=$(this).attr("data-idCategory");
        var isDel=confirm("Вы действительно хотите удалить категорию #"+id);
        if(isDel){
            $.post("/phpShop/admin/category/delete/"+id, {}, function () {
                location.reload();
                return;
            });
        }
    });

    $("div.addOtherField").click(function(){
        $("div.otherFields:last").append('<div class="otherFields"><input type="text" class="titleField" placeholder="Название" value="">'+
        '<input type="text" class="valueField" placeholder="Значение" value=""></div>');
    });

    $("input.saveProduct").click(function(){
        $("div.addOtherField").each(function(){
            console.log("2");
        });
    });
    
});