<?php
class m_jornadas  extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }
  public function getPersonas(){
    $this->db->select('*');
    $this->db->from('personas');
    $query = $this->db->get();
    return $query->result();
  }
  public function genero_f(){
  $this->db->query("SELECT count ('sexo')");
  #$this->db->from('personas');
  #$this->db->where("sexo='F'");
  $this->db->from('personas, estados, direccion, planes_personas, planes');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes='1' AND sexo='F'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function genero_m(){
  $this->db->query("SELECT count ('sexo')");
  #$this->db->from('personas');
  #$this->db->where("sexo='M'");
  $this->db->from('personas, estados, direccion, planes_personas, planes');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes='1' AND sexo='M'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
}
?>
