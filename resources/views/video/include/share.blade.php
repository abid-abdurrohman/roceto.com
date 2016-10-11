<div class="social-buttons ssk-group ssk-round">
    <a class="ssk ssk-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
       target="_blank">
    </a>
    <a class="ssk ssk-twitter" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
       target="_blank">
    </a>
    <a class="ssk ssk-google-plus" href="https://plus.google.com/share?url={{ urlencode($url) }}"
       target="_blank">
    </a>
    <a class="ssk ssk-pinterest" href="https://pinterest.com/pin/create/button/?{{
        http_build_query([
            'url' => $url,
            'media' => $image,
            'description' => $description
        ])
        }}" target="_blank">
    </a>
</div>
