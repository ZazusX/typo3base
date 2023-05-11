const body = document.body;
const html = document.querySelector('html');
var hash = location.hash.substr(1);
var position = window.pageYOffset;

var getElemDistance = function (elem) {
  var location = 0;
  if (elem.offsetParent) {
    do {
      location += elem.offsetTop;
      elem = elem.offsetParent;
    } while (elem);
  }
  return location >= 0 ? location : 0;
};

if (hash !== '') {
} else {
  html.style.scrollBehavior = 'smooth';
  window.__forceSmoothScrollPolyfill__ = false;
}
window.addEventListener('DOMContentLoaded', function () {
  if (hash !== '') {
    this.setTimeout(() => {
      var elem = document.getElementById(hash);
      var location = getElemDistance(elem);
      window.scrollTo(0, location);
      console.log(location);
    }, 1000);
  }
  var headings = document.querySelectorAll('header *'),
    _nv;
  for (var i = headings.length - 1; i >= 0; i--) {
    _nv = headings[i].innerHTML;
    headings[i].innerHTML = _nv.replace(/\|/, '&shy;');
  }
});
