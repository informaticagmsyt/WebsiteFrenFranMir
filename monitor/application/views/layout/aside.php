<?defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACION</li>
                     <li>
                        <a>   
                            <span style="color: navy;">Bienvenido -> <?php echo  $this->session->userdata('n_usuario');?></span>
                        </a>
                    </li>
                    <li  class="active" >
                        <a href="<?= base_url('index.php/c_emprende');?>">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4'): ?>
                             <li >
                                <a href="<?= base_url('index.php/c_emprende');?>">
                                      <i class="material-icons">assignment</i>
                                    <span>Listado Mas Caracas</span>
                                </a>
                            </li>
                              <li >
                                <a href="<?= base_url('index.php/c_agroproductivo');?>">
                                      <i class="material-icons">assignment</i>
                                    <span>Listado Siembra Caracas</span>
                                </a>
                            </li>
                                  <li >
                                <a href="<?= base_url('index.php/c_brigadas');?>">
                                      <i class="material-icons">assignment</i>
                                    <span>Listado Unidad Patria</span>
                                </a>
                            </li>
                    <?php endif ?>

                    <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4' ) : ?>
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Configuracion</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Usuarios</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                                <li>
                                                    <a href="<?= base_url('index.php/c_crear_usuario');?>">Registrar Usuarios</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('index.php/c_usuario');?>">Listado de  Usuarios</a>
                                                </li>
                                    <?php endif ?>
                                 
                                </ul>
                            </li>
                           <!-- <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="#">Gabinete Economico de Caracas</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.2
                </div>
            </div>
        </aside>
    </section>
