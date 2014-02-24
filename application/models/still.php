<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Still extends MY_Model {
	
	/*** Datos básicos ***/
	public static $name = "Still";
	public static $table = "stills";
	public static $returnURL = '/';
	public static $hayPaginaIndividual = false;
	
	function __construct($id = null)
	{
		/*** Fields ***/
		$this->fields['weight'] = new Textbox('Orden');
		$this->fields['imagen'] = new FileUpload();
		$this->fields['esVideo'] = new SimpleSelect('Es video ?');
		$this->fields['video'] = new Textbox();
		$this->fields['coordenadas'] = new MultipleField('Coordenadas');
		
		/*** Extras ***/	
		$this->fields['esVideo']->setValues( array( 'No', 'This is a funny animation', 'This is a new project' ) );
		$this->fields['coordenadas']->addField('codigo', new Textbox('Código') );
		$this->fields['video']->maxLength = 255;
		
		$this->setListableFields(array('weight'));
		
		parent::__construct($id);
	}
	
	function save()
	{
		if ( !$_POST['weight'] )
		{
			$count = $this->ci->db->count_all('stills');
			$_POST['weight'] = $count + 1;
		}
		else {
			$this->ci->db->query('UPDATE stills SET weight = weight + 1 WHERE weight >= ?', array($_POST['weight']));
		}
		
		parent::save();
	}
	
	function validate()
	{
		parent::validate();
		
		/*$this->ci->form_validation->set_rules('title','','required');
		
		if ($this->ci->form_validation->run() == true)
			return null;
		else
		{
			return $this->ci->form_validation->get_error_array();
		}*/
	}
}
