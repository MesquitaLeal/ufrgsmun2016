<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="<?= $path['upper'];?>" class="upper" style="fill: url(#upper<?= $model->abbr?>)" />
    <path d="<?= $path['lower'];?>" class="lower" style="fill: url(#lower<?= $model->abbr?>)"/>
    <linearGradient id="upper<?= $model->abbr?>" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color=<?= $path['upper-colorBegins'];?> />
          <stop offset="100%" stop-color=<?= $path['upper-colorEnds'];?> />
    </linearGradient>
    <linearGradient id="lower<?= $model->abbr?>" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color=<?= $path['lower-colorBegins'];?> />
          <stop offset="100%" stop-color=<?= $path['lower-colorEnds'];?> />
    </linearGradient>
</svg>
