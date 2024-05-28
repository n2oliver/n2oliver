const sections = [
    "perfumes_masculinos",
    "perfumes_femininos",
    "livros",
    "cursos",
    "destaques",
    "smartphones_xiaomi",
    "smartphones_samsung",
    "smartphones_apple",
    "smartphones_motorola"
]
$(document).ready(function(){
    for(let section of sections) 
        $.ajax({
            url: "get_" + section + ".php",
            type: "GET",
            dataType: "json",
            success: function(data) {
                data.forEach(function(product) {
                    if(product.unavailable) return;
                    
                    hightlight = "";
                    if(product.hightlight && window.screen.width > 768) {
                        hightlight = " hightlight";
                    } 
                    $("#" + section + "-container").append(
                        '<div class="product'+ hightlight + '">' +
                        '<h2>' + product.name + '</h2>' +
                        '<img src="' + product.image_url + '" alt="' + product.name + '"><br>' +
                        (product.descricao ? '<div class="descricao"><b>Sobre este produto:</b><br><br>' + product.descricao  + '</div>' : '') + '<br>' +
                        '<a href="' + product.affiliate_link + '" target="_blank">Ver detalhes</a>' +
                        '</div>'
                    );
                });
            }
        });
});