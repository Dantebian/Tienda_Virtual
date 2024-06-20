<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda Virtual</title>
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
</head>

<body>
    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="<?= base_url ?>assets/img/logo.jpg" alt="Tienda Logo" />
                <a href="index.php">
                    Tienda de ropa
                </a>
            </div>
        </header>

        <!-- MENU -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <?php while ($cat = $categorias->fetch_object()) : ?>
                    <li>
                        <a href="#"><?= $cat->nombre ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <div id="content">