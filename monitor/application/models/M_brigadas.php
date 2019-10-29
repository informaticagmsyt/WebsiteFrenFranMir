<?php
class m_brigadas extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   
public function brigadas_amazonas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='1'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function brigadas_anzoategui(){
  $this->db->query("SELECT COUNT ('planes.planes')");
  $this->db->from('public.planes, public.planes_personas, public.personas, public.direccion, public.estados');
  $this->db->where("planes.id_planes = planes_personas.key_id_planes AND
  planes_personas.id_planes_personas = personas.id_persona AND personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado                 AND estados.id_estado='2' AND planes.id_planes='3'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function brigadas_apure(){
  $this->db->query("SELECT COUNT ('planes.planes')");
  $this->db->from('public.planes, public.planes_personas, public.personas, public.direccion, public.estados');
  $this->db->where("planes.id_planes = planes_personas.key_id_planes AND
  planes_personas.id_planes_personas = personas.id_persona AND personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado                 AND estados.id_estado='3' AND planes.id_planes='3'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function brigadas_aragua(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='4'");
  $aragua = $this->db->get();
    return $aragua->result();
 } 
  public function brigadas_barinas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='5'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_bolivar(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='6'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_carabobo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='7'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_cojedes(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='8'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_delta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='9'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_distrito(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='10'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_falcon(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='11'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_guarico(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='12'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_lara(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='13'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_merida(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='14'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_miranda(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='15'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_monagas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='16'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_esparta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='17'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_portuguesa(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='18'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_sucre(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='19'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_tachira(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='20'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_trujillo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='21'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_vargas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='22'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_yaracuy(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='23'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function brigadas_zulia(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='3' and estados.id_estado='24'");
  $aragua = $this->db->get();
    return $aragua->result();
 }

public function listar_brigadas(){
	$this->db->select("unidad_patria.id_patria, 
  unidad_patria.cedula, 
  unidad_patria.nombres, 
  unidad_patria.apellidos, 
  unidad_patria.telefono, 
  unidad_patria.celular, 
  unidad_patria.email, 
  unidad_patria.sector, 
  unidad_patria.organizacion, 
  unidad_patria.espacio, 
  unidad_patria.tipo_proyecto, 
  parroquias.parroquia");
  $this->db->from('public.unidad_patria, 
  public.parroquias');
  $this->db->where("unidad_patria.parroquia = parroquias.id_parroquia
");

  $listado = $this->db->get();
    return $listado->result();
}

}
?>
