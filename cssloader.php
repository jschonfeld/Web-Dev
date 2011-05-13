<HTML>
<Body>
<?php
interface webpage {
public function gethref();

	//declaring functions
	public function sethref($href);
	public function getrel();
	public function setrel($rel);
	public function gettype();
	public function settype($type)
}

//Interface for article
interface webpage 

class node implements webpage
{
	//declaring string variables
	private $href;
	private $rel;
	private $type;

	
	
	// sets the href 
	public function sethref($href) {
        	$this->href = $href;
	}
	// gets the href  
	public function gethref() {
    		return $this->href;
 	}
    // sets the rel
	public function setrel($rel) {
		$this->rel = $rel;
	}
	// gets the rel 	
	public function getrel() {
		return $this->rel;
	}
	//sets the type
	public function setrel($type) {
		$this->rel = $rel;
	}
	// gets the type
	public function gettype() {
		$this->type = $type;
	}
	
	
	
} 

// instansiating class node
$a = new node();

// sample strings

$b->sethref('css/style.css');

$c->setrel('stylesheet');

$d->settype('text/css');



//setting up html 

echo '<LINK href="' . $a->gethref() .' " rel= "' $a->getrel . " 'type=" $a->gettype ." '</p>';

?>i
</body>
</HTML>

