if (!Date.now) {
  Date.now = () => {
    return new Date().getTime();
  };
}

const vendors = ['webkit', 'moz'];
for (let i = 0; i < vendors.length && !window.requestAnimationFrame; ++i) {
  let vp = vendors[i];
  window.requestAnimationFrame = window[`${vp}RequestAnimationFrame`];
  window.cancelAnimationFrame = (window[`${vp}CancelAnimationFrame`] || window[`${vp}CancelRequestAnimationFrame`]);
}

if (/iP(ad|hone|od).*OS (6|7|8)/.test(window.navigator.userAgent) || !window.requestAnimationFrame || !window.cancelAnimationFrame) {
  let lastTime = 0;
  window.requestAnimationFrame = (callback) => {
    let now = getTime();
    let timePlus = 16;
    let nextTime = Math.max(lastTime + timePlus, now);
    return setTimeout(() => {
        callback(lastTime = nextTime);
      },
      nextTime - now);
  };
  window.cancelAnimationFrame = clearTimeout;
}

export function isPercentage(n) {
  return typeof n === 'string' && n.indexOf('%') !== -1;
};

export function convertPercentageToFloat(n) {
  return parseFloat(n.slice(0, -1) / 100, 10);
};

export function convertMatrixToArray(value) {
  if (value && (value.substr(0, 6) === 'matrix')) {
    return value.replace(/^.*\((.*)\)$/g, '$1').replace(/px/g, '').split(/, +/);
  }
  return false;
};

export function getTime () {
  if (typeof window.performance !== 'undefined' && window.performance.now) {
    return window.performance.now();
  }
  return Date.now();
};
