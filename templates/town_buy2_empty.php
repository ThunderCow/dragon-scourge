<?php

$template = <<<END
You are buying the {{newname}}. Is that ok?<br /><br />
<form action="index.php?do=buy" method="post"><input type="hidden" name="idstring" value="{{newidstring}}" /><input type="submit" name="three" value="Yes" /> <input type="submit" name="pullout" value="No" /></form>
END;

?>