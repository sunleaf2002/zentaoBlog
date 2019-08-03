<?php
class hello extends control
{
	public function world()
	{
	   $this->view->helloworld = $this->hello->world();
	   $this->display();
	}
}
?>