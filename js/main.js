for (var i = 0; i < 50; i++) {
    $(".desc-" + i).slideUp(0);
}

function show(id) {
    $(".desc-" + id).slideToggle(100);
    $(".fai-" + id).toggleClass("rotateicon");
}
function addToCart(id) {
    var gpu = document.getElementById("gpu-" + id).innerHTML;
    var price = document.getElementById("price-" + id).innerHTML;
    var name = gpu.replace("<br>", "");
    var eur = price.replace(",- EUR", "");
    var trash = "<i id='myicon-" + id + "' onclick='delItem();' class='trash fas fa-trash-alt'></i>";

    $('#mytable').append( '<tr>' + '<td>' + name + '</td>' + '<td class="total-' + id + '">' + eur + '</td>' + '<td>' + trash + '</td>' + '</tr>' );
}

$('table').on('click', 'i', function() {
    $(this).closest('tr').remove();
})