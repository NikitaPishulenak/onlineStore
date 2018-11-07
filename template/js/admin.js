$(document).ready(function(){
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
    
});