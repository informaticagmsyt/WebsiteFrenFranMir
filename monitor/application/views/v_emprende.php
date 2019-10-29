<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por Favor Espere...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <section class="content">
        <div class="container-fluid">
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado Mas Caracas
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                   <thead>
                                        <tr>
                                            <th scope="col" style="font-family: 'Dancing Script', cursive;">Cedula</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Nombres</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Apellidos</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Telefono</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Celular</th>
                      
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Email</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Parroquia</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Eje</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Sector</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Movimiento</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Espacio</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Luz</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Internet</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Agua</th>
                                <th scope="col" style="font-family: 'Dancing Script', cursive;">Tipo de Proyecto</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                                                <?php
                                    foreach ($listar as $listar) {
                                ?>
                                  <tr>
                                        <th scope="row"><?php echo $listar->cedula;?></th>
                                        <td><?php echo strtolower($listar->nombres);?></td>
                                        <td><?php echo strtolower($listar->apellidos);?></td>
                                        <td><?php echo strtolower($listar->telefono);?></td>
                                        <td><?php echo strtolower($listar->celular);?></td>
                                      
                                        <td><?php echo strtolower($listar->email);?></td>
                                        <td><?php echo strtolower($listar->parroquia);?></td>
                                        <td><?php echo strtolower($listar->eje);?></td>
                                        <td><?php echo strtolower($listar->sector);?></td>
                                        <td><?php echo strtolower($listar->movimiento);?></td>
                                        <td><?php echo strtolower($listar->espacio);?></td>
                                        <td><?php echo strtolower($listar->luz);?></td>
                                        <td><?php echo strtolower($listar->internet);?></td>
                                        <td><?php echo strtolower($listar->agua);?></td>
                                        <td><?php echo strtolower($listar->tipo_proyecto);?></td>
                                    
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
