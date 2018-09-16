<?php

$quotes = [
    "Fool me once, strike one. Fool me twice, strike three. — Michael Scott",
    "Sometimes I'll start a sentence and I don't even know where it's going. I just hope I find it along the way. — Michael Scott",
    "I love inside jokes. I'd love to be a part of one someday. — Michael Scott"
];

$random_quote_key = array_rand($quotes, 1);

$quote = $quotes[$random_quote_key];
