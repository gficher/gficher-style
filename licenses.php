<?php
$var = 1; // Define o menu
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Painel 2</title>
        <link rel="icon" href="favicon.ico"/>
        <meta name="Author" content="gficher"/>
        <meta name="description" content="gficher's style"/>
        <meta name="keywords" content="gficher,style"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="msapplication-TileColor" content="#123456"/>
        <meta name="msapplication-square150x150logo" content="square.png"/>

        <link href='css/topbar.css' rel='stylesheet' type='text/css'>
        <link href='css/form.css' rel='stylesheet' type='text/css'>
        <link href='css/message.css' rel='stylesheet' type='text/css'>
        <link href='css/sidemenu.css' rel='stylesheet' type='text/css'>
        <link href='css/content.css' rel='stylesheet' type='text/css'>
        <link href='css/pikaday.css' rel='stylesheet' type='text/css'>
        <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header class="gs-topbar">
            <?php include_once('includes/topbar.php'); ?>
        </header>
        <nav id="sidemenu" class="gs-sidemenu">
            <?php include_once('includes/menu.php'); ?>
        </nav>

        <div id="gs-notification-box">
            <ul>
                <li>
                    Notificação 1
                    <div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
                </li>
                <li>
                    Notificação 2
                    <div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
                </li>
                <li>
                    Notificação 3
                    <div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
                </li>
                <li>
                    Notificação 4
                    <div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
                </li>
                </div>

            <div id="content">
                <div class="gs-ptitle">
                    <span class="gs-titleIcon fa fa-key"></span>
                    <div class="gs-pttext">Minhas licenças</div>
                    <ul class="gs-breadcrumb">
                        <li>
                            <a href="#">Geral</a>
                        </li>
                        <li>Minhas licenças</li>
                    </ul>
                    <div style="clear: both;"></div>
                </div>

                <div class="gs-cbigbox tilebox">
                    <div class="gs-tile">
                        <div>Licenças ativas</div>
                        <div class="gs-info">5</div>
                    </div>
                    <div class="gs-tile">
                        <div>Licenças sem uso</div>
                        <div class="gs-info success">6</div>
                    </div>
                    <div class="gs-tile">
                        <div>Licenças desvinculadas</div>
                        <div class="gs-info success">4</div>
                    </div>
                    <div class="gs-tile">
                        <div>Licenças expiradas</div>
                        <div class="gs-info danger">1</div>
                    </div>
                    <div class="gs-tile">
                        <div>Total</div>
                        <div class="gs-info">16</div>
                    </div>
                </div>

                <div class="gs-cbigbox table">
                    <div class="gs-btitle">Minhas Licenças</div>

                    <div class="tablebox">
                        <table id="table1" class="gs-table" data-tpager="pager1">
                            <thead>
                                <tr>
                                    <th style="min-width: 250px">Licença</th>
                                    <th style="min-width: 150px">Status</th>
                                    <th style="min-width: 130px">Ativo em</th>
                                    <th style="min-width: 130px">Expira em</th>
                                    <th style="min-width: 170px">Computador</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="gs-font courier-new">5QHK-189T-JBNV-8QEE</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">R346-EVHT-FAB0-IAHH</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">AJ6G-F2UR-5PLB-M28V</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">U5NV-C34G-7AAO-CWTC</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">LJ4L-EUTO-PQ56-FV8U</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">6HZ2-F2L7-1IRG-CD38</span></td>
                                    <td>Sem uso</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">AAAA-AAAA-AAAA-AAAA</span></td>
                                    <td>Ativo</td>
                                    <td>03/11/2015</td>
                                    <td>02/11/2016</td>
                                    <td>GFICHER</td>
                                    <td>
                                        <input class="gs-btn small danger" type="submit" name="button" id="button" value="Desvincular">
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">V9DN-SL37-5818-0UTF</span></td>
                                    <td>Ativo</td>
                                    <td>01/12/2015</td>
                                    <td>07/06/2016</td>
                                    <td>LUA-PC</td>
                                    <td>
                                        <input class="gs-btn small danger" type="submit" name="button" id="button" value="Desvincular">
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">HOIH-8XIZ-Y316-HB7J</span></td>
                                    <td>Desvinculada</td>
                                    <td>17/10/2015</td>
                                    <td>02/11/2016</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">SUK7-8PLQ-MHF2-5WPE</span></td>
                                    <td>Desvinculada</td>
                                    <td>17/10/2015</td>
                                    <td>02/11/2016</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">EO39-59XL-KNTP-J6O4</span></td>
                                    <td>Desvinculada</td>
                                    <td>17/10/2015</td>
                                    <td>02/11/2016</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">99L6-01GJ-JGJW-8W79</span></td>
                                    <td>Desvinculada</td>
                                    <td>17/10/2015</td>
                                    <td>02/11/2016</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><span class="gs-font courier-new">4GTU-LHY9-7P9L-769V</span></td>
                                    <td><span class="gs-color danger">Expirado</span></td>
                                    <td>03/11/2014</td>
                                    <td>02/11/2015</td>
                                    <td>EDUARDO</td>
                                    <td><input class="gs-btn small" type="submit" name="button" id="button" value="X"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
            <script type="text/javascript" src="js/content.js"></script>
            </body>
        </html>