<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once('MasterController.php');

class Common extends MasterController
{
	public function index()
	{
		$sqlStills = '
			SELECT
				s.*,
				( SELECT filename FROM files f WHERE f.node_id = s.id AND f.table = "stills" ORDER BY f.weight ASC, f.id DESC LIMIT 1 ) AS imagen,
				( SELECT GROUP_CONCAT(codigo SEPARATOR "") FROM coordenadas c WHERE c.idStill = s.id ) AS coordenadas
			FROM
				stills s
			ORDER BY
				weight ASC
		';
		
		$stills = $this->db->query($sqlStills)->result_array();
		
		$this->load->library('autoembed');
		foreach ( $stills as &$still )
		{
			if ( $still['esVideo'] > 0 && $still['video'] )
			{
				$this->autoembed->parseUrl($still['video']);
				$still['video'] = $this->autoembed->getEmbedCode();
			}
		}
		
		$this->addContentPage('home', array('stills' => $stills));
		$this->show();
	}
}
