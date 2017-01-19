<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Embed extends htmlElement{
		private $height = null;
		private $src = null;
		private $type = null;
		private $width = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'embed';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$hmtl .= '<embed';
			$html .= parent::getDependencies();

			if($this->src != null){
				$hmtl .= ' src="' . $this->src . '"';
			}

			if($this->type != null){
				$html .= ' type="' . $this->type . '"';
			}

			if($this->width != null){
				$html .= ' width="' . $this->width . '"';
			}

			if($this->height != null){
				$html .= ' height="' . $this->width . '"';
			}
		}

		public function setWidth($width){
			$this->width = $width;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function setSource($src){
			$this->src = $src;
		}

		public function setHeight($height){
			$this->height = $height;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setContent($content){
			$this->content = $content;
		}

		public function setName($name){
			$this->elementName = $name;
		}

		public function setClass($class){
			$this->class = $class;
		}

		public function addStyle(Style $style){
			$len = count($this->styles);
    		$this->styles[$len] = $style;
		}

		public function addJsEvent(JavaScriptEvent $jsEvent){
			$len = count($this->jsEvents);
    		$this->jsEvents[$len] = $jsEvent;
		}

		public function addChild(HtmlElement $child){
			$len = count($this->children);
    		$this->children[$len] = $child;
		}

		public function addAttribute(CustomAttribute $attribute){
			$len = count($this->customAttributes);
    		$this->customAttributes[$len] = $attribute;
		}

		public function hide(){
			$this->hidden = true;
		}
	}
?>
