import {hideProduct} from "./hide-product.js";
import {changeProductQuantity} from "./change-product-quantity.js";
import {Timer} from "./Timer.js";

document.addEventListener('DOMContentLoaded', init);

function init()
{
    let buttons = document.querySelectorAll('.hideButton');
    let changeQuantityButtons = document.querySelectorAll('.change-quantity-btn');
    let timer = new Timer();

    for(let i = 0; i < buttons.length; i++)
    {
        buttons[i].addEventListener('click', hideProduct);
    }

    for(let i = 0; i < changeQuantityButtons.length; i++)
    {
        changeQuantityButtons[i].addEventListener('click',(e)=>{ changeProductQuantity(e, timer) });
    }
}