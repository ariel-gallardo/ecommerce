<?php
        $listaProductos = [
                ["Sony Stereo Headset", 1, 499.99],
                ["Philco Stereo Headset", 1, 500.99],
                ["Philips", 1, 59.99],
                ["420 Vip Black Men", 2, 499.99],
                ["Bleu de Chanel", 2, 799.99],
                ["Sauvage Dior", 5, 1099.9],
                ["Chance Chanel", 3, 899.99]
        ];

?>
<!-- Elementos del carro de compras -->
<ul class="list-group p-0">
        <?php foreach($listaProductos as $producto): ?>
        <li class="list-group-item border-0 text-left py-0">
                <p><span class="mx-2 badge badge-secondary p-0">x<?=$producto[1]?></span><?=$producto[0]?>.<span
                class="p-0 badge mx-1"><?=$producto[2]*$producto[1]?>$ARS</span><svg class="Quitar mx-1" xmlns="http://www.w3.org/2000/svg"
                width="8" height="8" viewBox="0 0 8 8">
                <path
                    d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
            </svg></span></p>
        </li>
        <?php endforeach; ?>
</ul>