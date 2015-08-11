<?php

  class PingPongGenerator
    {
      function generatePingPongArray($number)
      {
        $number = $_GET['number'];
        $ping = ($_GET['number'] % 3);


        if ($number = $ping) {
            return "Ping";

      } else {
            return "this number is higher than 1, also good job!";
      }

      }
    }
?>
