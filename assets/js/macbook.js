var topKey, bottomKey;

$(document).ready(function () {

  $(document).keydown(function(e){
    if(e.keyCode == 38 && typeof topKey === 'function') {
      topKey();
    } else if(e.keyCode == 40 && typeof bottomKey === 'function') {
      bottomKey();
    }
  });

  parallax.add($("#index")).add($("#aboutslide")).add($("#skillsslide")).add($("#projectsslide")).add($("#talktomeslide"));

  parallax.background = $(".container");

  parallax.preload = function(){
    topKey = bottomKey = "";
  };

  parallax.index.onload=function(){
    noTop();
    setBottom("aboutslide", "About Me");
  };

  parallax.aboutslide.onload=function(){
    setTop("index", "Introduction");
    setBottom("skillsslide", "My Skills");
  };

  parallax.skillsslide.onload=function(){
    setTop("aboutslide", "About me");
    setBottom("projectsslide", "Projects");
  };

  parallax.projectsslide.onload=function(){
    setTop("skillsslide", "My Skills");
    setBottom("talktomeslide", "Talk To Me");
  };

  parallax.talktomeslide.onload=function(){
    setTop("projectsslide", "Projects");
    noBottom();
  };

  function setTop(page, text){
    $("#upControl").show().unbind('click').click(function(){
      parallax[page].top();
    });
    topKey = function(){
      parallax[page].top();
    };
  }

  function setBottom(page, text){
    $("#downControl").show().unbind('click').click(function(){
      parallax[page].bottom();
    });
    bottomKey = function(){
      parallax[page].bottom();
    };
  }

  function noTop(){
    $("#upControl").show().unbind('click');
    topKey = function(){
      
    };
  }

  function noBottom(){
    $("#downControl").show().unbind('click');
    bottomKey = function(){
      
    };
  }

  $("#downControl").mouseenter(function(){
    $("#downArrow").fadeTo(500,1);
  }).mouseleave(function(){
    $("#downArrow").stop().fadeTo(500,0.5);
  });

  $("#upControl").mouseenter(function(){
    $("#upArrow").fadeTo(500,1);
  }).mouseleave(function(){
    $("#upArrow").stop().fadeTo(500, 0.5);
  });

  parallax.index.show();

});