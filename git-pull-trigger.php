<?php
exec("git reset --hard HEAD");
exec("cd ~/htdocs/build.westingourmet.co.uk/skin/frontend/westin/default" . " && git pull;");
echo "done";
?>
