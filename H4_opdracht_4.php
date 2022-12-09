<?php
        $price = 55;

        if ($price > 150) {
            echo "Oude prijs: $price. Na verhoging van 19% is de prijs: €" . ($price / 100 * 119);
        } elseif ($price >= 55 && $price <= 150) {
            echo "Oude prijs: $price. Na verhoging van 16% is de prijs: €" . ($price / 100 * 116);
        } elseif ($price < 55) {
            echo "Oude prijs: $price. Na verhoging van 11% is de prijs: €" . ($price / 100 * 111);
        }
        ?>
