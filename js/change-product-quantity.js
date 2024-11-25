export function changeProductQuantity(e, timer)
{
    let sign = e.currentTarget.innerHTML
    let productRow = e.currentTarget.parentNode.parentNode;
    let productQuantity = productRow.querySelector('.quantity');

    if (sign === '+')
    {
        productQuantity.innerHTML++;
        timer.stop();
    }
    else if (sign === '-')
    {
        productQuantity.innerHTML--;
        timer.stop();
    }

    timer.start(()=>
    {
        let data = new FormData();
        data.append('product_id', productRow.id);
        data.append('product_quantity', productQuantity.innerHTML);
        data.append('action', 'change_product_quantity');

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
                alert('Количество продукта изменено');
            })

            .catch((error) =>
            {
                console.log(error);
            });
    });
}