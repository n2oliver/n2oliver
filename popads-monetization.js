/*<![CDATA[/* */
(function(){
  var z = window,
      c = "d291c0275255955f30328d38291dc016",
      b = [
        ["siteId", 527-274-241+443+5215269],
        ["minBid", 0.0001],            // mínimo para manter fill rate
        ["popundersPerIP", "1"],       // 1 popunder por IP/dia
        ["delayBetween", 40],          // 40s de delay entre popunders
        ["default", false],            // popunders automáticos desativados
        ["defaultPerDay", 0],
        ["topmostLayer", "auto"]
      ],
      v = [
        "d3d3LmJldHRlcmFkc3lzdGVtLmNvbS9kZW1iZWQubWluLmNzcw==",
        "ZDJrazBvM2ZyN2VkMDEuY2xvdWRmcm9udC5uZXQvRlcvenhpdmVseWpzLm1pbi5qcw=="
      ],
      d = -1,
      i, p,
      f = function(){
        clearTimeout(p);
        d++;
        if(v[d] && !(1788125513000 < (new Date).getTime() && 1 < d)){
          i = z.document.createElement("script");
          i.type = "text/javascript";
          i.async = true;
          var e = z.document.getElementsByTagName("script")[0];
          i.src = "https://" + atob(v[d]);
          i.crossOrigin = "anonymous";
          i.onerror = f;
          i.onload = function(){
            clearTimeout(p);
            z[c.slice(0,16)+c.slice(0,16)] || f();
          };
          p = setTimeout(f, 5000);
          e.parentNode.insertBefore(i,e);
        }
      };
  if(!z[c]){
    try { Object.freeze(z[c] = b); } catch(e){}
    f();
  }
})();
/*]]>/* */