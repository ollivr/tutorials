<?php
require_once 'ably.php';
?>
<html>
<head>
    <script src="https://cdn.ably.io/lib/ably.min-1.js" type="text/javascript"></script>
</head>
<body>
<h1>Publish &amp; Subscribe sample</h1>
</body>
<script type="text/javascript">
    /* Set up a Realtime client which will subscribe to 'sport' channel*/
    var realtime = new Ably.Realtime('<?= $apikey?>');
</script>
</html>

