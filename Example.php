<?php
include 'convertV2E.php';
echo convertV2E('Tôi là Nguyễn An Hưng');	// Tra ve gia tri: Toi la Nguyen An Hung
echo convertV2E('Tôi là Nguyễn An Hưng', true);	// Tra ve gia tri: toi la nguyen an hung
echo convertV2E('Tôi là Nguyễn An Hưng!', true);	// Tra ve gia tri: toi la nguyen an hung!
echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname');	// Tra ve gia tri: toi la nguyen an hung
echo convertV2E('Tôi là Nguyễn An Hưng!', true, 'postname', true);	// Tra ve gia tri: toi-la-nguyen-an-hung