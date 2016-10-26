var pluginOembedLoadLazyVideo = function() {
    var wrapper = this.parentNode;
    var embed   = wrapper.children[0];
    embed.src = embed.dataset.src;
    this.remove();
};

document.addEventListener("DOMContentLoaded", function(event) {
  var thumb = document.getElementsByClassName('kirby-plugin-oembed__thumb');

  for (var i = 0; i < thumb.length; i++) {
      thumb[i].addEventListener('click', pluginOembedLoadLazyVideo, false);
  }
});
