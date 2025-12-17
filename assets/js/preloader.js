window.addEventListener('load', function () {
  var loader = document.getElementById('loader');
  if (!loader) return;
  setTimeout(function () {
    if (loader && loader.parentNode) loader.parentNode.removeChild(loader);
  }, 1000);
});
