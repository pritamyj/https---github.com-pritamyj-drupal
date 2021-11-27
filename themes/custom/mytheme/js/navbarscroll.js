 
 (function($){
        $(window).scroll(function () {
            if ($(this).scrollTop() < 30){
                $("header #block-mytheme-main-menu ").css({"background-color":"transparent","background-image": "linear-gradient(transparent, transparent)",
                "padding": "27px 0","margin-top": "0px"}); 

                $("header .language-switcher-language-url").css({"background-color":"transparent",'z-index':'15' })

                $("header #block-mytheme-branding").css({"background-color":"rgba(1,1,1,0.5)",'z-index':'1',"background-image": "linear-gradient(transparent, transparent)"})

                $("ul.show").css({"background-color":"rgba(1,1,1,0.5)","background-image": "linear-gradient(transparent, transparent)"});

                $(".hamburger").css({"z-index":"15"});

                // $(".heading ").css({"margin-top":"183px","z-index":"100","transition": "all 0.5s ease-in-out"});
                 
            }else{
                // $("header #block-mytheme-main-menu ").css({'position': 'fixed','top': '0','width': '100%',"padding": "7px 0","margin-top": "0px","background-color":"#bd4f6c","background-image": "linear-gradient(326deg, #bd4f6c 0%, #d7816a 74%)" });

                $("header .language-switcher-language-url").css({'z-index':'15',"background-color":"transparent","background-image": "linear-gradient(transparent, transparent)" }); 

                $("header #block-mytheme-branding").css({"background-color":"#bd4f6c",'z-index':'5','top': '0',"background-image": "linear-gradient(326deg, #bd4f6c 0%, #d7816a 74%)" }); 

                $("ul.show").css({"background-color":"#bd4f6c","background-image": "linear-gradient(326deg, #bd4f6c 0%, #d7816a 74%)" });

                $(".hamburger").css({"z-index":"15"});
            }
})

    
    }
    (jQuery));
    