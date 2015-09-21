<?php
include 'convertV2E.php';
echo convertV2E('Tôi là Nguyễn An Hưng');	// Toi la Nguyen An Hung
echo convertV2E('Tôi là Nguyễn An Hưng', true);	// toi la nguyen an hung
echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname');	// toi la nguyen an hung
echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname', true);	// toi-la-nguyen-an-hung