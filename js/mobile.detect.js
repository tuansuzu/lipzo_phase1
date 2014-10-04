
     var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
              if (mobile) {
                  console.log("MOBILE DEVICE DETECTED");
                  console.log("<b>------------------------------------------<br>")
                  console.log("<b>" + navigator.userAgent + "<br>")
                  console.log("<b>------------------------------------------<br>")
                  var userAgent = navigator.userAgent.toLowerCase();
                  if ((userAgent.search("android") > -1) && (userAgent.search("mobile") > -1))
                         console.log("<b> ANDROID MOBILE <br>")
                   else if ((userAgent.search("android") > -1) && !(userAgent.search("mobile") > -1))
                       console.log("<b> ANDROID TABLET <br>")
                   else if ((userAgent.search("blackberry") > -1))
                       console.log("<b> BLACKBERRY DEVICE <br>")
                   else if ((userAgent.search("iphone") > -1))
                       console.log("<b> IPHONE DEVICE <br>")              
                   else if ((userAgent.search("ipod") > -1))
                       console.log("<b> IPOD DEVICE <br>")
               else if ((userAgent.search("ipad") > -1))
                       console.log("<b> IPAD DEVICE <br>")
                       else
                   console.log("<b> UNKNOWN DEVICE <br>")
              }
              else
                  console.log("NO MOBILE DEVICE DETECTED");
