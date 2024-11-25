export function hideProduct(e)
{
    let productRow = e.currentTarget.parentNode;

    // получаем id продукта
    let productId = productRow.id;

    // добавляем id продукта в data
    let data = new FormData();
    data.append('product_id', productId);
    data.append('action', 'hide_product');

    // отправляем запрос на сокрытие товара
    fetch('product-handlers.php',
    {
            method: 'POST',
            body: data
        })
        
    // проверяем успешность запроса
    .then((response) =>
    {
        if (!response.ok)
        {
            throw new Error('Ошибка запроса');
        }

        // удаляем строчку продукта
        productRow.remove();
    })

    .catch((error) =>
    {
        console.log(error);
    });
}