$(window).on('load', function() {
    var url = $(location).attr('href');
    if(url.indexOf("?id=") != -1){
        var id = url.split("?id=");
        var $target = $('#' + id[id.length - 1]);
        var str_1 = "bridge";
        var str_2 = "odess";
        var str_3 = "money";
        var str_4 = "revenant";
        var str_5 = "room";
        var str_6 = "spot";
        var str_7 = "brook";
        var str_8 = "kimi";
        var str_9 = "xmen";
        var str_10 = "fant";
        var str_11 = "knife";
        var str_12 = "shippu";
        var str_13 = "final";
        var str_14 = "kaizoku";
        var str_15 = "starwars";
        var str_16 = "doryunouta";
        var str_17 = "nerve";
        var str_18 = "honnoji";
        var str_19 = "dirty";
        var str_20 = "consultant";
        var str_21 = "shinjuku";
        var str_22 = "ousama";
        if(id[1].match(str_1)||id[1].match(str_2)){
            var pos = $target.offset().top - 50;
      }
       if(id[1].match(str_3)||id[1].match(str_4)){
            var pos = $target.offset().top - 70;
    }
       if(id[1].match(str_5)||id[1].match(str_6)){
            var pos = $target.offset().top - 90;
    }
       if(id[1].match(str_7)||id[1].match(str_8)){
            var pos = $target.offset().top - 120;
    }
       if(id[1].match(str_9)||id[1].match(str_10)){
            var pos = $target.offset().top - 140;
    }
      if(id[1].match(str_11)||id[1].match(str_12)){
            var pos = $target.offset().top - 150;
    }
      if(id[1].match(str_13)||id[1].match(str_14)){
            var pos = $target.offset().top - 160;
    }
      if(id[1].match(str_15)||id[1].match(str_16)){
            var pos = $target.offset().top - 180;
    }
      if(id[1].match(str_17)||id[1].match(str_18)){
            var pos = $target.offset().top - 200;
    }
      if(id[1].match(str_19)||id[1].match(str_20)){
            var pos = $target.offset().top - 210;
    }
      if(id[1].match(str_21)||id[1].match(str_22)){
            var pos = $target.offset().top - 230;
    }
    if($target.length){
       $("html, body").animate({scrollTop:pos}, 1700);
    }
  }
});
