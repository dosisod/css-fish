# css-fish
Obtains size of browser window without JS

By bruteforcing the window size using css selectors, one can determin the screen dimentions of any user, even through TOR

![Bypass Tor](/img/tor.png)

This is done by checking if the exact width/height is set, and then set an image background to a url, pinging a server with the resulting pixel size

If the width is say 10px wide, this will trigger the `@media (width:10px){#w{background:url('/?w=10')}}` media query, and then ping `index.php?w=10`

This is by defualt stored in a PHP session for each user, but can be changed if needed

Screen sizes are most likely bigger then 800x600, so to make your own table you can do `./build.sh width height output`