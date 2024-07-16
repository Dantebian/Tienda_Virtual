<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con exito, una vez realices el pago será procesado y envíado</p>
    </br>
    <?php if (isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>

        Numero de pedido: <?= $pedido->id ?> <br />
        Total a pagar: <?= $pedido->coste ?> <br />
        Productos:

        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
                <tr>
                    <td>
                        <?php if ($producto->imagen != null) : ?>
                            <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
                        <?php else : ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        <?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                        <div class="updown-unidades">
                            <a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button">+</a>
                            <a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button">-</a>
                        </div>
                    </td>
                    <td>
                        <a href="<?= base_url ?>carrito/delete&index=<?= $indice ?>" class="button button-carrito button-red">Quitar producto</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>
    <h1>Tu pedido no se pudo procesar correctamente</h1>

<?php endif; ?>