<?php
class m_agro extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   /*
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
*/
   public function registrar($param,$param_1){
        $campos = array(
            'cedula'   => strtoupper($param['cedula']),
            'nombre'   => strtoupper($param['nombre']),  
            'apellido' => strtoupper($param['apellido']),
            'sexo' => strtoupper($param['sexo']),
            'f_nacimiento'=>$param['f_nacimiento']
        );
        $insert= $this->db->insert('personas',$campos);
        $lastId = $this->db->insert_id();
        if ($lastId > 0) {
           $datos = array(
            'telefono'=> strtoupper($param_1['tlf']),
            'email'   => strtoupper($param_1['email']),  
            'id_persona_contacto '=> $param['id_persona_contacto '] = $lastId 
        );
        $insert   =  $this->db->insert('contacto',$datos);
            if (!$insert) {
                    echo ' <script>  
                            alert("Erro al Registar Usuario");
                            document.location.href = "'.base_url().'"; 
                        </script>';
                } else {
                    echo ' <script>  
                            alert("El Registro en la Unidad de Acompañamiento Agro Productivo fue Completado con Exito");
                            document.location.href = "'.base_url('index.php/C_registro_agro').'"; 
                            </script>';
                }
        }else{
                            echo ' <script>  
                                    alert("Erro al Registar Usuario");
                                    document.location.href = "'.base_url().'"; 
                                  </script>';
                          }         
     }
/****************************************************************************************************************************************************/     
public function agro_amazonas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='1'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function agro_anzoategui(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='2'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function agro_apure(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='3'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function agro_aragua(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='4'");
  $aragua = $this->db->get();
    return $aragua->result();
 } 
  public function agro_barinas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='5'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_bolivar(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='6'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_carabobo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='7'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_cojedes(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='8'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_delta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='9'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_distrito(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='10'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_falcon(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='11'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_guarico(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='12'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_lara(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='13'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_merida(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='14'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_miranda(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='15'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_monagas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='16'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_esparta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='17'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_portuguesa(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='18'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_sucre(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='19'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_tachira(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='20'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_trujillo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='21'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_vargas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='22'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_yaracuy(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='23'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_zulia(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='24'");
  $aragua = $this->db->get();
    return $aragua->result();
 }

 
public function listar_agro(){
$this->db->select("parroquias.parroquia, 
  plan_siembra.id_siembra, 
  plan_siembra.cedula, 
  plan_siembra.nombres, 
  plan_siembra.apellidos, 
  plan_siembra.telefono, 
  plan_siembra.celular, 
  plan_siembra.email, 
  plan_siembra.eje, 
  plan_siembra.sector, 
  plan_siembra.movimiento, 
  plan_siembra.espacio, 
  plan_siembra.luz, 
  plan_siembra.internet, 
  plan_siembra.agua, 
  plan_siembra.tipo_proyecto");
  $this->db->from('public.parroquias, 
  public.plan_siembra');
  $this->db->where( " plan_siembra.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
