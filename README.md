# IN DEVELOPMENT BUT WORKS

![enter image description here](https://i.ibb.co/Vth0w21/Ekran-Resmi-2020-11-02-18-49-40.png)
# splider-slider
Is WordPress plugin for [SplideJS](https://splidejs.com/)

# motivation
you know, making wordpress fast is hard sometimes. we can create custom sliders without bullshit for a "real" dynamic slider. but, it's not easy for somebody. in this position, i've tried that create an alternative slider for wordpress for that. i've used [SplideJS](https://splidejs.com/) and i like it really. i hope you like it too.

# features
look [SplideJS](https://splidejs.com/) documentation for that.

# usage

 - this plugin is working with shortcodes. so, you need to use our
   shortcode for displaying slider in your website. slider's shortcode
   is `[g_slider]` . 
 - slider has custom parameters for customizations. for filtering categories, you need to find them ids and use it like that: `[g_slider category="1,2,3,4"]` . category parameter is using "category__and" parameter in get_posts function. so, your content will be filtered in "both of" these categories. if you type one category, slider will display contents in one category, of course.
 - other parameters are [SplideJS](https://splidejs.com/)'s parameters. look at that documentation and feel free to try.
 - an example shortcode with [SplideJS](https://splidejs.com/)'s parameters is something like that;
`[g_slider category="2" autoplay="true" perpage=3 permove=2 lazyload="true" direction="ttb"]`
- if you want to use default slider, use shortcode without parameters like that; `[g_slider category="2"]`

# last words
for making plugin fast, i don't use an external css file for that. all css code is in `shortcode.php`. i wrote them all inline. 
