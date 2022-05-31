<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51KqALaBqIl14PAu826skDPoFQiDmHMFWdivhIS1qDBgTKbuKJSD8vSmVuuQtdZyBJwgCqNbU1PY9rtKQsGTSUOpi00U8SOPAHo";

$secretKey="sk_test_51KqALaBqIl14PAu8u2XCnFzTupYS7YkcoZjPOSwiWqOfP9E7xn4VceEjnh8scwIWkRGTaMZLZpnzyoOUodGFTeDe00QoPJuaKl";

\Stripe\Stripe ::setApikey($secretKey);
?>