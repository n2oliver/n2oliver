const sections = [
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
            url: "/loja_virtual/get_" + section + ".php",
            type: "GET",
            dataType: "json",
            success: function(data) {
                data.inverse().forEach(function(product) {
                    if(product.unavailable) return;
                    
                    createProductCard(product).appendTo(`#${section}-container`)
                });
            }
        });
});
function createProductCard(product) {
    const productDiv = $('<div>').addClass('product').attr('data-id', product.id);

    // Cria um wrapper para a imagem e a descrição
    const imageWrapper = $('<div>').addClass('product-image-wrapper');
    const image = $('<img alt="product-card" alt="">').attr('src', product.image_url).attr('alt', product.name);
    imageWrapper.append(image);

    // Adiciona a descrição dentro do wrapper se ela existir
    if (product.descricao) {
        const descriptionDiv = $('<div>').addClass('product-description').html(product.descricao);
        imageWrapper.append(descriptionDiv);
    }

    const name = $('<h3>').text(product.name);
    const link = $('<a>').attr('href', product.affiliate_link).attr('target', '_blank').addClass('buy-button').text('Ver na Loja');

    if (product.unavailable) {
        link.text('Indisponível').addClass('unavailable').attr('href', '#');
    }

    productDiv.append(imageWrapper, name, link);
    return productDiv;
}
