window.addEventListener("load", function(event) {
  links = document.querySelectorAll('table.review a');
  url = window.location.href;
  links.forEach(function (e){
    if(e.href == window.location.href){
      if(e.href.includes('&mode=asc')){
        e.href = e.href.replace('&mode=asc', '')+'&mode=desc';
      }
    }
    if(e.href.replace('&mode=asc', '') == url.replace('&mode=desc', '')){
      e.classList.add('asc');
    } else if(e.href.replace('&mode=desc', '') == url.replace('&mode=asc', '')){
      e.classList.add('desc');
    }
  });
});