[33m2bb4bd5[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m, [m[1;31mlocal/master[m[33m, [m[1;32mhd[m[33m)[m subida de plantilla dashboard para academico
 .gitignore                                         |     2 [32m+[m
 LICENSE                                            |    21 [32m+[m
 README.md                                          |    36 [32m+[m
 bower.json                                         |    46 [32m+[m
 data/flot-data.js                                  |  1242 [32m++[m
 data/morris-data.js                                |   117 [32m+[m
 dist/css/sb-admin-2.css                            |   434 [32m+[m
 dist/css/sb-admin-2.min.css                        |     5 [32m+[m
 dist/js/sb-admin-2.js                              |    47 [32m+[m
 dist/js/sb-admin-2.min.js                          |     6 [32m+[m
 gulpfile.js                                        |   123 [32m+[m
 index.html                                         |    13 [32m+[m
 js/bootstrap-datepicker.min.js                     |     9 [32m+[m
 js/sb-admin-2.js                                   |    42 [32m+[m
 less/mixins.less                                   |     1 [32m+[m
 less/sb-admin-2.less                               |   548 [32m+[m
 less/variables.less                                |    14 [32m+[m
 package.json                                       |    24 [32m+[m
 pages.rar                                          |   Bin [31m0[m -> [32m65445[m bytes
 pages/agregar.php                                  |   149 [32m+[m
 pages/blank.html                                   |   402 [32m+[m
 pages/buttons.html                                 |   601 [32m+[m
 pages/conexion.php                                 |    12 [32m+[m
 pages/ejemplo1.php                                 |    16 [32m+[m
 pages/estudia.php                                  |   627 [32m+[m
 pages/estudiantes.html                             |   627 [32m+[m
 pages/estudiantes.php                              |   732 [32m+[m
 pages/flot.html                                    |   508 [32m+[m
 pages/forms.html                                   |   591 [32m+[m
 pages/grid.html                                    |   693 [32m+[m
 pages/guardar.php                                  |    39 [32m+[m
 pages/horario.html                                 |   451 [32m+[m
 pages/icons.html                                   |  1976 [32m+++[m
 pages/index.html                                   |   879 [32m++[m
 pages/insertar.php                                 |    27 [32m+[m
 pages/lista.php                                    |   629 [32m+[m
 pages/login.html                                   |    82 [32m+[m
 pages/morris.html                                  |   480 [32m+[m
 pages/notifications.html                           |   544 [32m+[m
 pages/panels-wells.html                            |   714 [32m+[m
 pages/tabla.php                                    |    45 [32m+[m
 pages/tables.html                                  |  1144 [32m++[m
 pages/typography.html                              |   622 [32m+[m
 vendor/bootstrap-social/bootstrap-social.css       |   101 [32m+[m
 vendor/bootstrap-social/bootstrap-social.less      |   114 [32m+[m
 vendor/bootstrap-social/bootstrap-social.scss      |   114 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker.css      |   471 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker.css.map  |     1 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker.min.css  |     9 [32m+[m
 .../bootstrap/css/bootstrap-datepicker.min.css.map |     1 [32m+[m
 .../css/bootstrap-datepicker.standalone.css        |   504 [32m+[m
 .../css/bootstrap-datepicker.standalone.css.map    |     1 [32m+[m
 .../css/bootstrap-datepicker.standalone.min.css    |     9 [32m+[m
 .../bootstrap-datepicker.standalone.min.css.map    |     1 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker3.css     |   678 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker3.css.map |     1 [32m+[m
 vendor/bootstrap/css/bootstrap-datepicker3.min.css |     9 [32m+[m
 .../css/bootstrap-datepicker3.min.css.map          |     1 [32m+[m
 .../css/bootstrap-datepicker3.standalone.css       |   707 [32m+[m
 .../css/bootstrap-datepicker3.standalone.css.map   |     1 [32m+[m
 .../css/bootstrap-datepicker3.standalone.min.css   |     9 [32m+[m
 .../bootstrap-datepicker3.standalone.min.css.map   |     1 [32m+[m
 vendor/bootstrap/css/bootstrap.css                 |  6757 [32m++++++++[m
 vendor/bootstrap/css/bootstrap.min.css             |     6 [32m+[m
 .../fonts/glyphicons-halflings-regular.eot         |   Bin [31m0[m -> [32m20127[m bytes
 .../fonts/glyphicons-halflings-regular.svg         |   288 [32m+[m
 .../fonts/glyphicons-halflings-regular.ttf         |   Bin [31m0[m -> [32m45404[m bytes
 .../fonts/glyphicons-halflings-regular.woff        |   Bin [31m0[m -> [32m23424[m bytes
 .../fonts/glyphicons-halflings-regular.woff2       |   Bin [31m0[m -> [32m18028[m bytes
 vendor/bootstrap/js/bootstrap.js                   |  2377 [32m+++[m
 vendor/bootstrap/js/bootstrap.min.js               |     7 [32m+[m
 vendor/datatables-plugins/dataTables.bootstrap.css |   314 [32m+[m
 vendor/datatables-plugins/dataTables.bootstrap.js  |   186 [32m+[m
 .../datatables-plugins/dataTables.bootstrap.min.js |     8 [32m+[m
 vendor/datatables-plugins/index.html               |   442 [32m+[m
 .../dataTables.responsive.css                      |   106 [32m+[m
 .../datatables-responsive/dataTables.responsive.js |   873 [32m++[m
 .../dataTables.responsive.scss                     |   149 [32m+[m
 vendor/datatables/css/dataTables.bootstrap.css     |   186 [32m+[m
 vendor/datatables/css/dataTables.bootstrap.min.css |     1 [32m+[m
 vendor/datatables/css/dataTables.bootstrap4.css    |   193 [32m+[m
 .../datatables/css/dataTables.bootstrap4.min.css   |     1 [32m+[m
 vendor/datatables/css/dataTables.foundation.css    |   116 [32m+[m
 .../datatables/css/dataTables.foundation.min.css   |     1 [32m+[m
 vendor/datatables/css/dataTables.jqueryui.css      |   481 [32m+[m
 vendor/datatables/css/dataTables.jqueryui.min.css  |     1 [32m+[m
 vendor/datatables/css/dataTables.material.css      |    87 [32m+[m
 vendor/datatables/css/dataTables.material.min.css  |     1 [32m+[m
 vendor/datatables/css/dataTables.semanticui.css    |   103 [32m+[m
 .../datatables/css/dataTables.semanticui.min.css   |     1 [32m+[m
 vendor/datatables/css/dataTables.uikit.css         |   146 [32m+[m
 vendor/datatables/css/dataTables.uikit.min.css     |     1 [32m+[m
 vendor/datatables/css/jquery.dataTables.css        |   452 [32m+[m
 vendor/datatables/css/jquery.dataTables.min.css    |     1 [32m+[m
 .../css/jquery.dataTables_themeroller.css          |   416 [32m+[m
 vendor/datatables/images/Sorting icons.psd         |   Bin [31m0[m -> [32m27490[m bytes
 vendor/datatables/images/favicon.ico               |   Bin [31m0[m -> [32m894[m bytes
 vendor/datatables/images/sort_asc.png              |   Bin [31m0[m -> [32m160[m bytes
 vendor/datatables/images/sort_asc_disabled.png     |   Bin [31m0[m -> [32m148[m bytes
 vendor/datatables/images/sort_both.png             |   Bin [31m0[m -> [32m201[m bytes
 vendor/datatables/images/sort_desc.png             |   Bin [31m0[m -> [32m158[m bytes
 vendor/datatables/images/sort_desc_disabled.png    |   Bin [31m0[m -> [32m146[m bytes
 vendor/datatables/js/dataTables.bootstrap.js       |   182 [32m+[m
 vendor/datatables/js/dataTables.bootstrap.min.js   |     8 [32m+[m
 vendor/datatables/js/dataTables.bootstrap4.js      |   184 [32m+[m
 vendor/datatables/js/dataTables.bootstrap4.min.js  |     8 [32m+[m
 vendor/datatables/js/dataTables.foundation.js      |   174 [32m+[m
 vendor/datatables/js/dataTables.foundation.min.js  |     8 [32m+[m
 vendor/datatables/js/dataTables.jqueryui.js        |   164 [32m+[m
 vendor/datatables/js/dataTables.jqueryui.min.js    |     9 [32m+[m
 vendor/datatables/js/dataTables.material.js        |   191 [32m+[m
 vendor/datatables/js/dataTables.material.min.js    |     8 [32m+[m
 vendor/datatables/js/dataTables.semanticui.js      |   208 [32m+[m
 vendor/datatables/js/dataTables.semanticui.min.js  |     9 [32m+[m
 vendor/datatables/js/dataTables.uikit.js           |   176 [32m+[m
 vendor/datatables/js/dataTables.uikit.min.js       |     8 [32m+[m
 vendor/datatables/js/jquery.dataTables.js          | 15278 [32m+++++++++++++++++++[m
 vendor/datatables/js/jquery.dataTables.min.js      |   166 [32m+[m
 vendor/datatables/js/jquery.js                     |     5 [32m+[m
 vendor/flot-tooltip/jquery.flot.tooltip.js         |   604 [32m+[m
 vendor/flot-tooltip/jquery.flot.tooltip.min.js     |    12 [32m+[m
 vendor/flot-tooltip/jquery.flot.tooltip.source.js  |   593 [32m+[m
 vendor/flot/excanvas.js                            |  1428 [32m++[m
 vendor/flot/excanvas.min.js                        |     1 [32m+[m
 vendor/flot/jquery.colorhelpers.js                 |   180 [32m+[m
 vendor/flot/jquery.flot.canvas.js                  |   345 [32m+[m
 vendor/flot/jquery.flot.categories.js              |   190 [32m+[m
 vendor/flot/jquery.flot.crosshair.js               |   176 [32m+[m
 vendor/flot/jquery.flot.errorbars.js               |   353 [32m+[m
 vendor/flot/jquery.flot.fillbetween.js             |   226 [32m+[m
 vendor/flot/jquery.flot.image.js                   |   241 [32m+[m
 vendor/flot/jquery.flot.js                         |  3168 [32m++++[m
 vendor/flot/jquery.flot.navigate.js                |   346 [32m+[m
 vendor/flot/jquery.flot.pie.js                     |   820 [32m+[m
 vendor/flot/jquery.flot.resize.js                  |    59 [32m+[m
 vendor/flot/jquery.flot.selection.js               |   360 [32m+[m
 vendor/flot/jquery.flot.stack.js                   |   188 [32m+[m
 vendor/flot/jquery.flot.symbol.js                  |    71 [32m+[m
 vendor/flot/jquery.flot.threshold.js               |   142 [32m+[m
 vendor/flot/jquery.flot.time.js                    |   432 [32m+[m
 vendor/flot/jquery.js                              |  9472 [32m++++++++++++[m
 vendor/font-awesome/HELP-US-OUT.txt                |     7 [32m+[m
 vendor/font-awesome/css/font-awesome.css           |  2199 [32m+++[m
 vendor/font-awesome/css/font-awesome.css.map       |     7 [32m+[m
 vendor/font-awesome/css/font-awesome.min.css       |     4 [32m+[m
 vendor/font-awesome/fonts/FontAwesome.otf          |   Bin [31m0[m -> [32m124988[m bytes
 vendor/font-awesome/fonts/fontawesome-webfont.eot  |   Bin [31m0[m -> [32m76518[m bytes
 vendor/font-awesome/fonts/fontawesome-webfont.svg  |   685 [32m+[m
 vendor/font-awesome/fonts/fontawesome-webfont.ttf  |   Bin [31m0[m -> [32m152796[m bytes
 vendor/font-awesome/fonts/fontawesome-webfont.woff |   Bin [31m0[m -> [32m90412[m bytes
 .../font-awesome/fonts/fontawesome-webfont.woff2   |   Bin [31m0[m -> [32m71896[m bytes
 vendor/font-awesome/less/animated.less             |    34 [32m+[m
 vendor/font-awesome/less/bordered-pulled.less      |    25 [32m+[m
 vendor/font-awesome/less/core.less                 |    12 [32m+[m
 vendor/font-awesome/less/extras.less               |     2 [32m+[m
 vendor/font-awesome/less/fixed-width.less          |     6 [32m+[m
 vendor/font-awesome/less/font-awesome.less         |    18 [32m+[m
 vendor/font-awesome/less/icons.less                |   733 [32m+[m
 vendor/font-awesome/less/larger.less               |    13 [32m+[m
 vendor/font-awesome/less/list.less                 |    19 [32m+[m
 vendor/font-awesome/less/mixins.less               |    60 [32m+[m
 vendor/font-awesome/less/path.less                 |    15 [32m+[m
 vendor/font-awesome/less/rotated-flipped.less      |    20 [32m+[m
 vendor/font-awesome/less/screen-reader.less        |     5 [32m+[m
 vendor/font-awesome/less/spinning.less             |    29 [32m+[m
 vendor/font-awesome/less/stacked.less              |    20 [32m+[m
 vendor/font-awesome/less/variables.less            |   744 [32m+[m
 vendor/font-awesome/scss/_animated.scss            |    34 [32m+[m
 vendor/font-awesome/scss/_bordered-pulled.scss     |    25 [32m+[m
 vendor/font-awesome/scss/_core.scss                |    12 [32m+[m
 vendor/font-awesome/scss/_extras.scss              |    44 [32m+[m
 vendor/font-awesome/scss/_fixed-width.scss         |     6 [32m+[m
 vendor/font-awesome/scss/_icons.scss               |   733 [32m+[m
 vendor/font-awesome/scss/_larger.scss              |    13 [32m+[m
 vendor/font-awesome/scss/_list.scss                |    19 [32m+[m
 vendor/font-awesome/scss/_mixins.scss              |    60 [32m+[m
 vendor/font-awesome/scss/_path.scss                |    15 [32m+[m
 vendor/font-awesome/scss/_rotated-flipped.scss     |    20 [32m+[m
 vendor/font-awesome/scss/_screen-reader.scss       |     5 [32m+[m
 vendor/font-awesome/scss/_spinning.scss            |    29 [32m+[m
 vendor/font-awesome/scss/_stacked.scss             |    20 [32m+[m
 vendor/font-awesome/scss/_variables.scss           |   744 [32m+[m
 vendor/font-awesome/scss/font-awesome.scss         |    18 [32m+[m
 vendor/jquery/jquery.js                            | 10074 [32m++++++++++++[m
 vendor/jquery/jquery.min.js                        |     4 [32m+[m
 vendor/metisMenu/metisMenu.css                     |    64 [32m+[m
 vendor/metisMenu/metisMenu.js                      |   120 [32m+[m
 vendor/metisMenu/metisMenu.min.css                 |    10 [32m+[m
 vendor/metisMenu/metisMenu.min.js                  |     9 [32m+[m
 vendor/morrisjs/morris.css                         |     2 [32m+[m
 vendor/morrisjs/morris.js                          |  1892 [32m+++[m
 vendor/morrisjs/morris.min.js                      |     7 [32m+[m
 vendor/raphael/raphael.js                          |  8293 [32m++++++++++[m
 vendor/raphael/raphael.min.js                      |     3 [32m+[m
 194 files changed, 94879 insertions(+)
