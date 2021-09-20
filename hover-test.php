
<div class='container'>
  <header>
    <h1>SVG clip-path Hover Effect</h1>
    <p>
      Attempt to re-create <a href="http://www.cjgammon.com/" target="_blank">CJ Gammon’s</a>
      portfolio grid hover effect using SVG and CSS Transitions.
    </p>
    <p class='small'>
      <b>Note:</b> this is an experiment, it does not seem to work on Firefox 43.0.4
      neither have touch support.
      <br/>Tested on Chrome 47.0.2526.106, Opera 34.0 and Safari 8.0.6.
    </p>
  </header>
  <main>
    <div class='items'>
      <div class='item'>
        <svg preserveAspectRatio='xMidYMid slice' viewBox='0 0 300 200'>
          <defs>
            <clipPath id='clip-0'>
              <circle cx='0' cy='0' fill='#000' r='150px'></circle>
            </clipPath>
          </defs>
          <text class='svg-text' dy='.3em' x='50%' y='50%'>
            X-rays
          </text>
          <g clip-path='url(#clip-0)'>
            <image height='100%' preserveAspectRatio='xMinYMin slice' width='100%' xlink:href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/i-xrays.png'></image>
            <text class='svg-masked-text' dy='.3em' x='50%' y='50%'>
              X-rays
            </text>
          </g>
        </svg>
      </div>
      <div class='item'>
        <svg preserveAspectRatio='xMidYMid slice' viewBox='0 0 300 200'>
          <defs>
            <clipPath id='clip-1'>
              <circle cx='0' cy='0' fill='#000' r='150px'></circle>
            </clipPath>
          </defs>
          <text class='svg-text' dy='.3em' x='50%' y='50%'>
            Worms
          </text>
          <g clip-path='url(#clip-1)'>
            <image height='100%' preserveAspectRatio='xMinYMin slice' width='100%' xlink:href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/i-worms.png'></image>
            <text class='svg-masked-text' dy='.3em' x='50%' y='50%'>
              Worms
            </text>
          </g>
        </svg>
      </div>
      <div class='item'>
        <svg preserveAspectRatio='xMidYMid slice' viewBox='0 0 300 200'>
          <defs>
            <clipPath id='clip-2'>
              <circle cx='0' cy='0' fill='#000' r='150px'></circle>
            </clipPath>
          </defs>
          <text class='svg-text' dy='.3em' x='50%' y='50%'>
            Aurora
          </text>
          <g clip-path='url(#clip-2)'>
            <image height='100%' preserveAspectRatio='xMinYMin slice' width='100%' xlink:href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/i-aurora.png'></image>
            <text class='svg-masked-text' dy='.3em' x='50%' y='50%'>
              Aurora
            </text>
          </g>
        </svg>
      </div>
      
    </div>
  </main>
</div>
<div class='options'>
  <button class='dark'></button>
  <button class='light'></button>
</div>
